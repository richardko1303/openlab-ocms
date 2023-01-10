<?php namespace Openlab\Arrivalcheck;

use Backend;
use SebastianBergmann\Environment\Console;
use System\Classes\PluginBase;
use Openlab\Arrivals\Models\Arrival;
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

        Arrival::extend(function ($model) {
            $model->bindEvent('model.afterCreate', function () use ($model) {
                Log::info("{$model->name} was created!");

            $hour = date('H');

            if($hour < 8) {
                Log::info($model->name . $model->surname . ' => On Time');
            } else if($hour >= 8) {
                Log::info($model->name . $model->surname . ' => Late');
            } else {
                Log::info($model->name . $model->surname . ' => On Time');
            }
            });
        });
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
