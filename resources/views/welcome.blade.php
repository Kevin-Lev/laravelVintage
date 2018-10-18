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
        padding-left: 20px;
      }

      .input{
        padding-top: 30px;
      }

      .row-2018{
        padding-top: 190px;
        padding-left: 32px;
      }

      .btn-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        color: blue;
      }

      .label-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
        color: black;
        font-family: sans-serif;
      }

    </style>

    <div class="container">
      <div class="row justify-content-center vintage">
        <div class="col-md-4">
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

      <div class="row justify-content-center input">
        <div class="col-md-1 ">
          <a href="/products" class="btn btn-primary btn-md">sign in</a>
        </div>
      </div>

      <div class="row justify-content-center input">
        <div class="col-md-1 ">
          <td><button type="button" class="btn btn-primary-outline btn-md">sign up</button>
        </div>
      </div>

      <div class="row justify-content-center row-2018">
        <div class="col-md-4">
          <span class="label label-primary-outline">2018 Vintage - All rights reserved.</span>
        </div>
      </div>

    </div>

  </body>
