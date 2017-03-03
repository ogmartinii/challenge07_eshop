<?php

class Image_Object
{
    public function getUrl()
    {
        return url::to('image', array(
            'id' => $this->id
        ));
    }

}