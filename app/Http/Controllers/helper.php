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



    function money($amt)
    {
        return '$ '.number_format($amt);
    }


    function type($tp)
    {
        $val = 'Text';
        if($tp == 1) { $val = 'Audio'; }
        elseif($tp == 2) { $val = 'Video'; }

        return $val;
    }

    function delivery ($tp)
    {
        return ($tp == 1) ? 'Online Delivery' : 'Other Delivery';
    }


