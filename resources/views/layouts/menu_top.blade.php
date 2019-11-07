<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar special-color-dark">
       
    <!-- SideNav slide-out button -->
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn ">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Płatności') }}
        </a>
    </div>    
    <div class="breadcrumb-dn">
           
        <form method="POST" class="navbar-form navbar-left form-inline" action="{{ route('search') }}">
                @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="szukaj" aria-label="Szukaj">
            
            <select class="form-control " style="display: block !important" name="section">                                   
                <option value="ads">Ogłoszenia drobne</option>
                <option value="services">Usługi</option>
                <option value="estates">Nieruchomości</option>
                <option value="cars">Motoryzacja</option>
                <option value="jobs">Praca</option>
                <option value="lost">Zgubione / znalezione</option>
            </select>
           
            <button type="sender" class="btn btn-primary">  <i class="fas fa-search" ></i> Szukaj</button>
      
          
        </form>
    </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">            

        <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Kontakt</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('help') }}" class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Pomoc</span></a>
        </li>        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Moje Konto
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dark special-color-dark" aria-labelledby="navbarUser">  
                    @guest     
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label text-white" for="remember">
                                            {{ __('zapamietaj mnie') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-white">
                                        {{ __('Login') }}
                                    </button>    
                                </div>
                            </div>
                            @if (Route::has('password.request'))<a class="dropdown-item text-white" href="{{ route('password.request') }}">{{ __('Zapomniałeś hasła?') }}</a> @endif
                        </form>
                      
                            
             
                    @if (Route::has('register'))                                                 
                        <a class="dropdown-item text-white" href="{{ route('register') }}">{{ __('Zarejestruj się') }}</a>
                        <a class="dropdown-item text-white" href="{{ route('myPayments') }}">Moje Płatności</a>
                    @endif
                @else
                <a class="dropdown-item text-white" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Wyloguj się') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
        </li>
    </ul>
</nav>
@section('javascript')
     <script type="text/javascript">$(document).ready(function() {
        $('.mdb-select').materialSelect();
        });
     </script>
@stop
