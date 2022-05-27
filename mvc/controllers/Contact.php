<?php

// http://localhost/live/Home

class Contact extends Controller{

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
            "Home"=> "Liên Hệ",
            "Page"=> "ShowContact",
            "Categories"=>$this->GetCategories,
        ]);
    }
    
}
?>