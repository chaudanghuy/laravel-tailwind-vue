<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseController
{
    
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse(ProductResource::collection($products), 'Product retrieve succesfully');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'treatment' => 'required',
            'price' => 'required',
            'photos' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation error', $validator->errors());
        }

        $product = Product::create($input);
        return $this->sendResponse(new ProductResource($product), 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
    }

    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'treatment' => 'required',
            'price' => 'required',
            'photos' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error. ', $validator->errors());
        }

        $product->treatment = 'ahihi';
        $product->price = 200000;
        $product->photos = 'ahihi.jpg';
        $product->save();

        return $this->sendResponse(new ProductResource($product), 'Product update successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse([], 'Product deleted successfully.');
    }
}
