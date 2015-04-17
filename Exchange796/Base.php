<?php

if(!function_exists('curl_init')) {
    throw new Exception('The 796Xchange Library requires the CURL PHP extension.');
}

require_once (dirname(__FILE__) . '/Exception.php');
require_once (dirname(__FILE__) . '/Requestor.php');
require_once (dirname(__FILE__) . '/Rpc.php');
require_once (dirname(__FILE__) . '/Authentication.php');
require_once (dirname(__FILE__) . '/SimpleApiKeyAuthentication.php');
require_once (dirname(__FILE__) . '/ApiKeyAuthentication.php');

class Exchange796Base {
    const WEB_BASE = 'https://796.com';
    
    private $_rpc;
    private $_authentication;
    
    public function __construct($authentication, $app_id = null, $api_key = null, $secret_key = null) {
        if(is_a($authentication, 'Exchange796_Authentication')) {
            $this->_authentication = $authentication;
        } 
        
        $this->_rpc = new Exchange796_Rpc(new Exchange796_Requestor(), $this->_authentication);
    }
    
    public function setRequestor($requestor) {
        $this->_rpc = new Exchange796_Rpc($requestor, $this->authentication); 
        return $this;
    }
    
    public function get($path, $params = array()) {
		return $this -> _rpc -> request("GET", $path, $params);
	}

	public function post($path, $params = array()) {
		return $this -> _rpc -> request("POST", $path, $params);
	}

	public function delete($path, $params = array()) {
		return $this -> _rpc -> request("DELETE", $path, $params);
	}

	public function put($path, $params = array()) {
		return $this -> _rpc -> request("PUT", $path, $params);
	}
    
}