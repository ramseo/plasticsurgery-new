<?php

namespace Modules\Cms\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\Cms\Events\PageCreated' => [
            'Modules\Cms\Listeners\PageCreated\CreatePageData',
        ],
        'Modules\Cms\Events\PageUpdated' => [
            'Modules\Cms\Listeners\PageUpdated\UpdatePageData',
        ],
        'Modules\Cms\Events\PageViewed' => [
            'Modules\Cms\Listeners\PageViewed\IncrementHitCount',
        ],
    ];
}
