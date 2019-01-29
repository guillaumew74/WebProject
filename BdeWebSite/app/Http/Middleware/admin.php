<?php
namespace App\Http\Middleware;
use Closure;
//middleware Admin, le midlleware nous permet de verifier si les utilisateurs son administrateur
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)//cette function verifier si la state est a 2
    {
        $user = $request->user();//variable de session
        if ($user && $user->state === 2) {
            return $next($request);
        }
        return redirect('error');// si pas admin retourne la view error
    }
}
