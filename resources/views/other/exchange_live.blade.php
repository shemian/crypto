@extends('app')
@section('content')
<div class="container-fluid mtb15 no-fluid">
    <div class="row sm-gutters">
      <div class="col-md-12 mb15">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"   
            async>
              {
                "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-3">
        <div class="market-pairs">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="true"><i
                  class="icon ion-md-star"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#ETH" role="tab" aria-selected="false">ETH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#NEO" role="tab" aria-selected="false">NEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="false">USDT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#DAI" role="tab" aria-selected="false">DAI</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show" id="STAR" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.00013192</td>
                    <td class="green">+5.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show active" id="BTC" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.00013192</td>
                    <td class="green">+5.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/BTC</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/BTC</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/BTC</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/BTC</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/BTC</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/BTC</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/BTC</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/BTC</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/BTC</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/BTC</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/BTC</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="ETH" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTC/ETH</td>
                    <td>0.00020255</td>
                    <td class="green">+1.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/ETH</td>
                    <td>0.00013192</td>
                    <td class="red">-0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/ETH</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/ETH</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/ETH</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/ETH</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/ETH</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/ETH</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/ETH</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/ETH</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/ETH</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/ETH</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/ETH</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/ETH</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/ETH</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/ETH</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/ETH</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/ETH</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/ETH</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/ETH</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/ETH</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="NEO" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/NEO</td>
                    <td>0.00350255</td>
                    <td class="red">-6.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/NEO</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/NEO</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/NEO</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/NEO</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/NEO</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/NEO</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/NEO</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/NEO</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/NEO</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/NEO</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/NEO</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/NEO</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> NEO/NEO</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/NEO</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/NEO</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/NEO</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/NEO</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/NEO</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/NEO</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/NEO</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="USDT" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                    <td>0.00350255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/USDT</td>
                    <td>0.00013192</td>
                    <td class="green">+6.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/USDT</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/USDT</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/USDT</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/USDT</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/USDT</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/USDT</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/USDT</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/USDT</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/USDT</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/USDT</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/USDT</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/USDT</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/USDT</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="DAI" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ETH/DAI</td>
                    <td>0.05320255</td>
                    <td class="green">+6.58%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KCS/DAI</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XRP/DAI</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> VET/DAI</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> EOS/DAI</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BTT/DAI</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> LTC/DAI</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRX/DAI</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BSV/DAI</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> COTI/DAI</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XYT/DAI</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> BNB/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XMR/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> TRY/DAI</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ADA/DAI</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DAI/DAI</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> XLM/DAI</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> ENQ/DAI</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AVA/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> AMB/DAI</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> MAP/DAI</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GO/DAI</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> KICK/DAI</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> DBC/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr>
                    <td><i class="icon ion-md-star"></i> GGC/DAI</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="main-chart">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"></div>
            <script src="https://s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Dark",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="market-history mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#market-depth" role="tab" aria-selected="false">Market
                Depth</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="market-depth" role="tabpanel">
              <div class="depth-chart-container">
                <div class="depth-chart-inner">
                  <div id="darkDepthChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="market-history market-order mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
                history</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="stop-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="order-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="trade-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="market-trade mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab"
                aria-selected="true">Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-market" role="tab" aria-selected="false">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-limit" role="tab" aria-selected="false">Stop
                Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-market" role="tab" aria-selected="false">Stop
                Market</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection