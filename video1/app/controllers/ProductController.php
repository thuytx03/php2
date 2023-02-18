<?php
namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\Product;

class ProductController extends BaseController{
    public $product;
    public function __construct()
    {
        $this->product=new Product();
    }

    public function index(){
        $products=$this->product->getProducts();
        return $this->render('product.index',compact('products'));
    }
}

?>