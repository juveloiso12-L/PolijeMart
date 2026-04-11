<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        // Jika terdeteksi login sebagai admin, maka bisa masuk ke halaman admin.
        if (Auth::user()->role == 'admin'){
            return $next($request);
        }

        // Jika admin mencoba mengakses halaman user, maka akan langsung dilempar ke halaman admin.
        if (Auth::user()->role == 'user'){
            return redirect()->route('customer.index');
        }
        
        abort(401, "Akses Tidak Sah");
    }
}
