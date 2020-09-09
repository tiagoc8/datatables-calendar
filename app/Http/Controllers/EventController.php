<?php

namespace App\Http\Controllers;

use App\Event;

use App\Http\Requests\EventRequest;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function loadEvents(){

        $events = Event::all();

        return response()->json($events);
    }

    public function store(Request $request){

        Event::create($request->all());

        return response()->json(true);
    }

    public function update(Request $request){

        $event = Event::where('id', $request->id)->first();

        $event->fill($request->all());

        $event-> save();

        return response()->json(true);
    }
}