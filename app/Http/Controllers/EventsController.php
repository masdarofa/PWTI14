<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function show($location, $name)
    {
    return view('events.show')
    ->with('location', $location)
    ->with('name', $name);
    }
    
    public function index()
    {
    $events = Event::all();
    return view('events.index')->with('events', $events);
    }
}
