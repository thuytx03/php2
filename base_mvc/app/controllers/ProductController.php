<?php
    namespace App\Controllers;
    use App\Models\Product;
    class ProductController extends BaseController{
        public $product;

        public function __construct(){
            $this->product = new Product();
            
        }

        public function index(){
            $products=$this->product->getProduct();

            //đổ dữ liệu sang view blade
            return $this->render('product.index',compact('products'));
            
        }
        public function addProduct(){
            return $this->render('product.add');
        }

        public function postProduct(){
            if(isset($_POST['add'])){
                // delete_session();
                $error=[];
                if(empty($_POST['ten_sp'])){
                $error[]="Bạn không được để trống tên sản phẩm";

                }
                if(empty($_POST['gia'])){
                    $error[]="Bạn không được để trống giá";
    
                    }
                    if(count($error)>0){
                        // $_SESSION['errors']=$error;
                        // header('location:'. BASE_URL.'add-product');
                        // die;
                        redirect('errors',$error,'add-product');
                    }else{
                        $result=$this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['gia']);
                        if($result){
                            // $_SESSION['success']="Thêm sản phẩm thành công";
                            // header('location:'. BASE_URL.'add-product');
                            // die;
                            redirect('success',"Thêm sản phẩm thành công",'add-product');
                        }
                    }
            }
        }

        public function editProduct($id){
            $product=$this->product->getDetailProduct($id);
            return $this->render('product.edit',compact('product'));
            
        }
        public function updateProduct($id){
            if(isset($_POST['edit'])){
                $result=$this->product->updateProduct($id,$_POST['ten_sp'],$_POST['gia']);
                if($result){
                    redirect('success',"Thành công",'test');
                }
            }
        }
    }
