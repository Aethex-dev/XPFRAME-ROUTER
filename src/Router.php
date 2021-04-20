<?php

/**
 * COPYRIGHT XENONMC 2019 - Current
 *
 * XPFRAME and all of its named materials rights belong to XENONMC
 * You may fork and redistribute materials of this framework as long as proper crediting is given, learn more at https://xenonmc.xyz/resources/XENONMC/XPFRAME/copyright
 *
 * @package XENONMC\XPFRAME\cli
 * @author XENONMC <support@xenonmc.xyz>
 * @website https://xenonmc.xyz
 *
 */

namespace XENONMC\XPFRAME\Router;

class Router {

    /**
     * get url functions
     *
     */

    use \XENONMC\XPFRAME\Router\geturl;

    /**
     * constructor
     *
     */

    function __construct()
    {
        
        echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
