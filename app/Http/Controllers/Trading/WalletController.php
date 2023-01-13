<?php

namespace App\Http\Controllers\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DepositRequest;
use App\Http\Requests\WithdrawRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Deposit;
use App\Models\withdraw;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Log;
use Mail;
use App\Mail\DepositRequestMail;

class WalletController extends Controller
{
    //

    public function index(){

        $transactions = DB::table('deposits')->where('user_id', Auth::id())->get();
        $amounts= DB::table('deposits')
        ->where('user_id',Auth::id())
        ->where('status', '=',0)
        ->sum('amount');  
   
        $user = auth()->user();

        return view('user_wallet', compact('transactions','user', 'amounts'));
    }
    

    public function exchange_live(){
      
        return view('other.exchange_live');

    }

    public function exchange(){
        return view('other.exchange');

    }
    public function market_crypto(){
        return view('other.market_crypto');
    }
    public function technical_analysis(){
        return view('other.technical_analysis');
    }

    public function purchase(DepositRequest $request){
        
        $data = $request->validated();

        $deposit = new Deposit();
        $deposit->amount = $data['amount'];
        $deposit->coin = $data['coin'];
        $deposit->transaction_code=$random = '#'.Str::random(17);
        $deposit->user_id =Auth::id();
        $deposit->save();

        $details =[
            'amount' => $deposit->amount,
            'coin' =>  $deposit->coin,
            'user_email' => Auth::User()->email,
            'user_name' => Auth::User()->name,

        ];

        Mail::to('shemian092@gmail.com')->send(new DepositRequestMail($details));

        return redirect()->route('purchase')->with('message-sent', 'Transaction request has been made successfully');
        

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

    //Withdraw request 
    public function withdrawrequest(WithdrawRequest $request){
        $data = $request->validated();

        $withdrawn = new Withdraw();
        $withdrawn->amount = $data['amount'];
        $withdrawn->type = $data['type'];
        $withdrawn->method = $data['method'];
        $withdrawn->wallet_id = $data['wallet_id'];
        $withdrawn->withdraw_code = $random = '#'.Str::random(17);
        $withdrawn->save();

        dd($withdrawn);

        return redirect()->route('withdraw_request');


    }

    

   


}
