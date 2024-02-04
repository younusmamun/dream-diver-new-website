<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Tickethistory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $ticket = new Ticket();

        $ticket->ticket_creator_id = $data['ticket_creator_id'];
        $ticket->email = $data['email'];
        $ticket->issue = $data['issue'];
        $ticket->status = $data['status'];
        $ticket->save();



        return redirect()->back()->with('success', 'Ticket created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        // $ticket_history = Tickethistory(where(ticket_id = $ticket->id))->get();
        // return view('tickets.edit', compact('ticket'));


        $ticket_history = Tickethistory::where('ticket_id', $ticket->id)->get();
        return view('tickets.edit', compact('ticket', 'ticket_history'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $data = $request->all();

        $ticket->email = $data['email'];
        $ticket->issue = $data['issue'];
        $ticket->status = $data['status'];
        $ticket->save();



        return redirect()->back()->with('success', 'Ticket Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
