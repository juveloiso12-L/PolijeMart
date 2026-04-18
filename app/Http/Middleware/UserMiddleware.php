<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika terdeteksi belum login, maka wajib login.
        if (!Auth::check()){
            return redirect()->route('login');
        }
        
        // Jika terdeteksi login sebagai user, maka bisa masuk ke halaman user.
        if (Auth::user()->role == 'user'){
            return $next($request);
        }

        // Jika user mencoba mengakses halaman admin, maka akan langsung dilempar ke halaman user.
        if (Auth::user()->role == 'admin'){
            return redirect()->route('admin.dashboard');
        }
        abort(401, "Akses Tidak Sah");
    }
}
