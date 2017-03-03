<?php

class Contact_Object
{   
    // these get written out of db automaticaly
    /*public $id = null;
    public $parent_id = null;
    public $uri = 'null';
    public $name = null;
    public $description = null; */

    public function getUrl()
    {
        return url::to('contact', array('id' => $this->id));
    }
}