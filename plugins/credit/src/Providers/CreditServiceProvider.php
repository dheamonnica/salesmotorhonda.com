<?php

namespace Botble\Credit\Providers;

use Botble\Credit\Models\Credit;
use Illuminate\Support\ServiceProvider;
use Botble\Credit\Repositories\Caches\CreditCacheDecorator;
use Botble\Credit\Repositories\Eloquent\CreditRepository;
use Botble\Credit\Repositories\Interfaces\CreditInterface;
use Botble\Support\Services\Cache\Cache;
use Botble\Base\Supports\Helper;
use Botble\Base\Events\SessionStarted;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;

class CreditServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * @author Sang Nguyen
     */
    public function register()
    {
        if (setting('enable_cache', false)) {
            $this->app->singleton(CreditInterface::class, function () {
                return new CreditCacheDecorator(new CreditRepository(new Credit()), new Cache($this->app['cache'], CreditRepository::class));
            });
        } else {
            $this->app->singleton(CreditInterface::class, function () {
                return new CreditRepository(new Credit());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('plugins/credit')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadRoutes();

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-credit',
                'priority' => 5,
                'parent_id' => null,
                'name' => trans('plugins.credit::credit.name'),
                'icon' => 'fa fa-list',
                'url' => route('credit.list'),
                'permissions' => ['credit.list'],
            ]);
        });
    }
}
