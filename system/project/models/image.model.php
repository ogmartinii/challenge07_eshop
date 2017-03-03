<?php

class Image_Model extends model
{
    protected static $object_class = 'Product_Object';
    
    public static function getImgName($id)
    {
        $query ="
            SELECT `product_image`.*
            FROM `product_image`
            WHERE `product_id` = ?
        ";
        $resultset = db::query($query, array($id));

        $object = static::fetchObjects($resultset);

        return $object;
    }
}