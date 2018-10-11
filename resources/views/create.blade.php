<!-- create.blade.php -->

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
      }
      .container{
        position: relative;
        top: 200px;
      }
      .top-buffer{
        margin-top: 100px;
      }
      .table-buffer{
        margin-top: 40px;
      }
    </style>


    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <img src="/images/vintage.png">
        </div>
        <div class="col-md-2">
          <img src="/images/personIcon.png">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-sm">SIGN OUT</button>
        </div>
      </div>


      <div class="row top-buffer">
        <div class="col-md-2">
          <button type="button" class="btn btn btn-md">MENU</button>
        </div>
        <div class="col-md-2">
          <td><button type="button" class="btn btn-primary btn-md">ADD PRODUCT</button>
        </div>
        <div class="col-md-3">
          <td><button type="button" class="btn btn-primary btn-md">IMPORT PRODUCT</button>
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" id="search">
        </div>
        <div class="col-md-1">
          <td><button type="button" class="btn btn-primary btn-md">SEARCH</button>
        </div>
      </div>


    <div class="row align-items-center table-buffer">
      <div class="col">
        <div class="row">
          <button type="button" class="btn btn-sm">PRODUCTS</button>
        </div>

          <div class="row">
            <button type="button" class="btn btn btn-sm">ORDERS</button>
          </div>

            <div class="row">
              <button type="button" class="btn btn btn-sm">CUSTOMERS</button>
            </div>

            <div class="row">
              <button type="button" class="btn btn btn-sm">ANALYTICS</button>
            </div>

            <div class="row">
              <button type="button" class="btn btn btn-sm">DISCOUNTS</button>
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
              <tr>
                <td>Kevin</td>
                <td>Mark</td>
                <td>Otto</td>
                <td><button type="button" class="btn btn-primary btn-md">EDIT</button> <button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><button type="button" class="btn btn-primary">EDIT</button> <button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td><button type="button" class="btn btn-primary">EDIT</button> <button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
            </tbody>
        </table>
        </div>
    </div>
 </div>

  </body>
</html>
