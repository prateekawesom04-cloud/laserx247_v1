<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ApiCallController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDataController;



Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
// Route::get('/{slug}', function ($slug) {
//     if(View::exists('pages.'.$slug)){
//         return view('pages.'.$slug);
//     } else{
//         return redirect($slug);
//     }
// });

Route::middleware(['auth_middleware'])->group(function () {
    
    Route::get('login', function () {
        return view('pages.login');
    })->name('pages.login');

    Route::get('register', function (Request $request) {
        
        $referral_code = '';
        
        if($request->session()->has('referral_code')){
            
            $referral_code = session('referral_code');

        }

        Session::flush();

        return view('pages.register',compact('referral_code'));

    })->name('pages.register');

});

Route::middleware(['auth_check_middleware'])->group(function () {
    
    Route::post('addStake', [UserController::class,'addStake'])->name('user.post.addStake')->withoutMiddleware([VerifyCsrfToken::class]);

    Route::get('logout', function () {
        Session::flush();
        return redirect()->route('index');
    });

    Route::get('removeSession', function () {
        Session::forget('user_session');
    });
    
    // User Section Start

    // Route::get('/deposit', function () {
    //     return view('account_pages.deposit-withdrawal');
    // });
    
    Route::get('/profile', [UserController::class,'profile'])->name('user.profile');

    Route::get('/deposit', [UserController::class,'deposit'])->name('user.deposit');

    Route::get('/withdrawal', [UserController::class,'withdrawal'])->name('user.withdrawal');

    Route::get('/enterStakes', [UserController::class,'enterStakes'])->name('user.enterStakes');

    Route::get('/transaction', [UserController::class,'transaction'])->name('user.transaction');

    Route::get('/refer_rewards', [UserController::class,'refer_rewards'])->name('user.refer_rewards');

    Route::get('/refer/{referral_code}', [UserController::class,'referral_code'])->name('user.referral_code');

    Route::get('/wallet', function () {
        return view('account_pages.wallet');
    })->name('user.wallet');
    
    
    Route::get('/profit_loss', function () {
        return view('account_pages.profit_loss');
    })->name('user.profit_loss');
    Route::get('/favourite', function () {
        return view('account_pages.favourite');
    })->name('user.favourite');
    Route::get('/statements', function () {
        return view('account_pages.statements');
    })->name('user.statements');

    
    Route::get('/bonus', [UserController::class,'bonus'])->name('user.bonus');

    Route::get('/notification', [UserController::class,'notification'])->name('user.notification');

    Route::get('/game_statics', [GamesController::class,'game_statics'])->name('user.game_statics');
    
    



    Route::get('/unsettled_bets', function () {
        return view('account_pages.unsettled_bets');
    })->name('user.unsettled_bets');
    Route::get('/market_analysis', function () {
        return view('account_pages.market_analysis');
    })->name('user.market_analysis');
    Route::get('/change_password', function () {
        return view('account_pages.change_password');
    })->name('user.change_password');


    // post requests
    
    Route::post('/addBank', [UserController::class,'addBank'])->name('user.addBank')->withoutMiddleware([VerifyCsrfToken::class]);


    // User Section End

});

Route::get('/', function () {
    return view('pages.index');
})->name('index');


Route::get('forgot-page', function () {
    return view('pages.forgot-page');
})->name('pages.forgot-page');

Route::get('home', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/in-play', function () {
    return view('pages.in-play');
})->name('pages.in-play');
Route::get('/multi-market', function () {
    return view('pages.multi-market');
})->name('pages.multi-market');
Route::get('/cricket', function () {
    return view('pages.cricket');
})->name('pages.cricket');
Route::get('/football', function () {
    return view('pages.football');
})->name('pages.football');
Route::get('/tennis', function () {
    return view('pages.tennis');
})->name('pages.tennis');
Route::get('/casino', function () {
    return view('pages.casino');
})->name('pages.casino');
Route::get('/sports-book', function () {
    return view('pages.sports-book');
})->name('pages.sports-book');
Route::get('/providers_tab', function () {
    return view('pages.providers_tab');
})->name('pages.providers_tab');

// Games


Route::get('gameList', [GamesController::class,'gameList'])->name('gameList');




Route::get('demoLogin', [AuthController::class,'demoLogin'])->name('demoLogin');


// POST requests

Route::post('login', [AuthController::class,'login'])->name('login')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('register', [AuthController::class,'register'])->name('register')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('forgetPassword', [AuthController::class,'forgetPassword'])->name('forgetPassword')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('changePassword', [AuthController::class,'changePassword'])->name('changePassword')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('launchGame', [GamesController::class,'launchGame'])->name('launchGame')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('launchGame/callback', [GamesController::class,'launchGameCallback'])->name('launchGameCallback')->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('sportsbook', [GamesController::class,'sportsbook'])->name('sportsbook')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('paymentRequest', [PaymentController::class,'paymentRequest'])->name('paymentRequest')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('paymentCallback', [PaymentController::class,'paymentCallback'])->name('paymentCallback')->withoutMiddleware([VerifyCsrfToken::class]);



