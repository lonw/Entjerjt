<?php

namespace App\Http\Controllers\Client;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cycle;
use Mail; 
use Auth;
use Input;
use Log;
use View;
use Session; 
use DB;
use Carbon\Carbon;
use AWS;
use Config;


class YudingController extends Controller
{


    /**
     * Display a list of orders.
     */
    public function yudingPost(Request $request){
        return view('yuding_detail.blade.php');
    }

}
