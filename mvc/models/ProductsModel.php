<?php
    class ProductsModel extends DB{
        function GetProducts(){
            $qr = "SELECT * FROM products";
            return mysqli_query($this->con, $qr);
        }

        function GetSingleProducts(){
            $id = $_GET['id'];
            $qr = "SELECT * FROM products WHERE id = $id";
            return mysqli_query($this->con, $qr);
            
        }
    }
?>