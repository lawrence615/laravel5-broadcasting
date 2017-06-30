<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('candidates/data', function () {

    $data = [
        [
            'backgroundColor' => '#2196F3',
            'candidate' => 'Candidate 1',
            'votes' => 528,
        ],
        [
            'backgroundColor' => '#000000',
            'candidate' => 'Candidate 2',
            'votes' => 1034,
        ],
        [
            'backgroundColor' => '#4CAF50',
            'candidate' => 'Candidate 3',
            'votes' => 778,
        ],
        [
            'backgroundColor' => '#ff9800',
            'candidate' => 'Candidate 4',
            'votes' => 200,
        ]
    ];

    return \Illuminate\Http\Response::create(['data' => $data], 200);
});
