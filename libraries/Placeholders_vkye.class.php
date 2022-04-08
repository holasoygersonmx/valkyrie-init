<?php

defined('_EXEC') or die;

class Placeholders_vkye
{
    private $buffer;
    private $format;

    public function __construct( $buffer )
    {
        $this->buffer = $buffer;
        $this->format = new Format();
    }

    public function run()
    {
        return $this->buffer;
    }
}
