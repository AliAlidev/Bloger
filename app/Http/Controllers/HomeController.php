<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\event;
use App\Models\Goal;
use App\Models\slider;
use App\Models\team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teams = team::all();
        $customers = customer::paginate(4);
        $events = event::paginate(4);
        foreach($events as $event)
        {
            $event->description = substr($event->description,0,50) . '...';
        }
        $sliderData = slider::all();
        $goalsData = Goal::paginate(6);
        foreach($goalsData as $item)
        {
            $item->description = substr($item->description,0,50) . '...';
        }
        return view('index', ['slider_data' => $sliderData, 'goals_data' => $goalsData, 'events' => $events,
        'customers' => $customers, 'teams' => $teams]);
    }

    public function showItem($id)
    {
        $sliderData = slider::all();
        $goalsData = Goal::all();
        $item = Goal::find($id);
        return view('showgoals', ['slider_data' => $sliderData, 'goals_data' => $goalsData,'goalitem' => $item]);
    }
}
