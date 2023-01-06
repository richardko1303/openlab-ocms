<?php namespace Openlab\Arrivalcheck;

use Backend;
use SebastianBergmann\Environment\Console;
use System\Classes\PluginBase;
use Event;
use Log;

/**
 * arrivalcheck Plugin Information File
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
            'name'        => 'arrivalcheck',
            'description' => 'No description provided yet...',
            'author'      => 'openlab',
            'icon'        => 'icon-leaf'
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
        Event::listen('arrival.created', function ($arrival) {

            $hour = date('H');

            if($hour < 8) {
                Log::info($arrival->name . $arrival->surname . ' => On Time');
            } else if($hour >= 8) {
                Log::info($arrival->name . $arrival->surname . ' => Late');
            } else {
                Log::info($arrival->name . $arrival->surname . ' => On Time');
            }
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Openlab\Arrivalcheck\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'openlab.arrivalcheck.some_permission' => [
                'tab' => 'arrivalcheck',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'arrivalcheck' => [
                'label'       => 'arrivalcheck',
                'url'         => Backend::url('openlab/arrivalcheck/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['openlab.arrivalcheck.*'],
                'order'       => 500,
            ],
        ];
    }
}
