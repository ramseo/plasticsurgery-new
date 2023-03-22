<?php

namespace Modules\Cms\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Cms\Entities\Page;

class PageCreated
{
    use SerializesModels;

    public $page;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
