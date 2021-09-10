<?php

namespace App\Http\Controllers;

use App\Jobs\EnviaEmailJob;
use Illuminate\Http\Request;

class EnviaEmailController extends Controller
{
    public function envia()
    {
        EnviaEmailJob::dispatch();
    }
}
