<?php

namespace XENONMC\XPFRAME\vendor\Router\request;

class Url
{
    /**
     * @var int http response code 
     */
    public int $response_code;
    
    /**
     * @var string raw final url
     */
    public string $raw_url;
    
    /**
     * @var array url
     */
    public array $url;
    
    /**
     * used for building url objects supported by the router class
     * 
     * @param array $url array of all the url params
     */
    public function __construct(array $url)
    {
        // store url
        $this->url = $url;
        
        // build full raw url
        $url_raw = "";
        $url_index = 0;
        foreach ($url as $url_segment) {
            $url_raw = $url_raw . $url_segment . "/"; 
        }
        
        // clean
        unset($url_segment);
        unset($url_index);
        
        // store url raw
        $this->raw_url = $url_raw;
    }
}