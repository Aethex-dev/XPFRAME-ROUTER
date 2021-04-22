<?php

namespace XENONMC\XPFRAME\Router\request;

trait get_url
{
    /**
     * get url as an array
     * 
     * @return array array of all the url segments
     */
    public function get_url(): array
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