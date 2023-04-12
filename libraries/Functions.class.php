<?php

defined('_EXEC') or die;

class Functions
{
    public function __construct()
    {

    }

    public static function validate_email($email, $empty = false)
    {
        $break = ($empty == true AND !isset($email) OR $empty == true AND empty($email)) ? true : false;
        $check = ($break == true) ? true : ((filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false);

        return $check;
    }

    public static function generate_random_string($option = 'allcase', $length = 8)
    {
        $security = new Security;

        if ($option == 'allcase')
            return $security->random_string($length);
        else if ($option == 'uppercase')
            return strtoupper($security->random_string($length));
        else if ($option == 'lowercase')
            return strtolower($security->random_string($length));
    }
}
