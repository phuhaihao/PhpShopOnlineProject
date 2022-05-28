<?php

// http://localhost/live/Home

class Checkout extends Controller{

    function __construct()
    {
        $this->products = $this->model("ProductsModel");
        $this->GetProducts = $this->products -> GetProducts();
    }

    //Phải có Homeview
    function ViewPage(){
        $this->view("master1",[
            "Home"=> "Thanh Toán",
            "Page"=> "ShowCheckout",
            "Products"=>$this->GetProducts, 
        ]);
    }
    
}
?>