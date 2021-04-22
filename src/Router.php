<?php

namespace XENONMC\XPFRAME\Router;
use XENONMC\XPFRAME\Router\request\get_url;

class Router {

    /**
     * get url functions
     */
    use get_url;

    /**
     * class used for routing a client with more ease with functions such for getting the url, redirecting a client, modifying headers and more
     */
    function __construct()
    {

        var_dump($this->get_url());
    }
}
