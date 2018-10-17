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
      .table{
        text-align: center;
        background-color: white;
        border: 1px solid;
        border-color: #F5F5F5;
        padding-left: 20px;
        width: 840px;
        overflow: auto;
      }
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
        <div class="col-md-2">
          <td><button type="button" class="btn btn-primary btn-md">ADD PRODUCT</button>
        </div>
        <div class="col-md-3">
          <td><button type="button" class="btn btn-primary btn-md">IMPORT PRODUCT</button>
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" placeholder="Search..." id="search">
        </div>
        <div class="col-md-1">
          <td><button type="button" class="btn btn-primary btn-md">SEARCH</button>
        </div>
      </div>


    <div class="row table-buffer">
      <div class="col">
          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">PRODUCTS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">ORDERS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">CUSTOMERS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">ANALYTICS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">DISCOUNTS</button>
          </div>

          <div class="row">
            <button type="button" class="btn btn-primary-outline btn-sm">APPS</button>
          </div>
      </div>


        <div class="col-md-10">
          <table class="table">
            <thead>
              <tr>
                <th class="text-center">Product Name</th>
                <th class="text-center">Product Subname</th>
                <th class="text-center">Price</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>

    <div class="row row-label">
      <div class="col-md-12">
        <span class="label label-primary-outline">2018 Vintage - All rights reserved.</span>
      </div>
    </div>

 </div>

  </body>
</html>
