<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Cache;
use Carbon\Carbon;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $expiresAt = Carbon::now()->addMinute(2);
            Cache::put('user-is-online-' .Auth::user()->id, true, $expiresAt);
        }
        return $next($request);
    }
}
