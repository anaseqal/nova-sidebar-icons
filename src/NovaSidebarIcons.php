<?php

namespace Anaseqal\NovaSidebarIcons;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaSidebarIcons extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::style('nova-sidebar-icons', __DIR__.'/../dist/css/tool.css');
    }

}
