<?php
class Exchange796_Rpc {
    private $_requestor;
    private $authentication;
    
    public function __construct($requestor, $authentication) {
        $this->_requestor = $requestor;
        $this->_authentication = $authentication;
    }

    function curl_get($url,$data = array()) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        if(!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        $rs = curl_exec($curl);
        curl_close($curl);
        return $rs;
    }
    
    public function request($method, $url, $params) {
        try {
            $auth = $this->_authentication->getData();
                    
            $params	= array(
                'apikey'	=> $auth->apiKey,
                'secretkey' => $auth->secretKey,
            );

            ksort($params);
            $sign = "";
            while ($key = key($params)) {
                $sign .= $key . "=" . $params[$key] . "&";
                next($params);
            }
            $sign	= rtrim($sign,"&");
            $sign	= base64_encode(hash_hmac('sha1', $sign, $params['secretkey']));

            $post = array(
                'apikey'	=> $params['apikey'],
                'sign' => $sign,
            );
            $data = $this->curl_get($url,$post);
            
            return $data;
        } catch (Exception $e) {
        
        }
    }
    

}