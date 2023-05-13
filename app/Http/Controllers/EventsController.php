<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\tickets;
use App\Models\users;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    private $objEvento;
    private $objUser;
    private $objEntrada;
    public function __construct(){
       $this->objEvento = new events();
       $this->objUser = new users();
       $this->objEntrada = new tickets();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->objUser->all();
        $eventos = $this->objEvento->all()->sortBy('eventname');
        return view('events.index', compact('eventos', 'usuarios'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = $this->objEvento->all();
        $usuarios = $this->objUser->all()->sortBy('name');
        return view('events.create', compact('usuarios', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->objEvento->create([
            'eventname' => $request->events_eventname,
            'eventdescription' => $request->events_eventdescription,
            'date' => $request->events_date,
            'time' => $request->events_time,
            'user_id' => $request->events_user_id
        ]);
        return redirect('/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}
