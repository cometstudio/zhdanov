<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;

class ProductsController extends Controller
{
    protected $css = 'products';

    public function index(Request $request)
    {
        $input = $request->all();

        if(!empty($input)){
            foreach ($input as $key=>$value){
                switch ($key){
                    default:
                        $builder = new Product();
                    break;
                    case 'aid':
                        $builder = Product::where('audience_id', '=', $value);
                    break;
                }
            }

            $products = $builder->get();
        }else{
            $products = Product::all();
        }

        return view('products.index', [
            'css'=>$this->css,
            'products'=>$products,
        ]);
    }

    public function item($id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();

        return view('products.item', [
            'css'=>$this->css,
            'product'=>$product,
        ]);
    }
}
