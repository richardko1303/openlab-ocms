<?php

use Openlab\Arrivals\Models\Arrival;
use Openlab\Arrivals\Http\Controllers\ArrivalController;
use System\ReportWidgets\Status;
use Rainlab\User\Facades\Auth;
use Rainlab\User\Models\User;
//  use Autor\Plugin\Models\Model

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        
        Route::get('arrivals', [ArrivalController::class, 'arrivals']);

        Route::get('arrivals/{id}', [ArrivalController::class, 'arrival']);

        Route::delete('arrivals/{id}', [ArrivalController::class, 'delete']);

        Route::middleware(['auth'])->group(function () {

            Route::post('arrivals/create', [ArrivalController::class, 'create']);
            
        });
    });
});
