<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * to select all data, using HTTP request method GET
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function get_all() {
        return  Product::all();
    }

    /***
     * to select data by id, using HTTP request method GET
     *
     * @param $id
     * @return mixed
     */
    public function get_by_product_no(Product $product)
    {
        return $product;
    }

    /***
     * to insert new record in table
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        return Product::create($request->all());
    }

    /***
     * to insert update 1 record in table by id
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());


        return response()->json($product, 200);
    }

     /***
     * to delete data by id request
     *
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
