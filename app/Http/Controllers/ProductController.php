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
        $product->save();
        
        $tagControl = new TagController();
        $tagControl->store($request, $product);

        $photoControl = new PhotoController();
        $photoControl->store($request, $product);

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
        $photo = DB::table('photos')->where([['product_id', '=', $id], ['deleted_at', '=', null]])->get();
        $tag = DB::table('tags')->where('product_id', '=', $id)->get();
        
        return view('edit', compact('product', 'id'), ['photo' => $photo, 'tag' => $tag]);
    }

    public function preview($id){
        $product = Product::find($id);
        $photo = DB::table('photos')->where('product_id', '=', $id)->get();
        $tag = DB::table('tags')->where('product_id', '=', $id)->get();

        return view('preview', compact('product', 'id'), ['photo' => $photo, 'tag' => $tag]);
    }

    public function uploadCsv(Request $request){
        
        $csvList = $request->file('csv');

        foreach($csvList as $csv){
            $csv->storeAs('csv files/not imported', $csv->getClientOriginalName());
        }

        return redirect('products');        
        
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


        $photoControl = new PhotoController();
        $photoControl->update($request, $product);

        $tagControl = new TagController();
        $tagControl->update($request, $product);
        

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
