<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\Schedule;

class scheduleController extends Controller
{
    //
    public function show_schedule()
    {
        $location_db = DB::select('select * from locations');
        

        return view('user.viewSearch')->with(['locations' => $location_db]);
    }

    public function search_schedule(Request $request){
        
        $location_db = DB::select('select * from locations');
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $date = $request->input('date');
        

        $schedule_db = DB::select("select * from schedules inner join bus_routes on schedules.bus_route_id = bus_routes.bus_route_id inner join operators on bus_routes.operator_id = operators.operator_id
        where origin = '$origin' and destination = '$destination'");

        

        return view('user.displaySchedule')->with([ 'schedules' => $schedule_db, 'locations' => $location_db, 'date'=>$date]);
    }
}
