<?php

class Category_Model extends model
{
    protected static $object_class = 'Category_Object';

    public static function getTopCategories()
    {
        // prepare the query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE 1
            ";
        // run the query
        $resultset = db::query($query);

        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    public static function getSubcategories($parent_category_id)
    {
        // prepare the query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`parent_id` = ?
            ";
        // run the query
        $resultset = db::query($query, array($parent_category_id));

        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;    
    }

    // retrieves one object of the class Category_Object base on its id column
    public static function retrieveById($id)
    {
        $query ="
            SELECT `category`.*
            FROM `category`
            WHERE `id` = ?
        ";
        $resultset = db::query($query, array($id));

        $object = static::fetchObject($resultset);

        return $object;
    }

}