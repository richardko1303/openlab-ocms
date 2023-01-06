<?php

use Openlab\Arrivals\Models\Arrival;
//  use Autor\Plugin\Models\Model

Route::get('api/arrivals', function () {
    $arrivals = Arrival::all();
    return $arrivals;
});

Route::get('api/arrivals/{id}', function ($id) {
    $arrival = Arrival::find($id);
    return $arrival;
});

Route::delete('api/arrivals/{id}/delete', function ($id) {
    $arrival = Arrival::find($id);
    $arrival->delete();
    return $arrival;
});

Route::post('api/arrivals/create', function () {

    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $arrival = new Arrival;
    $arrival->name = $name;
    $arrival->surname = $surname;
    $arrival->arrival = date("d-m-Y");
    $arrival->save();

    Event::fire('arrival.created', $arrival);

    return $arrival;
});
