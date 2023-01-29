<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{route('home') }}"><img src=" {{ asset ('assets/img/logo-light.svg') }}"  alt="logo"></a>
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
              <a class="dropdown-item" href="{{ route('exchange_price' ) }}">Exchange</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('market_crypto') }}">Market Crypto</a>
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
              <img src="{{ asset ('assets/img/avatar.svg') }}" alt="avatar">
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
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Deposit</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Withdraw</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Invest</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wallet') }} " class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
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