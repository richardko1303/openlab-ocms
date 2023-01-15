<?php

namespace Openlab\Arrivals\Classes\Extend;

use RainLab\User\Models\User;
use Rainlab\User\Controllers\Users as UsersController;
use Atom\Students\Models\Arrival;
use Event;

class UserExtend {
    public static function UserExtend() {
        User::extend(function($model) {
            $model->hasMany['arrivals'] = ['Openlab\Arrivals\Models\Arrival'];
        });
    }
}