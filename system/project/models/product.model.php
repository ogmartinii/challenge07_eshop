<?php

class Product_Model extends model
{
    protected static $object_class = 'Product_Object';

    public static function getTopProducts()
    {
        // write query
        $query = "
            SELECT `product`.*
            FROM `product`
            WHERE `product`.`is_top` = 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    public static function getTop3Products()
    {
        // write query
        $query = "
            SELECT `product`.*
            FROM `product`
            WHERE `product`.`is_top` = 1
            LIMIT 3
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    public static function retrieveById($id)
    {
        $query ="
            SELECT `product`.*
            FROM `product`
            WHERE `id` = ?
        ";
        $resultset = db::query($query, array($id));

        $object = static::fetchObject($resultset);

        return $object;
    }

    public static function retrieveByCategory($id)
    {
        $query ="
            SELECT `product`.*
            FROM `product`
            WHERE `category_id` = ?
        ";
        $resultset = db::query($query, array($id));

        $object = static::fetchObjects($resultset);

        return $object;
    }

    public static function getAllProducts()
    {
        $query ="
            SELECT `product`.*
            FROM `product`
            WHERE 1
        ";
        $resultset = db::query($query);

        $object = static::fetchObjects($resultset);

        return $object;
    }

}