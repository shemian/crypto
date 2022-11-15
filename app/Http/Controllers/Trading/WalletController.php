<?php

namespace App\Http\Controllers\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DepositRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Log;

class WalletController extends Controller
{
    //

    public function index(){

        $transactions = DB::table('deposits')->where('user_id', Auth::id())->get();
        $user = auth()->user();
      
        return view('user_wallet', compact('transactions','user'));
    }

    public function purchase(DepositRequest $request){
        
        $data = $request->validated();

        $deposit = new Deposit();
        $deposit->amount = $data['amount'];
        $deposit->coin = $data['coin'];
        $deposit->transaction_code=$random = '#'.Str::random(17);
        // $deposit->status= $data['status'];
        $deposit->user_id =Auth::id();
        $deposit->save();

        return redirect()->route('purchase');
        

    }



    public function edit(){
        return redirect()->route('wallet')->with('user' ,auth()->user());

    }

    public function update(UpdateProfileRequest $request){
        Log::info( 'user info....');

        $user = auth()->user();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'country'=>$request->country,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'address'=>$request->address,
            'bitcoin_address'=>$request->bitcoin_address,
            'eth_address'=>$request->eth_address,
            'perfect_money_address'=>$request->perfect_money_address,

        ]);

        Log::info( 'user info'. $user);
        Log::info('request'. json_encode($request->all()));

     
        return redirect()->route('wallet');

    }

    

   


}
