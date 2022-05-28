<?php

// http://localhost/live/Home

class Product extends Controller{

    function __construct()
    {
        $this->products = $this->model("ProductsModel");
        $this->GetProducts = $this->products -> GetProducts();
    }

    //Phải có Homeview
    function ViewPage(){
        // Call Models

        // Call Views
        $this->view("master1",[
            "Home"=> "Product",
            "Page"=> "ShowProduct",
            "Products"=>$this->GetProducts,
        ]);
    }
    
}
?>