<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

   <style>
       .tagPequena{
            padding-top: 10px;
       }
   </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <div class="row">
            {{-- meio --}}
            <div class="col-md-3">
                <ul class="list-group">
                    <a><li class="list-group-item">Produto</li></a>
                    <a><li class="list-group-item">Categoria</li></a>
                    <a><li class="list-group-item">Tags</li></a>
                </ul>
            </div>    
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                       <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="tag" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button onclick="inserirTag()" class="btn btn-default" type="submit">Add</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" id="lugarDasTags">

                            </div>
                            <div class="col-md-10">
                                |
                            </div>
                            
                        </div>

 
                    </div>
                </div>
            </div>
        </div>





    </div>
</body>


<script>
    function inserirTag(){
      //  pegar o que ta escrito no campo
      var tagNoInput = $("#tag").val();
      
      // soltar um alert com o que escrito
      // alert(tagNoInput);
      

      //toda vez que o botão foi clicado, ele tem que inserir uma tag no lugarDasTags
      $("#lugarDasTags").append("<span class='label label-success'>"+tagNoInput+"</span> ");


      // limpar o campo
      $("#tag").val("");
     }
    
   </script>



</script>

</html>