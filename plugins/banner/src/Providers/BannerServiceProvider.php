<?php

namespace Botble\Banner\Providers;

use Botble\Banner\Models\Banner;
use Illuminate\Support\ServiceProvider;
use Botble\Banner\Repositories\Caches\BannerCacheDecorator;
use Botble\Banner\Repositories\Eloquent\BannerRepository;
use Botble\Banner\Repositories\Interfaces\BannerInterface;
use Botble\Support\Services\Cache\Cache;
use Botble\Base\Supports\Helper;
use Botble\Base\Events\SessionStarted;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;

class BannerServiceProvider extends ServiceProvider
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
            $this->app->singleton(BannerInterface::class, function () {
                return new BannerCacheDecorator(new BannerRepository(new Banner()), new Cache($this->app['cache'], BannerRepository::class));
            });
        } else {
            $this->app->singleton(BannerInterface::class, function () {
                return new BannerRepository(new Banner());
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
            ->setNamespace('plugins/banner')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadRoutes();

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-banner',
                'priority' => 5,
                'parent_id' => null,
                'name' => trans('plugins.banner::banner.name'),
                'icon' => 'fas fa-film',
                'url' => route('banner.list'),
                'permissions' => ['banner.list'],
            ]);
        });
    }
}
