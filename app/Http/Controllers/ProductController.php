<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory; 
use App\Models\Product;
use App\Models\Photo;
use Faker\Factory as Faker;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($productId)
    {
        $product = Product::where('p_id', $productId)->limit(1)->get();
        $photos = Photo::where('photo_p_id', $productId)->get();

        $Category = Category::orderby('c_name', 'asc')->get();
        foreach($Category as $category){
            $allCategory[$category->c_name] = SubCategory::where('sc_c_id', $category->c_id)->get();
        }
        
        $data = [
            'allCategory' => $allCategory,
            'mainProduct' => $product,
            'products' => Product::limit(6)->get(),
            'photos' => $photos
        ];


        return view('frontend.detail', $data);

        // dd(Product::all());
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
