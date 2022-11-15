<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="exchange-dark.html"><img src="assets/img/logo-light.svg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Exchange
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="exchange-dark.html">Exchange</a>
              <a class="dropdown-item" href="exchange-dark-live-price.html">Exchange Live Price</a>
              <a class="dropdown-item" href="exchange-dark-ticker.html">Exchange Ticker</a>
              <a class="dropdown-item" href="exchange-dark-fluid.html">Exchange Fluid</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="markets-dark.html">Markets</a>
              <a class="dropdown-item" href="market-capital-dark.html">Markets Line</a>
              <a class="dropdown-item" href="market-capital-bar-dark.html">Markets Bar</a>
              <a class="dropdown-item" href="market-overview-dark.html">Market Overview</a>
              <a class="dropdown-item" href="market-screener-dark.html">Market Screener</a>
              <a class="dropdown-item" href="market-crypto-dark.html">Market Crypto</a>
            </div>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="technical-analysis-dark.html">Technical Analysis</a>
              <a class="dropdown-item" href="cross-rates-dark.html">Cross Rates</a>
              <a class="dropdown-item" href="symbol-info-dark.html">Symbol Info</a>
              <a class="dropdown-item" href="heat-map-dark.html">Heat Map</a>
              <a class="dropdown-item" href="signin-dark.html">Sign in</a>
              <a class="dropdown-item" href="signup-dark.html">Sign up</a>
              <a class="dropdown-item" href="404-dark.html">404</a>
            </div>
          </li>
        </ul>
        @guest
        @if (Route::has('login'))

        <ul class="navbar-nav ml-auto">
          
          <a href="{{ route('register') }}" class="btn-2">Get Started</a>
        </ul>
        @endif

        @else
        <ul>
        <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="assets/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="assets/img/avatar.svg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0"> {{ Auth::user()->name }}</p>
                  <p class="email text-muted mb-3"> {{ Auth::user()->email }}</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="settings-profile-dark.html" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings-dark.html" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="nav-item" id="changeThemeDark">
                    <a href="#!" class="nav-link">
                      <i class="icon ion-md-moon"></i>
                      <span>Theme</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link red"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </a>
                  </li>
                </ul>
                @endguest
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>