<?php

use Openlab\Arrivals\Models\Arrival;
use System\ReportWidgets\Status;
use Rainlab\User\Facades\Auth;
use Rainlab\User\Models\User;
//  use Autor\Plugin\Models\Model

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {

        Route::get('arrivals', function () {
            $arrivals = Arrival::all();
            return $arrivals;
        });
        
        Route::get('arrivals/{id}', function ($id) {
            $arrival = Arrival::find($id);
            return $arrival;
        });
        
        Route::delete('arrivals/{id}/delete', function ($id) {
            $arrival = Arrival::find($id);
            $arrival->delete();
            return $arrival;
        });
        
        // Route::post('arrivals/create', function () {
        
        //     $name = post('name');
        //     $surname = post('surname');
        
        //     $arrival = new Arrival;
        //     $arrival->name = $name;
        //     $arrival->surname = $surname;
        //     $arrival->arrival = date("Y-m-d H:i:s");
        //     $arrival->save();
        
        //     // Event::fire('arrival.created', $arrival);

        //     return $arrival;
        // });

        // Route::middleware(['auth'])->group(function () {

            
            
        // });
    });
});
