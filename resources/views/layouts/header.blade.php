<html>
    <head>
        <title>App Name - @yield('header Vintage')</title>
    </head>

    <body>

            @yield('header')
            <div class="navbar navbar-default" style="background-color:white; border:none">
              <div class="col">
                <div class="row">
                  <div class="col-xs-2 offset-md-1">
                    <img src="/images/vintage.png">
                  </div>

                  <div class="col-md-2 offset-md-5 row-person">
                    <img src="/images/personIcon.png">
                  </div>
                  <div class="col-md-2">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="btn-primary-outline btn-sm">SIGN OUT</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        
    </body>

</html>