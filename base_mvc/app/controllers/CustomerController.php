<?php
namespace App\Controllers;
use App\Models\Customer;
class CustomerController extends BaseController{
    public $customer;
        public function __construct()
        {
            $this->customer=new Customer();
        }
        public function listCustomer(){
            $customers=$this->customer->getCustomer();
            return $this->render('customer.index', compact('customers'));
        }
}


?>