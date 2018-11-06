<!-- products.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
    
        <div class="row row-vintage">
          <div class="col-md-8 vimage">
            <img src="/images/vintage.png">
          </div>
          <div class="col-md-2 row-person">
            <img src="/images/personIcon.png">
          </div>
          <div class="col-md-2">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn-primary-outline btn-sm">SIGN OUT</button>
          </form>
          </div>
        </div>


        <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
          @csrf
          <div class="row top-buffer">
            <div class="col-md-2">
              <button type="button" class="btn-primary-menu">MENU</button>
            </div>
            <div class="col-md-1">
              <td><button type="submit" class="btn btn-success btn-md">SAVE</button>
            </div>
            <div class="col-md-1">
              <a href="/products" class="btn btn-primary btn-md">CANCEL</a>
            </div>
            <div class="col-md-2">
              <td><button type="button" class="btn btn-danger btn-md" disabled>DELETE</button>
            </div>
            <div class="col-md-1">
              <td><button type="button" class="btn btn-primary btn-md">PREVIEW</button>
            </div>
          </div>

        
          <div class="row align-items-center table-buffer">
            <div class="col-md-12">
                <div class="row">
                  <a href="/products" class="btn btn-primary-outline btn-sm">PRODUCTS</a>
                  <div class="col-xs-4 input">
                    <input type="text" class="form-control" placeholder="Product name" name="name" id="proname">
                  </div>
                  <div class="col offset-md-1">
                    <span class="label label-primary-image">IMAGES</span>
                  </div>
                </div>

                <div class="row">
                  <button type="button" class="btn btn-primary-outline btn-sm">ORDERS</button>
                  <div class="col offset-md-5" style="padding-left:0px;padding-right:0px">
                      <input type="file" name="image[]" multiple>
                    
                  </div>


                </div>


          
                <div class="row">
                  <button type="button" class="btn btn-primary-outline btn-sm">CUSTOMERS</button>
                  <div class="col-xs-4 inputSub">
                    <input type="text" class="form-control" placeholder="Product subname" name="subname" id="prosub">
                  </div>
                </div>

                <div class="row">
                  <button type="button" class="btn btn-primary-outline btn-sm">ANALYTICS</button>
                </div>

                <div class="row">
                  <button type="button" class="btn btn-primary-outline btn-sm">DISCOUNTS</button>
                  <div class="col-xs-4 input">
                    <input type="number" class="form-control" placeholder="Price" name="price" id="proprice">
                  </div>
                  <div class="col-xs-3" style="padding-left:70px; padding-right:0px;">
                    <input type="text" class="form-control" placeholder="Tag" name="tag" id="tag">
                  </div>

                    {{-- <button type="button"  class="btn btn-primary">ADD</button> --}}
                    <div class="col">
                      <a  onclick="inserirTag()" class="btn btn-primary">ADD</a>
                    </div>

                  {{-- href="{{ url('/tags/store/fff') }}" --}}

                </div>

                <div class="row">
                  <button type="button" class="btn btn-primary-outline btn-sm">APPS</button>
                  <div class="col offset-md-5" id="lugarDasTags">
                  
                  </div>

                  <div id="lugarDosInputsDasTags">

                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-6 offset-md-2">
                    <textarea class="form-control inputDesc2" placeholder="Description" name="description"></textarea>
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


   <script>
     function inserirTag(){
      //  pegar o que ta escrito no campo
      var tagNoInput = $("#tag").val();
      
      // soltar um alert com o que escrito
      // alert(tagNoInput);
      

      //toda vez que o botão foi clicado, ele tem que inserir uma tag no lugarDasTags
      $("#lugarDasTags").append("<div class='col';'><button type='button' class='btn btn-primary btn-xs' style='font-size:10px'>"+tagNoInput+"</button></div>");
      $("#lugarDosInputsDasTags").append("<input type='hidden' name='tags[]' value='"+tagNoInput+"'>");


      // limpar o campo
      $("#tag").val("");
     }
    
   </script>


  </body>
</html>