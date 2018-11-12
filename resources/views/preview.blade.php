<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product Preview</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>

    <style>
      .label-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
        
      }

      .btn-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
      }

      .center{
        margin-left:110px;
      }


    </style>

    <div class="container-fluid" style="margin-top:100px">
        <div class="col-md-10 offset-sm-1">
          <div class="navbar navbar-default" style="background-color:white">
              <div class="col">
                <div class="navbar navbar" style="min-height: 30px; background-color:black">
                    <span class="label label-primary-outline" style="color:white;font-family: sans-serif;";>FREE SHIPPING</span>
                </div>
                <div class="row">
                  <div class="col-xs-2 offset-md-1">
                    <img src="/images/vintage.png">
                  </div>
                  <div class="col-xs-1" style="margin-top:15px;">
                    <p class="normal">FOR MAN</p>
                  </div>
                  <div class="col-xs-1" style="margin-top:15px;">
                    <p class="normal">FOR WOMAN</p>
                  </div>
                  <div class="col-xs-2" style="margin-top:15px;">
                    <p class="normal">OTHERS</p>
                  </div>
                  <div class="col-xs-2" style="margin-top:15px;">
                    <input type="text" class="form-control" placeholder="Search..." id="search">
                  </div>
                  <div class="col-xs-1" style="margin-top:15px;">
                    <img src="/images/cartIcon.png">
                  </div>
                  <div class="col" style="margin-top:15px;">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="btn-primary-outline btn-sm">ADMIN AREA</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-4 offset-md-2">
          <img src="{{asset("storage/categories/".$photo[0]->name)}}" alt="{{$photo[0]->name}}" height="350" width="350">
        
          <div class="row" style="margin-top:20px;">
            <div class="col offset-xs-2">
              @foreach ($photo as $pho)
                <img src="{{asset("storage/categories/$pho->name")}}" alt="{{$pho->name}}" height="80" width="80" class="rounded-0">
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <h2 class="text-left" style="color:black">{{$product->name}}</h2>

          <div class="row">
            <h1 class="text-left" style="color:black"><b>${{$product->price}}</b></h1>
          </div>

          <div class="row" style="margin-top:20px;">
            <div class="col">
              <h5 class="text-left"> <b>QUANTITY</b> </h5> 
            </div>
          </div>

          <div class="row">
            <div class="col">
              <img src="/images/quantIcon.png" style="">
            </div>
          </div>

          <div class="row" style="margin-top:40px;">
            <div class="col-md-5">
              <h4> {{$product->description}} </h4>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-4" style="text-align:left">
              @foreach ($tag as $t)
                <button type='button' class='btn btn-primary btn-xs' style='font-size:14px; background-color:black'>{{$t->name}}</button>    
              @endforeach
            </div>
          </div>

          <div class="row" style="margin-top:70px;">
            <div class="col offset-md-1">
              <button type='button' class='btn btn-primary btn-sm' style='font-size:18px; background-color:black'>ADD TO CART</button>
            </div>
          </div>

        </div>
      </div>
  </body>

</html>