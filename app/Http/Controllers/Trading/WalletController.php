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
        $amounts = auth()->user()->wallet_balance;
        $user = auth()->user();

        return view('user_wallet', compact('transactions','user', 'amounts', ));
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
        DB::beginTransaction(); //transaction in laravel
        try {
            $deposit = new Deposit();
            $deposit->amount = $data['amount'];
            $deposit->coin = $data['coin'];
            $deposit->transaction_code=$random = '#'.Str::random(17);
            $deposit->user_id =Auth::id();
            $deposit->save();
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // do something here
        }


        $details =[
            'amount' => $deposit->amount,
            'coin' =>  $deposit->coin,
            'user_email' => Auth::User()->email,
            'user_name' => Auth::User()->name,

        ];

        Mail::to('gofxcrypto@gmail.com')->send(new DepositRequestMail($details));

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

    //purchase plan
    public function purchase_plan(Request $request)
{

    $amount = $request->input('amount');
    $wallet_balance = DB::table('deposits')
    ->where('user_id',Auth::id())
    ->where('status', '=',0)
    ->sum('amount'); 

    if($wallet_balance < $amount ){
        dd('Your balance is insufficient');
    }
    $wallet_balance -= $amount;
    dd($wallet_balance);
 
    
    return redirect()->route('wallet', compact('wallet_balance'))->with('success', 'Amount subtracted from wallet.');
}

    //Withdraw request 
    public function withdrawrequest(WithdrawRequest $request){
        dd('yesss');
        $data = $request->validated();

        $withdrawn = new Withdraw();
        $withdrawn->amount = $data['amount'];
        $withdrawn->type = $data['type'];
        $withdrawn->method = $data['method'];
        $withdrawn->wallet_id = $data['wallet_id'];
        $withdrawn->withdraw_code = $random = '#'.Str::random(17);
        $withdrawn->save();

        return redirect()->route('withdraw_request')->with('message-sent', 'Withdrawal request has been made successfully');


    }



    

    

   


}
