<?php

namespace Modules\Cms\Listeners\PageUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use Modules\Cms\Events\PageUpdated;

class UpdatePageData implements ShouldQueue
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
    public function handle(PageUpdated $event)
    {
        $page = $event->page;

        Log::debug('Listeners: UpdatePageData');
    }
}
