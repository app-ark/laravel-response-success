<?php

namespace Xiaohuilam\LaravelResponseSuccess;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\ResponseFactory;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ResponseFactory::macro('success', function ($data = null, $meta = null) {
            return response()->json(['success' => true, 'code' => 200, 'message' => 'OK', 'data' => $data, 'meta' => $meta,]);
        });
        ResponseFactory::macro('error', function ($code = 400, $message = null) {
            return response()->json(['success' => false, 'code' => $code, 'message' => $message, 'data' => new \stdClass,]);
        });
    }
}
