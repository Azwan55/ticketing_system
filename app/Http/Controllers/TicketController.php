<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //create
    public function createTicket(Request $request){
        Ticket::create($request->all());
        return redirect('/home');

    }

    //Read
    public function readAllTicket(){
        $tickets = Ticket::all();
        //dd($tickets);
        return view("home", compact("tickets"));
        

    }

    //Update
    public function viewTicketById($id){
        $ticket = Ticket::find($id);
        return view("edit-ticket", compact("ticket"));
    }

     public function modifiedTicket($id,Request $request){
       $ticket = Ticket::find($id);
       $ticket->name = $request->name;
       $ticket->email = $request->email;
       $ticket->phone = $request->phone;
       $ticket->level = $request->level;
       $ticket->status = $request->status;
       $ticket->msg = $request->msg;
       $ticket->save();


        return redirect('/home');

    }

    //Delete

    public function deleteTicketById($id){
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('/home');
    }
}
