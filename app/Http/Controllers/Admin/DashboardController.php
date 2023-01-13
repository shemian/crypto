<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use DataTables;
use Validator;
use Log;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('admin/dashboard');
    }

    public function regUsers(){
        return view('admin/regusers');
    }

    //GET ALL TRANSACTIONS

    public function getTransactions(Request $request){
        if($request->ajax()){
            $transactions = Deposit::all();
            return Datatables::of($transactions)
            ->addIndexColumn()
            
            ->addColumn('action', function(Deposit $row){
                $actionBtn='<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="editStatus" data-id="'.$row['id'].'">Edit</button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
               
            ->make(true);

        }
        return view('admin/transaction');
        

    } 


    //GET TRANSACTION DETAILS

    public function getTransactionDetails(Request $request){
        $id = $request->transaction_id;
        $transaction = Deposit::find ($id);
        return response()->json(['details'=>$transaction]);


    }


    //Update transaction status

    public function updateTransactionDetails(Request $request){
        $transaction_id = $request->transaction_id;
        $validator = Validator::make($request->all(),[
            'status'=>'required::deposits,status,'.$transaction_id,
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $transaction = Deposit::find($transaction_id);
            $transaction->status = $request->status;
            $query = $transaction->save();
            Log::info($query);
            if($query){
                return response()->json(['code'=>1, 'msg'=>'Status Updated Successfuly']);
            }
            else{
                return response()->json(['code'=>0, 'msg'=>'Failed Please try again Later']);
            }
        }
    }




 
}
