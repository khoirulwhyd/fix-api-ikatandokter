<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\User;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()->role == User::ROLE_USER) {
            return response()->json(['error' => 'Anda tidak memiliki izin untuk mengakses dashboard.'], 403);
        }
        abort(401);
    }
}