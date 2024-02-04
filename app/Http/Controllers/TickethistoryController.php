<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickethistory;
use App\Models\Ticket;

class TickethistoryController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->all();

        $ticket_history = new Tickethistory();
        $ticket_history->ticket_id = $data['ticket_id'];
        $ticket_history->comment = $data['comment'];
        $ticket_history->comment_user_id = $data['user_id'];;
        $ticket_history->save();

        return redirect()->back()->with('success', 'Ticker history created successfully!');
    }

}
