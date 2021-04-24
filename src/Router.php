<?php

namespace XENONMC\XPFRAME\Router;
use XENONMC\XPFRAME\Router\request\get_url;
use XENONMC\XPFRAME\Router\request\Url;
use XENONMC\XPFRAME\Router\request\build_url;
use XENONMC\XPFRAME\Router\request\header;
use XENONMC\XPFRAME\Router\request\methods;

class Router {
    
    /**
     * url builder
     */
    use build_url;
    
    /**
     * set header
     */
    use header;
    
    /**
     * request method events
     */
    use methods;

    /**
     * get url functions
     */
    use get_url;

    /**
     * class used for routing a client with more ease with functions such for getting the url, redirecting a client, modifying headers and more
     */
    public function __construct()
    {

        
    }
    
    /**
     * redirect the client application
     * 
     * @param array $url url array
     * @param int $response_code http response code
     */
    public function redirect(array $url, int $response_code = 200) 
    {
        // build url and set response code
        $url = $this->build_url($url, $response_code);
        http_response_code($url->response_code);
        
        // redirect
        $this->header("location", $url->raw_url);
    }
    
}
