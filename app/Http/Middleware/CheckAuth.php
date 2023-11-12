<?php

namespace App\Http\Middleware;

use Closure;


class CheckAuth
{
    public function handle($request, Closure $next, $role)
    {
        // Periksa apakah peran pengguna sesuai dengan yang diharapkan
        if ($request->session()->get('role') !== $role) {
            abort(403, 'Upss.. Kamu tidak memiliki akses untuk halaman ini.');
        }

        return $next($request);
    }
}
