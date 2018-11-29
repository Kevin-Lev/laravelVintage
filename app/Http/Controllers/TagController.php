<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tags;
use DB;


class TagController extends Controller
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
      foreach ($request->get("tags") as  $tagForm) {
            $tag = new Tags();
            $tag->name = $tagForm;
            $tag->product_id = $product->id;
            $tag->save();
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
      $tags = DB::table('tags')->where('product_id', '=', $product->id)->get();
      DB::table('tags')->where('product_id', '=', $product->id)->delete();

      foreach($tags as $tag){
            if(DB::table('tags')->where('id', '==', $tag->id)->get()){  //Se já estiver no BD, então não salva
                continue;
            }
            else{
                $newTag = new Tags();
                $newTag->id = $tag->id;
                $newTag->name = $tag->name;
                $newTag->created_at = $tag->created_at;
                $newTag->product_id = $tag->product_id;
                $newTag->updated_at = $tag->updated_at;
                $newTag->save();
            }
        }

        if($request->get("tags") != null){
            foreach ($request->get("tags") as  $tagForm) {
                $tag = new Tags();
                $tag->name = $tagForm;
                $tag->product_id = $product->id;
                $tag->save();
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return redirect('products/'.$tag->product_id.'/edit');
    }

    
}
