<?php

namespace App\Controllers;

use Phroute\Phroute\RouteCollector;

class HomeController extends BaseController
{

   public function __construct()
   {
       checkAuth();
   }
   public function index()
   {
      return $this->render('layout.home');
   }
}
