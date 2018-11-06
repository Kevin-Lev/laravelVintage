<!-- products.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Products</title>
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

      .colInputs{
        margin-right: 110px;
      }

    </style>


    <div class="container">
      
        <input name="_method" type="hidden" value="PATCH">
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


      <form method="POST" action="{{action('ProductController@update', $id)}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
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

                <div class="col colInputs">
                  <div class="row" style="padding-left: 15px;">
                    <input type="text" class="form-control" placeholder="Product name" name="name" value="{{$product->name}}" style="width: 270px; ">
                </div>

                  <div class="row" style="padding-top: 30px; padding-left:15px;">
                      <input type="text" class="form-control" placeholder="Product subname" name="subname" value="{{$product->subname}}" style="width: 270px">
                  </div>


                  <div class="row" style="padding-top: 30px;padding-left:15px;">
                      <input type="number" class="form-control" placeholder="Price" name="price" value="{{$product->price}}" style="width: 270px;">
                  </div>


                  <div class="row" style="padding-top: 40px; padding-right: 20px;">
                    <div class="col">
                      <textarea class="form-control " placeholder="Description" name="description" value="{{$product->description}}" style="height: 190px;width: 270px;"></textarea>
                    </div>
                  </div>

                </div>

                <div class="col" style="margin-right:0px">
                  <div class="row">
                    <span class="label label-primary-image">IMAGE</span>
                  </div>
                  <div class="row">
                    {{-- <img src="{{asset("storage/categories/$photo->name")}}" alt="{{$photo->name}}" height="120" width="120"> --}}
                    
                      @foreach ($photo as $pho)
                        <img src="{{asset("storage/categories/$pho->name")}}" alt="{{$pho->name}}" height="80" width="80">
                        <a href="{{ url('/photoStore/'.$pho->product_id.'/'.$pho->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                      @endforeach
                    
                   </div>
                   <div class="row" style="padding-top:20px">
                      <input type="text" class="form-control" placeholder="Tag" name="tag"  id="tag" style="width:200px">
                      <div class="row" style="padding-top:10px;">
                        <div id="lugarDasTags">
                          
                        </div>
                        
                        <div id="lugarDosInputsDasTags">

                        </div>
                      </div>
                  </div>

                </div>

                <div class="col" style="padding-right:50px;">
                    <input type="file" name="image[]" multiple> 
                    <a  onclick="inserirTag()" class="btn btn-primary" style="margin-top:212px">ADD</a>
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
      //alert(tagNoInput);

      
      //toda vez que o botão foi clicado, ele tem que inserir uma tag no lugarDasTags
      $("#lugarDasTags").append("<div class='col';'><button type='button' class='btn btn-primary btn-xs' style='font-size:10px'>"+tagNoInput+"</button></div>");
      $("#lugarDosInputsDasTags").append("<input type='hidden' name='tags[]' value='"+tagNoInput+"'>");


      // limpar o campo
      $("#tag").val("");
     }
    
   </script>

  </body>
</html>
