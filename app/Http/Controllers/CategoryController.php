<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory; 
use App\Models\Product;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byCategory($categoryName)
    {
        $products = Product::join('sub_categories', 'p_sub_c_id', '=', 'sub_categories.sc_id')
                        ->join('categories', 'sub_categories.sc_c_id', '=', 'categories.c_id')
                        ->where('categories.c_name', $categoryName)
                        ->paginate(9);

        $Category = Category::orderby('c_name', 'asc')->get();
        foreach($Category as $category){
            $allCategory[$category->c_name] = SubCategory::where('sc_c_id', $category->c_id)->get();
        }
        
        $data = [
            'allCategory' => $allCategory,
            'Products' => $products
        ];


        return view('frontend.category', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bySubCategory($subCategoryId)
    {
        $products = Product::where('p_sub_c_id', $subCategoryId)->paginate(9);
        $Category = Category::orderby('c_name', 'asc')->get();
        foreach($Category as $category){
            $allCategory[$category->c_name] = SubCategory::where('sc_c_id', $category->c_id)->get();
        }
        
        $data = [
            'allCategory' => $allCategory,
            'Products' => $products
        ];


        return view('frontend.category', $data);
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
