<?php

namespace XENONMC\XPFRAME\vendor\Router\request;

trait methods
{

    /**
     * on get request
     *
     * @param array $url url array to trigger this event on
     * @param int $response_code response code to set on this request being called
     * @param bool $ignoreLastParamIsset ignore and trigger event even if the last url parameter is not set NOTE: the last url param must be a parameter
     * @param callable|null $callback function to trigger on this get event
     * @return bool if this get request as triggered
     */
    public function on_get(array $url, int $response_code = 200, bool $ignoreLastParamIsset = false, callable|null $callback = null): bool
    {
        // get urls as an array
        $url = $this->build_url($url, $response_code)->url;
        $request_url = $this->build_url($this->get_url())->url;

        // check if this event should be triggered
        $url_match_req = count($url);
        $url_match_count = 0;
        $url_match_index = 0;
        $url_params = array();
        foreach ($url as $url_segment) {
            if (!isset($request_url[$url_match_index])) {
                $request_url[$url_match_index] = "";
            }
            if ($url_match_req != count($request_url)) {
                break;
            }
            if ($url_segment == $request_url[$url_match_index]) {
                $url_match_count++;
            } else {
                if ($ignoreLastParamIsset == true) {
                    if (!isset($url[$url_match_req - 1])) {
                        $url_match_count++;
                        break;
                    }
                }
                if (preg_match("~{(.+?)}~", $url_segment)) {
                    $url_match_count++;
                    preg_replace_callback_array(array(
                        "~{(.+?)}~" => function ($match) use (&$url_params, &$request_url, &$url_match_index) {
                            array_push($url_params, $request_url[$url_match_index]);
                    }), $url_segment);
                }
            }
            $url_match_index++;
        }

        // check if even should be called then run callback
        if ($url_match_req == $url_match_count) {
            $callback(...$url_params);
        }
        return false;
    }
}