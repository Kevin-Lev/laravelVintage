<!-- products.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>

    <style>
      .container{
        position: relative;
        top: 200px;
      }
      .top-buffer{
        padding-top: 60px;
        background: #F5F5F5
      }
      .table-buffer{
        padding-top: 20px;
        background: #F5F5F5;
      }

      .vimage{
        padding-left: 50px;
      }

      .row-label{
        padding-top: 210px;
        padding-bottom: 20px;
        text-align: center;
        background: #F5F5F5;
        font-family: sans-serif;
      }

      .row-vintage{
        padding-bottom: 20px;
      }

      .row-person{
        padding-left: 130px;
      }

      .btn-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
      }

      .btn-primary-menu {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 22px;
        padding-left: 20px;
        font-family: sans-serif;
      }

      .label-primary-outline {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 15px;
        color: black;
        font-family: sans-serif;
      }

      .label-primary-image {
        background-color: transparent;
        border-color: transparent;
        box-shadow: none;
        font-size: 13px;
        color: black;
        font-family: sans-serif;
      }

      .input{
        padding-left: 95px;
      }

      .inputSub{
        padding-left: 85px;
        padding-right: 25px;
      }

      .inputDesc{
        padding-top: 150px;
      }

      .inputDesc2{
        padding-left: 202px;
        padding-right: 90px;
      }

    </style>


    <div class="container">
      <div class="row row-vintage">
        <div class="col-md-8 vimage">
          <img src="/images/vintage.png">
        </div>
        <div class="col-md-2 row-person">
          <img src="/images/personIcon.png">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn-primary-outline btn-sm">SIGN OUT</button>
        </div>
      </div>


      <div class="row top-buffer">
        <div class="col-md-2">
          <button type="button" class="btn-primary-menu">MENU</button>
        </div>
        <div class="col-md-1">
          <td><button type="button" class="btn btn-primary btn-md">UPDATE</button>
        </div>
        <div class="col-md-1">
          <td><button type="button" class="btn btn-primary btn-md">CANCEL</button>
        </div>
        <div class="col-md-2">
          <td><button type="button" class="btn btn-danger btn-md">DELETE</button>
        </div>
        <div class="col-md-1">
          <td><button type="button" class="btn btn-primary btn-md">PREVIEW</button>
        </div>
      </div>


    <div class="row align-items-center table-buffer">
      <div class="col-md-12">
          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">PRODUCTS</button>
            <div class="col-xs-4 input">
              <input type="text" class="form-control" placeholder="Product name" id="proname">
            </div>
            <div class="col offset-md-1">
              <span class="label label-primary-image">IMAGES</span>
            </div>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">ORDERS</button>
            <div class="col offset-md-5" style="padding-left:0px;padding-right:0px">
              <div style="height: 35px;width: 35px;background-color: white;">
              </div>
            </div>
            <div class="col" style="padding-right: 0px">
              <div style="height: 35px;width: 35px;background-color: white;">
              </div>
            </div>
            <div class="col" style="padding-right: 400px">
              <div style="height: 35px;width: 35px;background-color: white;">
              </div>
            </div>

          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">CUSTOMERS</button>
            <div class="col-xs-4 inputSub">
              <input type="text" class="form-control" placeholder="Product subname" id="prosub">
            </div>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">ANALYTICS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">DISCOUNTS</button>
            <div class="col-xs-4 input">
              <input type="text" class="form-control" placeholder="Price" id="proprice">
            </div>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">APPS</button>
          </div>

          <div class="row">
            <div class="col-xs-6 inputDesc2">
              <input type="text" class="form-control" style="padding-top: 150px;" placeholder="Description" id="prodesc">
            </div>
          </div>
      </div>

    </div>


 </div>

  </body>
</html>
