<?php 
    class App{
        //localhost/Home/contact/param1/param2/...
        protected $controller = "Home";
        protected $action = "ViewPage";
        protected $params = [];

        //Hàm khởi --- Chạy khi 1 class được gọi
        function __construct(){
            //Xử lý chuỗi Url

            $arr = $this->UrlProcess();

            
            //Xử lý controller localhost/Home
                //Kiểm tra file controller có tồn tại không
                //Nếu có thì gán biến $controller chính là phần tử đầu tiên của mảng $arr
                //Sau khi gán - cắt phần tử đó ra khỏi mảng
            if( file_exists("./mvc/controllers/".$arr[0].".php") ){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
                //Require File controller vào
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            //Xử lý Action localhost/Home/HomeView
                //Kiểm tra $arr[1]
                //Nếu hàm đó tồn tại trong Home.php
                // Thì cái action = $arr[1]
            if( isset($arr[1]) == true ){
                if( method_exists($this->controller, $arr[1]) ){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
                //Xong thì xóa nó ra khỏi mảng để chuẩn bị cho Param
            }
            
            //Xử lý params
                //params = nếu có arr thì array_values($arr) ngược lại thì là []
                $this->params = $arr?array_values($arr):[];
                //call_user_func_array([Hiển thị controller, action], params)
                //Tự hiển thị action 
                call_user_func_array([$this->controller, $this->action], $this->params);
        }
        // Xử lý thanh địa chỉ để trả về 1 mảng
        function UrlProcess(){
            if( isset($_GET["url"]) ){
              return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
