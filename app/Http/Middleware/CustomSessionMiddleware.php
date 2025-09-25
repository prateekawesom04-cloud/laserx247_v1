<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Appdata;

class CustomSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $_GAMES = ["Cricket","Football","Tennis","Casino","Sports Book","Horse Racing","Greyhound Racing","Binary","Kabaddi","Politics","Basketball","Baseball","Table Tennis","Volleyball","Ice Hockey","Rugby","Mixed Martial Arts","Darts","Futsal","Casino Vivo"];

        $providers = Storage::disk('local')->get('games_data/providers.json');
        
        $providers = json_decode($providers);
        
        $domain = $request->host();

        $appdata = Appdata::where('app_domain',$domain)->first();
        if($appdata->additional_data){
            $additional_data = json_decode($appdata->additional_data);
            $news = $additional_data->marquee;
            View::share('news',$news);
        }
        
        View::share('_GAMES',$_GAMES);
        View::share('providers',$providers);
        $userData='';
        if(Session::has('admin_session')){
            $userData = explode('_user_',Session::get('admin_session'));
            $userData = $userData[1];
            $userData = User::getCurrentUser('user_uid', $userData);            
        } else{
            $userData = User::getCurrentUser();
        }
        
        if(!empty($userData)){

            View::share('userData',$userData);

        } else{
            
            View::share('userData',False);

        }

        return $next($request);
    }
}
