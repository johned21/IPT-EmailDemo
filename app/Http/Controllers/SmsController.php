<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index()
    {
        Nexmo::message()->send([
            'to' => '+639952293273',
            'from' => 'sender',
            'text' => 'Kalma Ako LANG TO'
        ]);
        
        echo "Message Sent!";
        
    }
}
