<?php

namespace MyApLaravel\Http\Middleware;

use Closure;
use MyApLaravel\User;
use Illuminate\Contracts\Auth\Guard;

class LoadUser
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->id != 1)
        {
            return redirect('/admin')->with('message-error', 'Sin privilegios');
        }
        
        return $next($request);
        
    }
}
