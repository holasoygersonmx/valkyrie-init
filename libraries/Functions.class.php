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
}
