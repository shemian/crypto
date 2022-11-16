<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use DataTables;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('admin/dashboard');
    }

    public function regUsers(){
        return view('admin/regusers');
    }

    public function getTransactions(Request $request){
        if($request->ajax()){
            $transactions = Deposit::all();
            return Datatables::of($transactions)
            ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Confirm</span></a> ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('admin/transaction');
        

    } 
}
