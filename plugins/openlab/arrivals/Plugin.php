<?php namespace Openlab\Arrivals;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User;
use Event;
use Openlab\Arrivals\Models\Arrival;

/**
 * arrivals Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Arrivals',
            'description' => 'Student arrival times.',
            'author'      => 'openlab',
            'icon'        => 'icon-clock-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        User::extend(function($model) {
            $model->hasMany['arrivals'] = ['Openlab\Arrivals\Models\Arrival', 'key' => 'user_id', 'order' => 'id'];
        });

        Event::listen('eloquent.created: RainLab\User\Models\User', function($user) {
            // $name = post('name');
            // $surname = post('surname');
        
            $arrival = new Arrival;
            $arrival->user_id = $user->id;
            $arrival->name = $user->name;
            $arrival->surname = $user->surname;
            $arrival->arrival = date("Y-m-d H:i:s");
            $arrival->save();
        });
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'arrivals' => [
                'label'       => 'Arrivals',
                'url'         => Backend::url('openlab/arrivals/Arrivals'),
                'icon'        => 'icon-clock-o',
                'permissions' => ['openlab.arrivals.*'],
                'order'       => 500,
            ],
        ];
    }
}
