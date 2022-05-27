<?php

// http://localhost/live/Home

class Checkout extends Controller{

    function __construct()
    {
        $this->categories = $this->model("CategoriesModel");
        $this->GetCategories = $this->categories -> GetCategories();
    }

    //Phải có Homeview
    function ViewPage(){
        $this->view("master1",[
            "Home"=> "Thanh Toán",
            "Page"=> "ShowCheckout",
            "Categories"=>$this->GetCategories, 
        ]);
    }
    
}
?>