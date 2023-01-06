<?php namespace Openlab\Udaje;

use Backend;
use System\Classes\PluginBase;

/**
 * udaje Plugin Information File
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
            'name'        => 'Údaje Žiakov',
            'description' => 'Osobne udaje mojich spoluziakov',
            'author'      => 'openlab',
            'icon'        => 'icon-user-circle'
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
            'Openlab\Udaje\Components\MyComponent' => 'myComponent',
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
            'openlab.udaje.some_permission' => [
                'tab' => 'udaje',
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

        return [
            'udaje' => [
                'label'       => 'User Data',
                'url'         => Backend::url('openlab/udaje/Users'),
                'icon'        => 'icon-user-circle',
                'permissions' => ['openlab.udaje.*'],
                'order'       => 500,
            ],
        ];
    }
}
