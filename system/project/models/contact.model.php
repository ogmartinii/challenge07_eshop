<?php

class Contact_Model extends model
{
    protected static $object_class = 'Contact_Object';
    
    public static function insertQuestion($form_array = array())
    {

        // write query
        $parameters = array('email' => null, 'text' => null, 'newsletter' => null);

        if(isset($form_array['email']))
        {
            $parameters['email'] = $form_array['email'];
        }
        if(isset($form_array['text']))
        {
            $parameters['text'] = $form_array['text'];
        }
        if(isset($form_array['newsletter']))
        {
            $parameters['newsletter'] = $form_array['newsletter'];
        }

        $query = "
            INSERT INTO `questions` (email, text_input, newsletter)
            VALUES (?, ?, ?);
        ";

        // run query
        db::query($query, $form_array);
    }
    }
