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
        
        $referral_code = NULL;
        
        if($request->session()->has('referral_code')){
            
            $referral_code = session('referral_code');

        }

        Session::flush();

        return view('pages.register',compact('referral_code'));

    })->name('pages.register');

});

Route::middleware(['auth_check_middleware'])->group(function () {
    
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

    Route::get('/refer_rewards', [UserController::class,'refer_rewards'])->name('user.refer_rewards');

    Route::get('/refer/{referral_code}', [UserController::class,'referral_code'])->name('user.referral_code');

    Route::get('/wallet', function () {
        return view('account_pages.wallet');
    });
    Route::get('/statements', function () {
        return view('account_pages.statements');
    });
    Route::get('/change_password', function () {
        return view('account_pages.change_password');
    });
    
    
    Route::get('/profit_loss', function () {
        return view('account_pages.profit_loss');
    });
    Route::get('/unsettled_bets', function () {
        return view('account_pages.unsettled_bets');
    });
    Route::get('/favourite', function () {
        return view('account_pages.favourite');
    });
    Route::get('/market_analysis', function () {
        return view('account_pages.market_analysis');
    });

    // User Section End

});

Route::get('/', function () {
    return view('pages.index');
})->name('index');


Route::get('forgot-page', function () {
    return view('pages.forgot-page');
});

Route::get('home', function () {
    return view('pages.home');
});

Route::get('/in-play', function () {
    return view('pages.in-play');
});
Route::get('/multi-market', function () {
    return view('pages.multi-market');
});
Route::get('/cricket', function () {
    return view('pages.cricket');
});
Route::get('/football', function () {
    return view('pages.football');
});
Route::get('/tennis', function () {
    return view('pages.tennis');
});
Route::get('/casino', function () {
    return view('pages.casino');
});
Route::get('/sports-book', function () {
    return view('pages.sports-book');
});
Route::get('/providers_tab', function () {
    return view('pages.providers_tab');
});

// Games


Route::get('gameList', [GamesController::class,'gameList'])->name('gameList');




Route::get('demoLogin', [AuthController::class,'demoLogin'])->name('demoLogin');


// POST requests

Route::post('login', [AuthController::class,'login'])->name('login')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('register', [AuthController::class,'register'])->name('register')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('forgetPassword', [AuthController::class,'forgetPassword'])->name('forgetPassword')->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('launchGame', [GamesController::class,'launchGame'])->name('launchGame')->withoutMiddleware([VerifyCsrfToken::class]);

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
Route::prefix('admin')->group(function () {
    
    Route::get('/', function () {
       return  view('admin.pages.index');
    })->name('admin.index');

    Route::get('/user_downline_list', function () {
      return view('admin.pages.user_downline_list');
    })->name('admin.user_downline_list');

    Route::get('/master_downline_list', function () {
        return view('admin.pages.master_downline_list');
        })->name('admin.master_downline_list');

    Route::get('/my_account', function () {
        return view('admin.pages.my_account');
        })->name('admin.my_account');

    Route::get('/event_profit_loss', function () {
       return view('admin.pages.event_profit_loss');
        })->name('admin.event_profit_loss');

    Route::get('/downline_profit_loss', function () {
     return view('admin.pages.downline_profit_loss');
        })->name('admin.downline_profit_loss');

    Route::get('/betlist', function () {
       return view('admin.pages.betlist');
        })->name('admin.betlist');

    Route::get('/market_analysis', function () {
       return view('admin.pages.market_analysis');
        })->name('admin.market_analysis');

    Route::get('/user_banking', function () {
       return view('admin.pages.user_banking');
        })->name('admin.user_banking');

    Route::get('/master_banking', function () {
       return view('admin.pages.master_banking');
        })->name('admin.master_banking');

        Route::get('/payment_setup', function () {
       return view('admin.pages.payment_setup');
        })->name('admin.payment_setup');

        Route::get('/deposit_request', function () {
       return view('admin.pages.deposit_request');
        })->name('admin.deposit_request');

        Route::get('/withdraw_request', function () {
       return view('admin.pages.withdraw_request');
        })->name('admin.withdraw_request');

});