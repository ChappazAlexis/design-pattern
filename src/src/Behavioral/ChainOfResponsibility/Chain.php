<?php


class AbstractHandler {

    protected ?AbstractHandler $handler = null;

    public function setHandler(?AbstractHandler $handler): AbstractHandler {
            $this->handler = $handler;
            return $this;
    }
    
    function process(HTTPRequest $request):void {
        if($this->handler === null) {
            return;
        }
        
        $this->handler->process($request);
    }
}

class HTTPRequest extends AbstractHandler{

}

class AuthorizationHandler extends AbstractHandler{

}


class JSONHandler extends AbstractHandler{

}


class XMLHandler extends AbstractHandler{
    
}



$request = new HTTPRequest();
$json = new JSONHandler();
$xml = new XMLHandler();
$auth = new AuthorizationHandler();

$json->setHandler($xml);
$xml->setHandler($auth);

JSONHandler: $json->process($request);
    XMLHandler: $this->process($request);
        AuthorizationHandler: $this->AutorizationHandler->process($request);