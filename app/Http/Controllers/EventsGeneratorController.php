<?php

namespace App\Http\Controllers;

use App\Events\ResultsReported;
use Illuminate\Http\Request;

class EventsGeneratorController extends Controller
{

    public function index()
    {

        $data = [
            [
                'backgroundColor' => '#2196F3',
                'candidate' => 'Candidate 1',
                'votes' => random_int(1000, 7000),
            ],
            [
                'backgroundColor' => '#000000',
                'candidate' => 'Candidate 2',
                'votes' => random_int(500, 10000),
            ],
            [
                'backgroundColor' => '#4CAF50',
                'candidate' => 'Candidate 3',
                'votes' => random_int(1500, 10000),
            ],
            [
                'backgroundColor' => '#ff9800',
                'candidate' => 'Candidate 4',
                'votes' => random_int(50, 1000),
            ]
        ];


        broadcast(new ResultsReported($data));
    }
}
