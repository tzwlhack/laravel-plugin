<?php
namespace Yxx\LaravelPlugin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Yxx\LaravelPlugin\Events\PluginDeleted;
use Yxx\LaravelPlugin\Events\PluginInstalled;
use Yxx\LaravelPlugin\Listeners\ComposerRemoveListener;
use Yxx\LaravelPlugin\Listeners\ComposerRequireListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * @var array|array[]
     */
    protected $listen = [
        PluginInstalled::class => [
            ComposerRequireListener::class
        ],
        PluginDeleted::class => [
            ComposerRemoveListener::class
        ]
    ];


    public function boot(): void
    {
        parent::boot();
    }
}