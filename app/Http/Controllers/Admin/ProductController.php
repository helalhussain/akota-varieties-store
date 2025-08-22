<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::eloquent(Product::query())
                ->addIndexColumn()
                ->addColumn('action', fn () => '')
                ->toJson();
        }
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $producst)
    {

        return view('admin.product.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);

        if($request->file==null){
            $file = null;
        }else{
            $file = file_upload($request->file, 'product');
        }

        $store = new Product();
        $store->name = $request->name;
        // $store->title_bn = $request->title_bn;
        $store->image =  $file;
        $store->save();
        return response()->json([
            'message' => 'Product added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('admin.product.form',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,Product $product)
    {


        $request->validate([

            'name' => 'required',

        ]);
        if($request->file==null){
            $product->update([
                'name'=>$request->name,
        ]);
        }else{
            $product->update([
                'name'=>$request->name,
                'image'=>file_upload($request->file, 'product')

        ]);

        }
        // return redirect()->route('admin.product.index');
        return response()->json(['message' => 'Product updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message'=>'product deleted successfylly'
        ]);
    }
}
