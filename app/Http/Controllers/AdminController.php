<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\contact;
use App\Models\event;
use App\Models\family;
use App\Models\information_site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
    $nbr_users = User::where('role', '!=', 1)->count();
    $nbr_categories = categorie::count();
    $nbr_familes = family::count();
    $nbr_contacts = contact::count();
    $userGenderCounts = User::select('sex', DB::raw('count(*) as count'))
    ->groupBy('sex')
    ->get();

    // Transform the data if needed, e.g., into a format suitable for the chart library
    $chartData = [
        'labels' => $userGenderCounts->pluck('sex'),
        'data' => $userGenderCounts->pluck('count'),
    ];
    $categoryEventCounts = event::select('categorie_id', DB::raw('count(*) as count'))
        ->groupBy('categorie_id')
        ->get();

    $categoryNames = categorie::whereIn('id', $categoryEventCounts->pluck('categorie_id'))
        ->pluck('name', 'id');

    $chartData_categoriedeevent = [
        'labels' => $categoryNames->values(),
        'data' => $categoryEventCounts->pluck('count'),
    ];
    return view('admin.index', compact('nbr_users','nbr_categories','nbr_familes','nbr_contacts','chartData','chartData_categoriedeevent'));

    }
   
    
}
