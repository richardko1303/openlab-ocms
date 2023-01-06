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
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Openlab\Arrivals\Components\MyComponent' => 'myComponent',
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
            'openlab.arrivals.some_permission' => [
                'tab' => 'arrivals',
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
