<?php

namespace AlirezaTahriri\MiAlert;

use AlirezaTahriri\MiAlert\Models\Notification;

class MiAlert {
    public function get_random_num() {
        return random_int(100, 1000);
    }

    public function get_messages() {
        return Notification::all();
    }
}