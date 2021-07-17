<?php

namespace rameshdada\awesome;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [

    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less')
];
