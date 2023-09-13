<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class Dokter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()->role == User::ROLE_DOKTER) {
            return $next($request);
        }
        return back()->with('error', 'Maaf anda belum memiliki hak akses');
        // abort(401);

        // $user = User::where('nik', $request->nik)->first();
        // if ($user->role == 'admin') {
        //     return redirect('admin');
        // } elseif ($user->role == 'dokter') {
        //     return redirect('dashboard');
        // }

        // return $next($request);

        // if($request->user()->role == User::ROLE_DOKTER) {
        //     return redirect('dashboard');
        // } elseif($request->user()->role == User::ROLE_ADMIN) {
        //     return redirect('admin');
        // }
        // return $next($request);
        
        
    }
}
