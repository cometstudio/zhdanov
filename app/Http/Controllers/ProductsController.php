<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductsController extends Controller
{
    protected $css = 'products';
    protected $title = 'Товары';

    public function index(Request $request)
    {
        $productsModel = new Product();

        $modelOptions = $productsModel->getOptions();

        $input = $request->all();

        if(!empty($input)){
            foreach ($input as $key=>$value){
                switch ($key){
                    default:
                        $builder = $productsModel;
                        break;
                    case 'aid':
                        $builder = Product::where('audience_id', '=', $value);

                        if(!empty($modelOptions['audiences'][$value])) $this->title .= ' '.mb_convert_case($modelOptions['audiences'][$value][2], MB_CASE_LOWER);
                        break;
                }
            }

            $products = $builder->get();
        }else{
            $products = Product::all();
        }

        return view('products.index', [
            'css'=>$this->css,
            'audiences'=>(!empty($modelOptions['audiences']) ? $modelOptions['audiences'] : []),
            'products'=>$products,
            'title'=>$this->title,
        ]);
    }

    public function courseProducts($id)
    {
        $course = Course::where('id', '=', $id)->firstOrFail();

        $products = $course->products()->get();

        return view('courses.products', [
            'css'=>$this->css,
            'course'=>$course,
            'products'=>$products,
            'title'=>$this->title,
        ]);

    }

    public function item($id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();

        $this->title = $product->name;

        return view('products.item', [
            'css'=>$this->css,
            'product'=>$product,
            'title'=>$this->title,
        ]);
    }
}
