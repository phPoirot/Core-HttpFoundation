<?php
namespace Module\HttpFoundation\Response;

use Poirot\Http\HttpResponse;


class ResponseRedirect
    extends HttpResponse
{
    function __construct($uri, array $headers = array())
    {
        $headers['Location'] = (string) $uri;
        $this->setHeaders($headers);
    }
}
