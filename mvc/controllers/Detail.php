<?php

// http://localhost/live/Home

class Detail extends Controller{

    function __construct()
    {
        $this->products = $this->model("ProductsModel");
        $this->GetProducts = $this->products -> GetSingleProducts();
    }

    //Phải có Homeview
    function ViewPage(){
        $this->view("master1",[
            "Home"=> "Chi Tiết",
            "Page"=> "ShowDetail",
            "Products"=>$this->GetProducts, 
        ]);
    }
    
}
?>