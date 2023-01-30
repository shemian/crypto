@extends('app')
@section('content')

<div class="settings mtb15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-3">
          <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link " id="dashboard-tab" data-toggle="pill" href="#dashboard" role="tab"
              aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-settings"></i>Dashboard</a>

            <a class="nav-link active" id="settings-wallet-tab" data-toggle="pill" href="#settings-wallet" role="tab"
              aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-wallet"></i>Deposit</a>
              <a class="nav-link" id="withdraw-tab" data-toggle="pill" href="#withdraw" role="tab"
              aria-controls="withdraw" aria-selected="false"><i class="icon ion-md-settings"></i>Withdraw</a>
              <a class="nav-link" id="invest-tab" data-toggle="pill" href="#invest" role="tab"
              aria-controls="invest" aria-selected="false"><i class="icon ion-md-settings"></i>Investment</a>
            <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab"
              aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i> Settings</a>
            <a class="nav-link" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
            aria-controls="settings-profile" aria-selected="true"><i class="icon ion-md-person"></i> Profile</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Welcome User</h5>
                  <div class="settings-notification">
                    <!-- start of 3 col  -->
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header d-flex justify-content-center">Deposit Balance</div>
                            <div class="card-body">
                                <h2 class="card-text d-flex justify-content-center green"><span><strong style="color:green">$ {{ $amounts}}</strong style="color:green"></span></h2>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header d-flex justify-content-center">Available Balance</div>
                            <div class="card-body">
                                <h2 class="card-text d-flex justify-content-center green"><span><strong style="color:green">$</strong style="color:green">{{ $amounts}}</span></h2>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header d-flex justify-content-center">Referral Earnings</div>
                            <div class="card-body">
                                <h2 class="card-text d-flex justify-content-center green"><span><strong style="color:green">$</strong style="color:green">0.00</span></h2>
                            </div>
                            </div>
                        </div>

                     

                    </div>
                    <!-- end -->
                    <!-- start of progress -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light mb-3">
                            <div class="card-header d-flex justify-content-center">Most Purchased Plan</div>
                            <div class="card-body">
                                <h3 class="card-text d-flex justify-content-center"><span><strong style="color:red">$</strong>500</span></h3>
                                <div class="justify-content-center">

                                    <ul>
                                        <li>For 1 day(s) </li>
                                        <li><b>120%</b>Intrest</li>
                                        <li><b>$1,499</b> Max Price</li>
                                        <li> Order Notification </li>
                                        <li><b>5%</b> Referral Bonus</li>
                                        <li><b>24/7</b> Support</li>
                                        <li> Updates </li>
                                        <li> return of investment (ROI)</li>
                                    </ul>

                                </div>
                            </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card bg-light mb-3" >
                                <div class="card-header d-flex justify-content-center">Progress Track</div>
                                <div class="card-body">
                                    <div class="pricing-content d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end -->


                   
                   
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Your Transactions</h5>
                  <div class="wallet-history">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Transaction </th>
                          <th>Amount </th>
                          <th>Method</th>
                          <th>Date </th>
                          <th>Status </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($transactions as $transaction)
                        <tr>
                          <td>{{$transaction->id}}</td>
                          <td>{{$transaction->transaction_code}}</td>
                          <td>{{$transaction->amount}}</td>
                          <td>{{$transaction->coin}}</td>
                          <td>{{$transaction->created_at}}</td>
                          @if($transaction->status == 0)
                          <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                          @else
                          <td><i class="icon ion-md-checkmark-circle-outline red"></i></td>
                          @endif
      
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="settings-profile" role="tabpanel" aria-labelledby="settings-profile-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">General Information</h5>
                  <div class="settings-profile">
                    <form action="{{ route('update_user_profile') }}" method="post">
                   
                      <div class="form-row mt-4">
                        <div class="col-md-6">
                          <label for="name">First name</label>
                          <input id="name" name="name" type="text" value = "{{$user->name}}" class="form-control" placeholder="Name">
                        </div>
                        
                        <div class="col-md-6">
                          <label for="email">Email</label>
                          <input id="email" type="text"  name="email" value = "{{$user->email}}" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="col-md-6">
                          <label for="phone_number">Phone</label>
                          <input id="phone" name="phone_number" type="text" value = "{{$user->phone_number}}" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="col-md-6">
                          <label for="country">Country</label>
                          <input id="country" name="country"  value = "{{$user->country}}" type="text" class="form-control" placeholder="Enter Your Country">
                        </div>
                        <div class="col-md-6">
                          <label for="city">City</label>
                          <input id="city" name="city"  value = "{{$user->city}}" type="text" class="form-control" placeholder="Enter Your City">
                        </div>
                        <div class="col-md-6">
                          <label for="zipcode">Address</label>
                          <input id="zipcode" name="zipcode"  value = "{{$user->zipcode}}" type="text" class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="col-md-6">
                          <label for="zipcode">zipcode</label>
                          <input id="zipcode" name="zipcode"  value = "{{$user->zipcode}}" type="text" class="form-control" placeholder="Enter Zipcode">
                        </div>
                        <div class="col-md-6">
                          <label for="bitcoin_address">Bitcoin Address</label>
                          <input id="bitcoin_address" name="bitcoin_address"  value = "{{$user->bitcoin_address}}" type="text" class="form-control" placeholder="Enter Your Bitcoin Address">
                        </div>
                        <div class="col-md-6">
                          <label for="eth_address">Ethereum Address</label>
                          <input id="eth_address" name="eth_address"  value = "{{$user->eth_address}}" type="text" class="form-control" placeholder="Enter Your Ethereum Address">
                        </div>
                        <div class="col-md-6">
                          <label for="perfect_money_address">Perfect Money Address</label>
                          <input id="perfect_money_address" name="perfect_money_address"  value = "{{$user->perfect_money_address}}" type="text" class="form-control" placeholder="Enter Your Perfect Money Address">
                        </div>
                        
                        
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Security Information</h5>
                  <div class="settings-profile">
                    <form>
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="currentPass">Current password</label>
                          <input id="currentPass" type="text" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="col-md-6">
                          <label for="newPass">New password</label>
                          <input id="newPass" type="text" class="form-control" placeholder="Enter new password">
                        </div>
                        <div class="col-md-6">
                          <label for="securityOne">Security questions #1</label>
                          <select id="securityOne" class="custom-select">
                            <option selected>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityAnsOne">Answer</label>
                          <input id="securityAnsOne" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-6">
                          <label for="securityTwo">Security questions #2</label>
                          <select id="securityTwo" class="custom-select">
                            <option selected>Choose...</option>
                            <option>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityAnsTwo">Answer</label>
                          <input id="securityAnsTwo" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-6">
                          <label for="securityThree">Security questions #3</label>
                          <select id="securityThree" class="custom-select">
                            <option selected>Choose...</option>
                            <option>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityFore">Answer</label>
                          <input id="securityFore" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show active" id="settings-wallet" role="tabpanel"
              aria-labelledby="settings-wallet-tab">
              <div class="wallet">
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                      <a class="nav-link d-flex justify-content-between align-items-center active" data-toggle="pill"
                        href="#coinBTC" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/18.png" alt="btc">
                          <div>
                            <h2>BTC</h2>
                            <p>Bitcoin</p>
                          </div>
                        </div>
                        <div>
                          <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinETH" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/1.png" alt="btc">
                          <div>
                            <h2>ETH</h2>
                            <p>Ethereum</p>
                          </div>
                        </div>
                        <div>
                        <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinBNB" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/9.png" alt="btc">
                          <div>
                            <h2>BNB</h2>
                            <p>Binance</p>
                          </div>
                        </div>
                        <div>
                        <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinTRX" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/6.png" alt="btc">
                          <div>
                            <h2>TRX</h2>
                            <p>Tron</p>
                          </div>
                        </div>
                        <div>
                        <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>
                      
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinEOS" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/3.png" alt="btc">
                          <div>
                            <h2>LTC</h2>
                            <p>LiteCoin</p>
                          </div>
                        </div>
                        <div>
                        <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>

                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinXMR" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/11.png" alt="btc">
                          <div>
                            <h2>Tether</h2>
                            <p>USDT</p>
                          </div>
                        </div>
                        <div>
                        <p class="text-right"><i ></i>Limit: 50-100000 USD</p>
                          <p class="text-right"><i ></i><span>Charge: </span> 0USD + 0%</p>
                        </div>
                      </a>

                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinEOS" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/2.png" alt="btc">
                          <div>
                            <h2>EOS</h2>
                            <p>Eosio</p>
                          </div>
                        </div>
                        <div>
                          <h3>33.478951</h3>
                          <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                        </div>
                      </a>

                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinXMR" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/7.png" alt="btc">
                          <div>
                            <h2>XMR</h2>
                            <p>Monero</p>
                          </div>
                        </div>
                        <div>
                          <h3>99.465975</h3>
                          <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                        </div>
                      </a>
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill"
                        href="#coinKCS" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/4.png" alt="btc">
                          <div>
                            <h2>KCS</h2>
                            <p>Kstarcoin</p>
                          </div>
                        </div>
                        <div>
                          <h3>114.57564</h3>
                          <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="coinBTC" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Deposit</h5>
                            @if(Session::has('message-sent'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Great </strong> {{Session::get('message-sent')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif
                            <form action="{{ route('purchase') }}" method="POST">
                              @csrf
                              <div class="form-row mt-4">
                                <div class="col-md-12">
                                  <label for="formFirst">Amount</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">USD</div>
                                    <input id="formFirst" name="amount" type="number" min="0.00" max="100000.00" step="1" class="form-control" placeholder="Enter The Ammount">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <label for="selectCurrency">Currency</label>
                                  <select id="selectCurrency" name="coin" class="custom-select">
                                    <option selected>BTC</option>
                                    <option>ETH</option>
                                    <option>BNB</option>
                                    <option>TRX</option>
                                    <option>LTC</option>
                                    <option>TETHER</option>
                                    <option>XMR</option>
                                    <option>KCS</option>
                                  </select>
                                </div>
                              </div>
                              <br>
                              <button type="submit" class="btn green">Deposit</button>
                            </form>  
                          </div>
                        </div>
                        @if(Session::has('message-sent'))
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p> PLEASE SEND EXACTLY {{$transaction->amount}} USD Worth Of {{$transaction->coin}}
                               
                                 Scan the QR Code or copy the wallet address and send TO this Address
                              
                              </p>
                              <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e"> 
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr2.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Transaction code</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                <tr>
                                    
                                    <td>{{$transaction->id}}</td>
                                    <td>{{$transaction->transaction_code}}</td>
                                    <td>{{$transaction->created_at}}</td>
                                    <td>{{$transaction->amount}}</td>
                                    <td>{{$transaction->coin}}</td>
                                    @if($transaction->status == 0)
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    @else
                                      <td><i class="icon ion-md-checkmark-circle-outline red"></i></td>
                                    @endif
                                </tr>
                                @endforeach
                                 
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Withdraw</h5>
                  <div class="settings-notification">
                    
                    @if(Session::has('withdraw-message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Great </strong> {{Session::get('withdraw-message')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                    <form  method="POST" action="{{ route('withdraw_request') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="amount">Amount</label>
                                <input id="amount" name="amount" type="number" min="0.00" max="100000.00" step="1" class="form-control" placeholder="Enter The Amount">

                            </div>

                            <div class="col-md-12">
                                  <label for="tradetype">Type</label>
                                  <select id="selectTradeType" name="tradetype" class="custom-select">
                                    <option selected>Trading Balance</option>
                                    <option>Referral Earnings</option>
                                  </select>
                            </div>

                            <div class="col-md-12 mt-4">
                                <label for="selectCurrency">Method</label>
                                <select id="selectCurrency" name="coin" class="custom-select">
                                <option selected>BTC</option>
                                <option>ETH</option>
                                <option>BNB</option>
                                <option>TRX</option>
                                <option>LTC</option>
                                <option>TETHER</option>
                                <option>XMR</option>
                                <option>KCS</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-4">
                                <label for="walletId">Wallet ID</label>
                                <input id="walletId" name="wallet_id" type="text" class="form-control" placeholder="Enter Wallet Id">
                             </div>


                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-success">Request withdrawal</button>
                            </div>

                        </div>
                    </form>
                 
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Your withdrawal Request</h5>
                  <div class="wallet-history">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>No.</th>
                            <th>Transaction code</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Method</th>
                            <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($withdrawals as $withdrawal)
                        <tr>
                                    
                            <td>{{$withdrawal->id}}</td>
                            <td>{{$withdrawal->withdraw_code}}</td>
                            <td>{{$withdrawal->created_at}}</td>
                            <td>{{$withdrawal->amount}}</td>
                            <td>{{$withdrawal->method}}</td>
                            @if($withdrawal->status == 0)
                            <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                            @else
                            <td><i class="icon ion-md-checkmark-circle-outline red"></i></td>
                            @endif
                            
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button trigger modal -->


              <!-- Purchase Investment plan Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('purchase_plan') }}" method="post" >
                      @csrf
                      <p>IF YOU DO NOT HAVE SUFFICIENT BALANCE IN YOUR DEPOSIT ACCOUNT, THE REQUIRED FEE WILL BE DEDUCTED FROM YOUR PROFIT BALANCE.</p>
                      <input type="hidden"  class="form-control" id ="transaction_id" name="transaction_id">

                      <label for="balance"  style="color: black">Wallet Balance: </label>
                      <input class="form-control" type="text" name="balance" value="$ {{ $amounts}}" disabled>

                      <label for="amount" style="color: black">USD: </label>
                      <input class="form-control" id="status" type="number" min="0.00" max="100000.00" name="amount">

                      <span class ="text-danger error-text status_error"></span>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Purchase</button>
                    </div>

                    </form>
                  </div>
                </div>
              </div>

            <div class="tab-pane fade" id="invest" role="tabpanel" aria-labelledby="invest-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Choose an Investment Plan</h5>
                  <div class="settings-notification">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="card bg-light mb-3">
                                <div class="card-header d-flex justify-content-center">Starter Plan</div>
                                <div class="card-body">
                                    <h3 class="card-text d-flex justify-content-center"><span><strong style="color:red">$</strong>50</span></h3>
                                    <div class="justify-content-center">
                                        <ul>
                                            <li> For 1 day(s) </li>
                                            <li><b>10%</b>Intrest</li>
                                            <li><b>$499</b> Max Price</li>
                                            <li> Order Notification </li>
                                            <li><b>5%</b> Referral Bonus</li>
                                            <li><b>24/7</b> Support</li>
                                            <li> Updates </li>
                                            <li> return of investment (ROI)</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="pricingTable-signup">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Purchase The Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light mb-3">
                                <div class="card-header d-flex justify-content-center">Professional Plan</div>
                                <div class="card-body">
                                    <h3 class="card-text d-flex justify-content-center"><span><strong style="color:red">$</strong>500</span></h3>
                                    <div class="justify-content-center">

                                        <ul>
                                            <li> For 1 day(s) </li>
                                            <li><b>20%</b>Intrest</li>
                                            <li><b>$1,499</b> Max Price</li>
                                            <li> Order Notification </li>
                                            <li><b>5%</b> Referral Bonus</li>
                                            <li><b>24/7</b> Support</li>
                                            <li> Updates </li>
                                            <li> return of investment (ROI)</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="pricingTable-signup">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Purchase The Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light mb-3">
                                <div class="card-header d-flex justify-content-center">Golden Plan</div>
                                <div class="card-body">
                                    <h3 class="card-text d-flex justify-content-center"><span><strong style="color:red">$</strong>1,500</span></h3>
                                    <div class="justify-content-center">

                                        <ul>
                                            <li> For 2 day(s) </li>
                                            <li><b>25%</b>Intrest</li>
                                            <li><b>$9,999</b> Max Price</li>
                                            <li> Order Notification </li>
                                            <li><b>5%</b> Referral Bonus</li>
                                            <li><b>24/7</b> Support</li>
                                            <li> Updates </li>
                                            <li> return of investment (ROI)</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="pricingTable-signup">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Purchase The Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light mb-3">
                                <div class="card-header d-flex justify-content-center">Premium Plan</div>
                                <div class="card-body">
                                    <h3 class="card-text d-flex justify-content-center"><span><strong style="color:red">$</strong>10,000</span></h3>
                                    <div class="justify-content-center">

                                        <ul>
                                            <li> For 8 day(s) </li>
                                            <li><b>40%</b>Intrest</li>
                                            <li><b>$100,000</b> Max Price</li>
                                            <li> Order Notification </li>
                                            <li><b>5%</b> Referral Bonus</li>
                                            <li><b>24/7</b> Support</li>
                                            <li> Updates </li>
                                            <li> return of investment (ROI)</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="pricingTable-signup">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Purchase The Plan</a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notifications</h5>
                  <div class="settings-notification">
                    <ul>
                      <li>
                        <div class="notification-info">
                          <p>Update price</p>
                          <span>Get the update price in your dashboard</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification1">
                          <label class="custom-control-label" for="notification1"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>2FA</p>
                          <span>Unable two factor authentication service</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification2" checked>
                          <label class="custom-control-label" for="notification2"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>Latest news</p>
                          <span>Get the latest news in your mail</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification3">
                          <label class="custom-control-label" for="notification3"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>Email Service</p>
                          <span>Get security code in your mail</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification4" checked>
                          <label class="custom-control-label" for="notification4"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>Phone Notify</p>
                          <span>Get transition notification in your phone </span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification5" checked>
                          <label class="custom-control-label" for="notification5"></label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>






@endsection