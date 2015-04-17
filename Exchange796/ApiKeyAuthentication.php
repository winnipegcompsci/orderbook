<?php 

class Exchange796_ApiKeyAuthentication extends Exchange796_Authentication
{
    private $_appId;
    private $_apiKey;
    private $_secretKey;
    
    public function __construct($appId, $apiKey, $secretKey)
    {
        $this->_appId = $appId;
        $this->_apiKey = $apiKey;
        $this->_secretKey = $secretKey;
    }
    
    public function getData() 
    {
        $data = new stdClass();
        
        $data->appId = $this->_appId;
        $data->apiKey = $this->_apiKey;
        $data->secretKey = $this->_secretKey;
        
        return $data;
    }
    
}