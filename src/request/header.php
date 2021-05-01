<?php

namespace XENONMC\XPFRAME\vendor\Router\request;

trait header
{
    
    /**
     * set a request header
     * 
     * @param string $header header name to set
     * @param string|int|float|bool $value value of the header
     */
    public function header(string $header, string|int|float|bool $value)
    {
        // set header
        header(ucfirst($header) . ": " . $value);
    }
}