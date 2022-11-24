<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{

    public function getSearchProducts($searchInput)
    {
        $searchProducts = DB::table('products_view')
                            ->where('productName', 'like', '%'.$searchInput.'%')
                            ->orWhere('searchTags', 'like', '%'.$searchInput.'%')
                            ->get();
        $response = ["status" => "Success", "data"=> $searchProducts];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getSearchProductsWithDiscountCalculation($searchInput)
    {
        $products = Cache::rememberForever('getSearchProductsWithDiscountCalculationproducts',  function () {
            return DB::table('products_view')->get();
        });

        $searchProducts = $products->filter(function ($item) use($searchInput)  {
            return preg_match('/'.$searchInput.'/i', $item->productName) || preg_match('/'.$searchInput.'/i', $item->searchTags) ;
        });

        $data = [];
        foreach ($searchProducts as $key => $value)
        {
            $data[$key] = $value;

            $productId = $data[$key]->productId;
            list($discountPercent, $discountAmount) = getProductDiscount($productId);

            $data[$key]->discountPercent = $discountPercent;
            $data[$key]->discountAmount = $discountAmount;

        }

        $response = ["status" => "Success", "data" => $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getSearchCategoryProducts($category)
    {
        $searchProducts = DB::table('products_view')
                            ->where('categories', 'like', '%'.$category.'%')
                            ->get()
                            ->unique('productId');
        $response = ["status" => "Success", "data"=> $searchProducts];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getSearchCategoryProductsWithDiscountCalculation($categorySlug)
    {

        $categories = Cache::rememberForever('categories',  function () {
            return DB::table('categories')->get();
        });

        $categoryId = $categories->where('categorySlug', $categorySlug)->pluck('categoryId')->first();

        $products = Cache::rememberForever('products',  function () {
            return DB::table('product_categories_tree_view')
                ->whereNotNull('categoryId')
                ->whereNotNull('productId')
                ->get();
        });

        $searchProducts1 = $products->where('categoryId', $categoryId);
        $searchProducts2 = $products->where('parentCategoryId', $categoryId);

        $searchProducts = $searchProducts1->merge($searchProducts2);
        $searchProducts = $searchProducts->unique('productId');


        $data = [];
        foreach ($searchProducts as $key => $value)
        {
            $data[$key] = $value;

            $productId = $data[$key]->productId;
            list($discountPercent, $discountAmount) = getProductDiscount($productId);

            $data[$key]->discountPercent = $discountPercent;
            $data[$key]->discountAmount = $discountAmount;

        }

        $response = ["status" => "Success", "data" => $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }







}
