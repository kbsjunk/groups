<?php

namespace Inspheric\Groups\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;
use Inspheric\Groups\Group;

class GroupsServiceProvider extends PackageServiceProvider
{
    protected $name = 'groups';

    protected $namespace = 'Inspheric\Groups\Http\Controllers';

    public function bindRoutes()
    {
        $this->bindModel('groups', Group::class);
    }

}
