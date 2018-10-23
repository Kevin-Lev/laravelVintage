<!-- products.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Products</title>
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
        padding-top: 59px;
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

      .inputDesc2{
        height: 150px;
        width: 270px;
        padding-bottom: 130px;
      }

    </style>


    <div class="container">
      <form method="post" action="{{action('ProductController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
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
            <td><button type="submit" class="btn btn-success btn-md">UPDATE</button>
          </div>
          <div class="col-md-1">
            <a href="/products" class="btn btn-primary btn-md">CANCEL</a>
          </div>
          <div class="col-md-2">
            <td><button type="button" class="btn btn-danger btn-md">DELETE</button>
          </div>
          <div class="col-md-1">
            <td><button type="button" class="btn btn-primary btn-md">PREVIEW</button>
          </div>
        </div>


      <div class="row table-buffer">
        <div class="col-md-12">
            <div class="row">
              <a href="/products" class="btn btn-primary-outline btn-sm">PRODUCTS</a>
              <div class="col-xs-4 input">
                <input type="text" class="form-control" placeholder="Product name" name="name" value="{{$product->name}}">
              </div>
              <div class="col offset-md-1">
                <span class="label label-primary-image">IMAGES</span>
              </div>
            </div>

            <div class="row">
              <button type="button" class="btn btn-primary-outline btn-sm">ORDERS</button>
              <div class="col offset-md-5" style="padding-left:0px;padding-right:0px">
                <img src="{{asset("storage/categories/$product->photo")}}" alt="photo" height="50" width="100">
              </div>
              <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image">
              </form>
            </div>


            <div class="row">
              <button type="button" class="btn btn-primary-outline btn-sm">CUSTOMERS</button>
              <div class="col-xs-4 inputSub">
                <input type="text" class="form-control" placeholder="Product subname" name="subname" value="{{$product->subname}}">
              </div>
            </div>

            <div class="row">
              <button type="button" class="btn btn-primary-outline btn-sm">ANALYTICS</button>
            </div>

            <div class="row">
              <button type="button" class="btn btn-primary-outline btn-sm">DISCOUNTS</button>
              <div class="col-xs-4 input">
                <input type="text" class="form-control" placeholder="Price" name="price" value="{{$product->price}}">
              </div>
              <div class="col" style="padding-left:70px; padding-right:30px;">
                <input type="text" class="form-control" placeholder="Tag" name="tag" value="{{$product->tag}}">
              </div>
              <div class="col" style="padding-right: 180px;">
                <button type="button" class="btn btn-primary">ADD</button>
              </div>
            </div>

            <div class="row">
              <button type="button" class="btn btn-primary-outline btn-sm">APPS</button>
              <div class="col" style="padding-left: 500px;padding-top:5px;padding-right:0px;">
                <button type="button" class="btn btn-primary btn-xs" style="font-size:10px">PREMIUM</button>
              </div>
              <div class="col" style="padding-right: 0px;padding-top:5px;">
                <button type="button" class="btn btn-primary btn-xs" style="font-size:10px">GOLD</button>
              </div>
              <div class="col" style="padding-right: 400px;padding-top:5px;">
                <button type="button" class="btn btn-primary btn-xs" style="font-size:10px">BLACK</button>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 offset-md-2">
                <textarea class="form-control inputDesc2" placeholder="Description" name="description" value="{{$product->description}}"></textarea>
              </div>
            </div>
        </div>
      </div>

      <div class="row row-label">
        <div class="col-md-12">
          <span class="label label-primary-outline">2018 Vintage - All rights reserved.</span>
        </div>
      </div>
    </form>
   </div>

  </body>
</html>
