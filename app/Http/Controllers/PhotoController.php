<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use DB;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product)
    {
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $photos = DB::table('photos')->where([['product_id', '=', $product->id], ['deleted_at', '=', null]])->get();
        DB::table('photos')->where('product_id', '=', $product->id)->delete();

        foreach($photos as $photo){
            $newPhoto = new Photo();
            $newPhoto->name = $photo->name;
            $newPhoto->created_at = $photo->created_at;
            $newPhoto->product_id = $photo->product_id;
            $newPhoto->updated_at = $photo->updated_at;
            $newPhoto->deleted_at = $photo->deleted_at;
            $newPhoto->save();
        }

        $images = $request->file('image');  

        if($request->hasFile('image')){
             $cont = count($photos);
            
             foreach($images as $image){
                $cont++;
                
                while(count(DB::table('photos')->where('name', $product->id.'-'.$product->name.'-img'.$cont.\File::extension($image))->get()) != 0){
                    $cont++;
                }

                $image->storeAs('categories', $product->id.'-'.$product->name.'-img'.$cont.\File::extension($image));
            
                $photo = new Photo();
                $photo->name = $product->id.'-'.$product->name.'-img'.$cont.\File::extension($image);
                $photo->product_id = $product->id;
                $photo->save();
             }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id, $id)
    {
        $photo = Photo::find($id);
        $photo->delete();

        return redirect('products/'.$product_id.'/edit');
    }
}
