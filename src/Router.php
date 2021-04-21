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

    use \XENONMC\XPFRAME\Router\request\get_url;

    /**
     * constructor
     *
     */

    function __construct()
    {

        var_dump($this->get_url());
    }
}
