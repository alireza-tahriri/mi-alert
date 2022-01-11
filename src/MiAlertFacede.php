<?php

namespace AlirezaTahriri\MiAlert;

use Illuminate\Support\Facades\Facade;

class MiAlertFacede extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'mi-alert';
    }
}