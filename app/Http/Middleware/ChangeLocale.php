<?php

namespace App\Http\Middleware;

use Closure;

class ChangeLocale
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
        // Definit dans une action dans le fichier web.php
        $lang = empty(session('lang')) ? ENV('LOCALE')  : session('lang'); 


        app()->setLocale($lang);

        return $next($request); 
        // Ce n'est pas une redirection, le setLocale n'est pas squizzé, on continue à executer le code => les contrôleurs
    }
}
