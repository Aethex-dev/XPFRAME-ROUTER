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
        // get the full url as an array
        $url['raw'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url['array'] = explode("/", $url['raw']);

        // shift the array to remove the first useless array key and remove blank values
        array_shift($url['array']);
        $url['array'] = array_filter($url['array']);

        // return the url array
        return $url['array'];
    }
}