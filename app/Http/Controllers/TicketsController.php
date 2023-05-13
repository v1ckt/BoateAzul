<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use App\Models\events;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    private $objTicket;
    private $objEvent;

    public function __construct(){
        $this->objTicket = new tickets();
        $this->objEvent = new events();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = $this->objTicket->all();
        $events = $this->objEvent->all()->sortBy('eventname');
        return view('tickets.index', compact('events', 'tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(tickets $tickets)
    {
        //
    }
}
