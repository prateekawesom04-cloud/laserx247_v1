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

        $userData = User::getCurrentUser();
        // dd($userData);
        if(!empty($userData)){

            $userAdmin = User::where('user_uid', $userData->admin_uid)->whereIn('status',[1,2,3,4])->first();
            // dd($userAdmin);
            View::share('userData',$userData);
            View::share('userAdmin',$userAdmin);

            $appdata = User::where('user_uid', $userData->admin_uid)->first();
            if($appdata){
                if($appdata->additional_data){
                    $additional_data = json_decode($appdata->additional_data);
                    $news = $additional_data->marquee;
                    View::share('news',$news);
                } else{
                    View::share('news',[]);
                }
            }else{
                View::share('news',[]);
            }

        } else{
            
            View::share('userData',False);

        }
        
        
        View::share('_GAMES',$_GAMES);
        View::share('providers',$providers);

        return $next($request);
    }
}
