<?php namespace Openlab\Arrivals;

use Backend;
use System\Classes\PluginBase;

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
