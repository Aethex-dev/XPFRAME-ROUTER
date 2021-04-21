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

namespace XENONMC\XPFRAME\Router\request;

trait get_url
{

    /**
     * get url as an array
     *
     * @return array , array of all the url segments
     *
     */

    public function get_url(): array|null
    {

        // get the full url as a string
        $url['raw'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // split the url into an array
        $url['array'] = explode("/", $url['raw']);

        // shift the array to remove the first useless array key
        array_shift($url['array']);

        // remove any blank url segments
        $url['array'] = array_filter($url['array']);

        // return the url array
        return $url['array'];
    }
}