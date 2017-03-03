<?php

class Order_Object
{
    public function getUrl()
    {
        return url::to('order', array(
            'id' => $this->id
        ));
    }

}