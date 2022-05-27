<?php
    class ProductsModel extends DB{
        function GetProducts(){
            $qr = "SELECT * FROM products";
            return mysqli_query($this->con, $qr);
        }
    }
?>