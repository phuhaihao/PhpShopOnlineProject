<?php

// http://localhost/live/Home

class Home extends Controller{

    function __construct()
    {
        $this->categories = $this->model("CategoriesModel");
        $this->GetCategories = $this->categories -> GetCategories();
    }

    //Phải có Homeview
    function ViewPage(){
        // Call Models

        // Call Views
        $this->view("master1",[
            "Home"=> "Trang Chủ",
            "Page"=> "ShowHome",
            "Categories"=>$this->GetCategories,
        ]);
    }
    
}
?>