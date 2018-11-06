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

        $images = $request->file('image');

         if($request->hasFile('image')){
             $cont = 0;
             foreach($images as $image){
                // $request->image->extension();
                $cont++;
                
                $image->storeAs('categories', $product->id.'-'.$product->name.'-img'.$cont.\File::extension($image));
            
                $photo = new Photo();
                $photo->name = $product->id.'-'.$product->name.'-img'.$cont.\File::extension($image);
                $photo->product_id = $product->id;
                $photo->save();
             }
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
        $photo = DB::table('photos')->where('product_id', '=', $id)->get();
        return view('edit', compact('product', 'id'), ['photo' => $photo]);
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
        $product->save();


        $photos = DB::table('photos')->where('product_id', '=', $id)->get();
        $tags = DB::table('tags')->where('product_id', '=', $id)->get();


        DB::table('photos')->where('product_id', '=', $id)->delete();
        DB::table('tags')->where('product_id', '=', $id)->delete();


        foreach ($request->get("tags") as  $tagForm) {
            $tag = new Tags();
            $tag->name = $tagForm;
            $tag->product_id = $product->id;
            $tag->save();
            
        }

        $images = $request->file('image');   

        if($request->hasFile('image')){
             $cont = count($photos);
            
             foreach($images as $image){
                // $request->image->extension();
                $cont++;
                
                $image->storeAs('categories', $id.'-'.$product->name.'-img'.$cont.\File::extension($image));
            
                $photo = new Photo();
                $photo->name = $id.'-'.$product->name.'-img'.$cont.\File::extension($image);
                $photo->product_id = $id;
                $photo->save();
             }
        }

        foreach($tags as $tag){
            $newTag = new Tags();
            $newTag->id = $tag->id;
            $newTag->name = $tag->name;
            $newTag->created_at = $tag->created_at;
            $newTag->product_id = $tag->product_id;
            $newTag->updated_at = $tag->updated_at;
            $newTag->save();
        }

        foreach($photos as $photo){
            $newPhoto = new Photo();
            $newPhoto->name = $photo->name;
            $newPhoto->created_at = $photo->created_at;
            $newPhoto->product_id = $photo->product_id;
            $newPhoto->updated_at = $photo->updated_at;
            $newPhoto->save();
        }

    //   $photo = DB::table('photos')->where('product_id', $id)->first();
    //   echo $photo->name;  

    //   if($request->hasFile('image')){
    //         $request->image->extension();

    //         $request->image->storeAs('categories', $product->id.'-'.$product->name.$request->image->extension());
        
    //         $newphoto = new Photo();
    //         $newphoto->name = $product->id.'-'.$product->name.$request->image->extension();
    //         $newphoto->product_id = $product->id;
    //         $newphoto->save();
    //     }

    //   // Define o valor default para a variável que contém o nome da imagem
    //   $nameFile = null;

    //   // Verifica se informou o arquivo e se é válido
    //   if ($request->hasFile('image') && $request->file('image')->isValid()) {
    //       //
    //       // // Define um aleatório para o arquivo baseado no timestamps atual
    //       // #$name = uniqid(date('HisYmd');
    //       // $name = ;
    //       //
    //       // // Recupera a extensão do arquivo
    //       // $extension =

    //       // Define finalmente o nome
    //       $nameFile = $product->id.$product->name.$request->image->extension();

    //       // Faz o upload:
    //       $upload = $request->image->storeAs('categories', $nameFile);
    //       // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

    //       // Verifica se NÃO deu certo o upload (Redireciona de volta)
    //       if ( !$upload ){
    //           return redirect()
    //                       ->back()
    //                       ->with('error', 'Falha ao fazer upload')
    //                       ->withInput();
    //       }

    //       $product->photo = $nameFile;
    //       $product->save();

    //     }

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
        DB::table('photos')->where('product_id', '=', $id)->delete();
        DB::table('tags')->where('product_id', '=', $id)->delete();
        return redirect('products')->with('success','Information has been deleted');
    }
}
