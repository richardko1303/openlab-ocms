<?php namespace Openlab\Example;

use Backend;
use System\Classes\PluginBase;

/**
 * example Plugin Information File
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
            'name'        => 'Note',
            'description' => 'Zapis note!',
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
            'Openlab\Example\Components\MyComponent' => 'myComponent',
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
            'openlab.example.some_permission' => [
                'tab' => 'example',
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

        //Columny nezabudni odtsranit return

        return [
            'example' => [
                'label'       => 'Notes',
                'url'         => Backend::url('openlab/example/Notes'),
                'icon'        => 'icon-pencil-square',
                'permissions' => ['openlab.example.*'],
                'order'       => 500,
            ],
        ];
    }
}
