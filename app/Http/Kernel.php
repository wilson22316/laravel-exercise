<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':api',
            // \Illuminate\Http\Middleware\HandleCors::class, // 加入這行
            \App\Http\Middleware\Cors::class,
        ],
    ];
}
