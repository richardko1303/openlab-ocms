<?php
namespace Openlab\Arrivals\Http\Controllers;

use Illuminate\Routing\Controller;
use Openlab\Arrivals\Http\Resources\ArrivalResource;
use Openlab\Arrivals\Models\Arrival;
use Openlab\Arrivals\Http\Resources\UserResource;
use Carbon\Carbon;
use Rainlab\User\Facades\Auth;
use LibUser\Userapi\Models\User;
use Event;

class ArrivalController extends Controller {
    public function arrivals() {
        return ArrivalResource::collection(Arrival::all());
    }

    public function arrival($id) {
        return ArrivalResource::collection(Arrival::find($id));
    }

    public function delete($id) {
        $arrival = Arrival::find($id);
        $arrival->delete();
        return ArrivalResource::collection(Arrival::find($id));
    }

    public function create() {
        $arrival = new Arrival;
        $arrival->user_id = auth()->user()->id;
        $arrival->name = auth()->user()->surname;
        $arrival->surname = auth()->user()->surname;
        $arrival->arrival = date("Y-m-d H:i:s");
        $arrival->save();

        return ArrivalResource::make($arrival);
    }
}