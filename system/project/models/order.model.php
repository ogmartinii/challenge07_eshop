<?php

class Order_Model extends model
{
    protected static $object_class = 'Order_Object';

    public static function addToCart()
    {
        if($_POST){
            if(!isset($_SESSION['products'])){
            $_SESSION['products'] = []; //nerozumim syntax
            }
            $_SESSION ['products'][] = $_POST['id'];  //nejasný krok
            header('Location:index.php');
        }
    }

    public static function getCart()
    {
        if(!isset($_SESSION))
        {        
        return 'Košík je prázdný';
        }
        else
        {
         var_dump($_SESSION['products']);
         $query ="
                SELECT `product`.*
                FROM `product`
                WHERE `id` = ?
            ";
            $resultset = db::query($query, array($_SESSION['products']));

            $object = static::fetchObjects($resultset);

            return $object;
        }
    }

}