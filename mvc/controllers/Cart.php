<?php

// http://localhost/live/Home

class Cart extends Controller{

    function __construct()
    {
        $this->categories = $this->model("CategoriesModel");
        $this->GetCategories = $this->categories -> GetCategories();
    }

    //Phải có Homeview
    function ViewPage(){
        $this->view("master1",[
            "Home"=> "Giỏ Hàng",
            "Page"=> "ShowCart",
            "Categories"=>$this->GetCategories, 
        ]);
    }
    
}
?>