<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
{

    public function handle($request, Closure $next)
    {
        $Authorization = $request->header('Authorization');

        if (empty($Authorization)) {
            return response(
                [
                    'code' => 401,
                    'message' => 'Authentication failed'
                ],
                401
            );
        }

    }
}