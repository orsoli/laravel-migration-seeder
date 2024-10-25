<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Train;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TrainController extends Controller
{
        public function home() {
            // local Viariables
            $headerTableItems = [
                '#',
                'Company',
                'Departure station',
                'Arrival station',
                'Departure time',
                'Arrival time',
                'Train code',
                'Number of carriages',
                'On time',
                'Cancelled',
            ];
            $currentDate = Carbon::now()->format('d/m/Y'); // Current date in custom format
            // DB variables
            $trains = Train::all();

        return view('pages.home', compact('headerTableItems','trains', 'currentDate'));
    }

}