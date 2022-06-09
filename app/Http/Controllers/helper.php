<?php
    function do_er($errors)
    {
        $string = '';
        foreach($errors as $er)
        {
            $string .= $er.'<br>';
        }
        return $string;
    }

    function md($date)
    {
        return date('j M ,Y', strtotime($date));
    }
