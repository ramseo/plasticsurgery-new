<?php

namespace Modules\Cms\Listeners\PageCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use Modules\Cms\Events\PageCreated;

class CreatePageData implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     *
     * @return void
     */
    public function handle(PageCreated $event)
    {
        $page = $event->page;

        Log::debug('Listeners: CreatePageData');
    }
}