// Api Calls

Route::get('getOtp', [AuthController::class,'getOtp'])->name('getOtp');

Route::get('verifyOtp', [AuthController::class,'verifyOtp'])->name('verifyOtp');



// testing part

Route::get('callApi/{apiName}',[ApiCallController::class,'callApi']);

Route::middleware('auth_middleware')->group(function(){
    Route::get('test', function(){
        return 'testing routes';
    });
    
});


// @if(!session()->has('user_session'))






// Admin routes

Route::middleware(['admin_auth_middleware'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/login', function () {
            return view('admin.pages.login');
        })->name('admin.login');
        
        Route::post('login', [AdminAuthController::class,'login'])->name('admin.auth.login');

    });

});

Route::middleware(['admin_auth_check_middleware'])->group(function () {
    
    Route::prefix('admin')->group(function () {
        
        Route::get('/logout', function () {
            Session::flush();
            return redirect()->route('admin.login');
        })->name('admin.logout');

        Route::get('/', [AdminDataController::class,'index'])->name('admin.index');

        Route::get('/user_downline_list', [AdminDataController::class,'user_downline_list'])->name('admin.user_downline_list');
        
        Route::post('/user_client_account', [AdminDataController::class,'submitForm'])->name('admin.action.user_client_account');
        
        Route::get('/master_downline_list', [AdminDataController::class,'master_downline_list'])->name('admin.master_downline_list');

        Route::post('/add_edit_client_account', [AdminDataController::class,'submitForm'])->name('admin.action.add_edit_client_account');
        
        Route::get('/my_account', [AdminDataController::class,'my_account'])->name('admin.my_account');

        Route::get('/event_profit_loss', function () {
        return view('admin.pages.event_profit_loss');
            })->name('admin.event_profit_loss');

        Route::get('/downline_profit_loss', function () {
        return view('admin.pages.downline_profit_loss');
            })->name('admin.downline_profit_loss');

             Route::get('/add_edit_client_account', function () {
        return view('admin.pages.add_edit_client_account');
            })->name('admin.add_edit_client_account');

               Route::get('/user_client_account', function () {
        return view('admin.pages.user_client_account');
            })->name('admin.user_client_account');

        Route::get('/betlist', function () {
        return view('admin.pages.betlist');
            })->name('admin.betlist');

        Route::get('/market_analysis', function () {
        return view('admin.pages.market_analysis');
            })->name('admin.market_analysis');

        Route::get('/deposit', [AdminDataController::class,'deposit'])->name('admin.deposit');

        Route::get('/withdraw', [AdminDataController::class,'withdraw'])->name('admin.withdraw');

            Route::get('/payments', function () {
        return view('admin.pages.payments');
            })->name('admin.payments');


            Route::get('/commission', function () {
        return view('admin.pages.commission');
            })->name('admin.commission');

            Route::get('/admin_fund', function () {
        return view('admin.pages.admin_fund');
            })->name('admin.admin_fund');

            Route::get('/news_view', function () {
        return view('admin.pages.news_view');
            })->name('admin.news_view');

            Route::get('/user_general_setting', function () {
        return view('admin.pages.user_general_setting');
            })->name('admin.user_general_setting');

            Route::get('/block_market', function () {
        return view('admin.pages.block_market');
            })->name('admin.block_market');

            Route::get('/event_wise_setting', function () {
        return view('admin.pages.event_wise_setting');
            })->name('admin.event_wise_setting');

            Route::get('/betting', function () {
        return view('admin.pages.betting');
            })->name('admin.betting');

            Route::get('/add_banner', function () {
        return view('admin.pages.add_banner');
            })->name('admin.add_banner');

            Route::get('/add_number', function () {
        return view('admin.pages.add_number');
            })->name('admin.add_number');

        Route::get('/add_bonus', function () {
        return view('admin.pages.add_bonus');
            })->name('admin.add_bonus');




            

// Post/Action requests start

        Route::post('/createBonus', [AdminDataController::class,'createBonus'])->name('admin.action.createBonus');
        
        Route::post('/assignBonus', [AdminDataController::class,'assignBonus'])->name('admin.action.assignBonus');
        
        Route::post('/user_client_account', [AdminDataController::class,'user_client_account'])->name('admin.action.user_client_account');

        
        Route::post('updateModelData', [AdminDataController::class,'updateModelData'])->name('updateModelData')->withoutMiddleware([VerifyCsrfToken::class]);
            

    });
    
// Post/Action requests end


});
