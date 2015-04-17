<?php 
require_once (dirname(__FILE__) . '/Exchange796/Exchange796.php');

//All API 2.0 interfaces are matched with this method.
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

$appid = "11378"; 
$apikey = "9ff4f593-0fd9-aaf9-b09a-8e2b-6b2f449c";
$secretkey = "QVx4ZB572LlRqtl9eQzGxm5DEhvZFM0G5JIOrUi3QPQNlinzGoVHfhIg77U9";

$params	= array(
    'apikey'	=> $apikey,
    'secretkey' => $secretkey,
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
    'apikey'	=> $apikey,
    'sign'	=> $sign,
);


////////////////////////
echo "<h1> 796.com::: </h1>";
echo "<table border='1px solid'; width='100%'>";
    
echo "<tr>";
echo "<th>Action</th>";
echo "<th>Request Parameters</th>";
echo "<th>Response</th>";
echo "</tr>";


$url   = 'https://www.796.com/v2/user/get_info';
$data = curl_get($url,$post );
echo "<tr>";
echo "<td>User->Get Info</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";


$url = 'https://796.com/v2/user/get_balance';
$data = curl_get($url, $post);  
echo "<tr>";
echo "<td>User->Get Balance</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/user/get_assets';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>User->Get Assets</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/orders';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Orders</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/records';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Records </td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/position';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Position</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/open_buy';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Open Buy</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/close_buy';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Close Buy </td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/open_sell';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Open Sell</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/close_sell';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures -> Close Sell</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'http://796.com/v2/weeklyfutures/cancel_order';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures - Cancel Order</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/weeklyfutures/cancel_all';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>BTC Weekly Futures - Cancel All Orders</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/orders';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - View Orders </td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/records';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Records</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/position';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Position</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/open_buy';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Open Buy</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/close_buy';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Close Buy</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/open_sell';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Open Sell</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/close_sell';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Close Sell</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/cancel_order';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Cancel Order</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

$url = 'https://796.com/v2/ltcfutures/cancel_all';
$data = curl_get($url, $post);
echo "<tr>";
echo "<td>LTC Weekly Futures - Cancel All Orders</td>";
echo "<td><pre>" . print_r($post, TRUE) .  "</pre></td>";
echo "<td><pre>" . print_r($data, TRUE) . "</pre></td>";
echo "</tr>";

echo "</table>";
////////////////////////
?>
