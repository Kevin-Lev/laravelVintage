<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vintage - Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>

  <body>

    <style>
      .vintage{
        padding-top: 250px;
        text-align: center;
      }

      .input{
        padding-top: 30px;
        padding-left: 70px;
        padding-right: 60px;
      }

      .signin{
        padding-left: 35px;
      }

      .signup{
        padding-left: 25px;
      }

      .btn-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
        color: blue;
        font-family: sans-serif;
      }

    </style>

    <div class="container">
      <div class="row justify-content-center vintage">
        <div class="col-md-12">
          <img src="/images/bigvintage.png">
        </div>
      </div>
      <div class="row justify-content-center input">
        <div class="col-xs-4">
          <input type="text" class="form-control" placeholder="Email" id="search">
        </div>
      </div>
      <div class="row justify-content-center input">
        <div class="col-xs-4">
          <input type="text" class="form-control" placeholder="Password" id="search">
        </div>
      </div>

      <div class="row justify-content-center input ">
        <div class="col-md-2 signin">
          <td><button type="button" class="btn btn-primary btn-md">sign in</button>
        </div>
      </div>

      <div class="row justify-content-center input">
        <div class="col-md-2 signup">
          <td><button type="button" class="btn btn-primary-outline btn-md">sign up</button>
        </div>
      </div>


    </div>

  </body>
