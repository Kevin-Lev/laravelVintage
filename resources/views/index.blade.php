<!-- products.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index - Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    {{-- Pro Modal funcionar, precisa da biblioteca abaixo --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  </head>
  <body>

    
<form action="{{action('ProductController@uploadCsv')}}" method="POST", enctype="multipart/form-data">
  @csrf
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalCenterTitle">Import CSV</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <input type="file" name="csv">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
              </div>
              
            </div>
          </div>
        </div>
  </form>
    

    <style>
      .table{
        text-align: center;
        background-color: white;
        border: 1px solid;
        border-color: #F5F5F5;
        padding-left: 20px;
        width: 840px;
        overflow: scroll;
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
          {{-- <form action="/login" method="post">
            <button type="submit" class="btn-primary-outline btn-sm">SIGN OUT</button>
          </form> --}}
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn-primary-outline btn-sm">SIGN OUT</button>
          </form>
        </div>
      </div>


      <div class="row top-buffer">
        <div class="col-md-2">
          <button type="button" class="btn-primary-menu">MENU</button>
        </div>
        <div class="col-md-2">
          <a href="products/create" class="btn btn-primary btn-md">ADD PRODUCT</a>
        </div>
        <div class="col-md-3">
          {{-- <td><button type="button" class="btn btn-primary btn-md">IMPORT PRODUCT</button> --}}
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalCenter">IMPORT PRODUCT</button>
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" placeholder="Search..." id="search">
        </div>
        <div class="col-md-1">
            <td><button type="submit" class="btn btn-primary btn-md">SEARCH</button>
        </div>
      </div>

      

    <div class="row table-buffer">
      <div class="col">
          <div class="row">
            <a href="/products" class="btn btn-primary-outline btn-sm">PRODUCTS</a>
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

              @foreach($products as $product)

                <tr>
                  <td>{{$product['name']}}</td>
                  <td>{{$product['subname']}}</td>
                  <td>{{$product['price']}}</td>


                  <td><a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach

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
