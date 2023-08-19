<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==1){
            $event = event::all();
        }else{
    $id=Auth::user()->id;
    $event = event::where('user_id', $id)->get();
}
       // $cours = Cour::where('user_id',Auth::user()->id)->get();
      //  $cours = $filier->Cours();
        return view('event.index', compact('event'));
    }
     
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cour.create');
        $categories = categorie::all();

        return view('event.create', compact('categories'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $event = new event();
        $event->user_id = Auth::user()->id;
        $event->title = $request->input('title');
        $event->color = $request->input('color');
        $event->description_event = $request->input('description_event');
        $event->start_datetime = $request->input('start_datetime');
        $event->end_datetime = $request->input('end_datetime');
        $event->categorie_id = $request->input('categorie_id');
        $event->role = $request->input('role');
        
        $event->save();

        return  redirect()->back()->with('status','event add with Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $event = event::findOrFail($id);
        // $cat = event::where('name', 'like', '%'.$event->name.'%');
        
     
        // return view('event.detail', compact('event','cat')); 
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $event = event::find($id);
        $categories = categorie::all();

        return view('event.edit' , compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = event::find($id);
        $event->title = $request->input('title');
        $event->color = $request->input('color');
        $event->description_event = $request->input('description_event');
        $event->start_datetime = $request->input('start_datetime');
        $event->end_datetime = $request->input('end_datetime');
        $event->role = $request->input('role');
        $event->update();

        return redirect()->route('event.index')->with('status','event updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::find($id);
        $event->delete();
        return redirect()->back()->with('status','event Deleted Successfully');
    }
}
