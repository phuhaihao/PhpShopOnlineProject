<?php
    class CategoriesModel extends DB{
        function GetCategories(){
            $qr = "SELECT * FROM categories";
            return mysqli_query($this->con, $qr);
        }
    }
?>