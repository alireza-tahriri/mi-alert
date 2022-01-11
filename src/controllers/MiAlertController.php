<?php

namespace AlirezaTahriri\MiAlert\Controllers;

use AlirezaTahriri\MiAlert\Models\Notification;
use App\Http\Controllers\Controller;

class MiAlertController extends Controller
{
    public function index()
    {
        return view('mi-alert::mialert-view');
    }

    public function notification()
    {
        return Notification::pluck('message')->all();
    }
}