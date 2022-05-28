<?php

// http://localhost/live/Home

class Cart extends Controller{

    function __construct()
    {
        $this->products = $this->model("ProductsModel");
        $this->GetProducts = $this->products -> GetProducts();
    }

    //Phải có Homeview
    function ViewPage(){
        $this->view("master1",[
            "Home"=> "Giỏ Hàng",
            "Page"=> "ShowCart",
            "Products"=>$this->GetProducts, 
        ]);
    }
    
}
?>