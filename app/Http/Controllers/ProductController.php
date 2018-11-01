<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tags;
use App\Photo;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->subname = $request->get('subname');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        // $product->tag = $request->get('tag');
        $product->save();
        
        

        foreach ($request->get("tags") as  $tagForm) {
            $tag = new Tags();
            $tag->name = $tagForm;
            $tag->product_id = $product->id;
            $tag->save();
        }

         if($request->hasFile('image')){
            $request->image->extension();

            $request->image->storeAs('categories', $product->id.'-'.$product->name.$request->image->extension());
        
            $photo = new Photo();
            $photo->name = $product->id.'-'.$product->name.$request->image->extension();
            $photo->product_id = $product->id;
            $photo->save();
        }



            // Define o valor default para a variável que contém o nome da imagem
        //$nameFile = null;

        // if($request->hasFile('image') && $request->file('image')->isValid()){
        //     foreach($request->file('image') as $image){
        //         $nameFile = $product->id.$product->name.$image;
        //         $upload = $request->image->storeAs('categories', $nameFile);
               
        //         $photo = new Photo();
        //         $photo->name = $nameFile;
        //         $photo->product_id = $product->id;
        //         $photo->save();
        //     }
        // }

        // Verifica se informou o arquivo e se é válido
        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //     //
        //     // // Define um aleatório para o arquivo baseado no timestamps atual
        //     // #$name = uniqid(date('HisYmd');
        //     // $name = ;
        //     //
        //     // // Recupera a extensão do arquivo
        //     // $extension =

        //     // Define finalmente o nome
        //     $nameFile = $product->id.$product->name.$request->image->extension();

        //     // Faz o upload:
        //     $upload = $request->image->storeAs('categories', $nameFile);
        //     // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

        //     // Verifica se NÃO deu certo o upload (Redireciona de volta)
        //     if ( !$upload ){
        //         return redirect()
        //                     ->back()
        //                     ->with('error', 'Falha ao fazer upload')
        //                     ->withInput();
        //     }


        //     $product->photo = $nameFile;
        //     $product->save();

        //   }


        return redirect('products')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = DB::table('tags')->where('product_id', $product->id);

        return $tags;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $photo = DB::table('photos')->where('product_id', $id)->first();
        return view('edit', compact('product', 'id'), compact('photo', $photo->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->name = $request->get('name');
      $product->subname = $request->get('subname');
      $product->price = $request->get('price');
      $product->description = $request->get('description');
      $product->tag = $request->get('tag');
      $product->save();

      foreach ($request->get("tags") as  $tagForm) {
            $tag = new Tags();
            $tag->name = $tagForm;
            $tag->product_id = $product->id;
            $tag->save();
        }

    //   $photo = DB::table('photos')->where('product_id', $id)->first();
    //   echo $photo->name;  

      if($request->hasFile('image')){
            $request->image->extension();

            $request->image->storeAs('categories', $product->id.'-'.$product->name.$request->image->extension());
        
            $newphoto = new Photo();
            $newphoto->name = $product->id.'-'.$product->name.$request->image->extension();
            $newphoto->product_id = $product->id;
            $newphoto->save();
        }

      // Define o valor default para a variável que contém o nome da imagem
      $nameFile = null;

      // Verifica se informou o arquivo e se é válido
      if ($request->hasFile('image') && $request->file('image')->isValid()) {
          //
          // // Define um aleatório para o arquivo baseado no timestamps atual
          // #$name = uniqid(date('HisYmd');
          // $name = ;
          //
          // // Recupera a extensão do arquivo
          // $extension =

          // Define finalmente o nome
          $nameFile = $product->id.$product->name.$request->image->extension();

          // Faz o upload:
          $upload = $request->image->storeAs('categories', $nameFile);
          // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

          // Verifica se NÃO deu certo o upload (Redireciona de volta)
          if ( !$upload ){
              return redirect()
                          ->back()
                          ->with('error', 'Falha ao fazer upload')
                          ->withInput();
          }

          $product->photo = $nameFile;
          $product->save();

        }

      return redirect('products');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Information has been deleted');
    }
}
