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

    </style>

    <div class="container-fluid" style="margin-top:100px">
      <div class="navbar navbar-default" style=" margin-left:200px;margin-right:200px; background-color:white">
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
                <button type="submit" class="btn-primary-outline btn-sm">ADMIN AREA</button>
              </div>
            </div>
          </div>
      </div>

      <div class="col">
        @foreach ($photo as $pho)
          
        @endforeach
      </div>
      
    </div>
  </body>

</html>