<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
use App\Http\Controllers\Controller;

class ticketController extends Controller
{
    //
    public function add_ticket(Request $request)
    {
        $post = new Ticket();

        $post->booked_seat = $request->seat;
        $post->date = $request->date;
        $post->schedule_id = $request->schedule_id;
        $post->id = $request->user_id;

        $post->save();

        return redirect('/schedule')->with('status', 'You have been booked the tickets successfully!!!');
    }

    public function show_ticket($id)
    {
        $ticket_db = DB::select("select * from tickets inner join schedules on tickets.schedule_id =
        schedules.schedule_id inner join bus_routes on schedules.bus_route_id =
        bus_routes.bus_route_id inner join operators on bus_routes.operator_id =
        operators.operator_id where id ='$id' ");

        return view('user.booked')->with(['tickets' => $ticket_db]);
    }
}
