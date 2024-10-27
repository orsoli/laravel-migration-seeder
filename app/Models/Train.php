<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getOnTimeStringAttribute(){
       return $this->on_time ? 'On Time' : 'Delayed';
    }

    public function getCancelledStringAttribute(){
       return $this->cancelled ? 'Cancelled' : '-';
    }

    public function getFormatedDepartureTimeAttribute(){
        $formatedDepartureTime = Carbon::parse($this->departure_time)->format('H:i A');
        return $formatedDepartureTime;
    }

    public function getFormatedArrivalTimeAttribute(){
        $formatedArrivalTime = Carbon::parse($this->arrival_time)->format('H:i A');
        return $formatedArrivalTime;
    }
}