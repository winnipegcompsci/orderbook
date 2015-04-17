<?php 

class Exchange796_Requestor
{
    public function doCurlRequest($curl)
    {
        $response = curl_exec($curl);
        if($response === false) {
            $error = curl_errno($curl);
            $message = curl_error($curl);
            curl_close($curl);
            throw new Exchange796_Exception("Network Error: " . $message . " (" . $error . ")");
        }
        
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if($statusCode != 200) {
            throw new Exchange796_Exception("Status Code " . $statusCode, $statusCode, $response);
        }
        
        return array("statusCode" => $statusCode, "body" => $response);
    }
}