<?php

namespace XENONMC\XPFRAME\vendor\Router\request;

trait build_url
{
    
    /**
     * build a url
     * 
     * @param array $url
     * @param int response code
     * @return Url url object
     */
    public function build_url(array $url, int $response_code = 200): Url
    {
        // build new url and set response header code
        $url = new Url($url);
        $url->response_code = http_response_code($response_code);
        
        // return url object
        return $url;
    }
}