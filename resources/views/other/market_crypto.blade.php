@extends('app')
@section('content')

<div class="container-fluid mtb15">
    <div class="row">
      <div class="col-md-12">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          
          
          <!-- <script type="text/javascript" 
            async>
              {
                "width": ,
                  "height": 900,
                    "defaultColumn": "overview",
                      "screener_type": "crypto_mkt",
                        "displayCurrency": "BTC",
                          "colorTheme": "dark",
                            "locale": "en"
              }
            </script> -->
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": 900,
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "BTC",
  "showToolbar": true,
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </div>
  </div>

@endsection