<?php
// include_once 'app/models/Product.php';
// include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{
    public $product;
    public function __construct()
    {
        $this->product=new Product();
    }
   public function getProduct() {
        $products =$this->product->getListProduct();
        return $this-> render('product.index',compact('products'));
    }
    public function addProduct(){
        return $this->render('product.add');
    }
    public function saveAddProduct(){
        if(isset($_POST['add'])){
            $ten_sp=$_POST['ten_sp'];
            $gia=$_POST['gia'];
            $this->product->insertProduct(NULL,$ten_sp,$gia);
            redirect("success","Thanh cong","listProduct");
        }
    }
    public function deleteProduct($id){
        $this->product->deleteProduct($id);
        redirect("success","Thanh cong","listProduct");
    }
    public function updateProduct($id){
        $getOneProduct=$this->product->getOneProduct($id);
        return $this->render("product.update",compact("getOneProduct"));
    }
    public function saveUpdateProduct($id){
        if(isset($_POST['update'])){
            $ten_sp=$_POST['ten_sp'];
            $gia=$_POST['gia'];
            $this->product->updateProduct($id,$ten_sp,$gia);
            redirect("success","Thanh cong","listProduct");


        }
    }
}
