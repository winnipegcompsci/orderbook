<?php

require_once (dirname(__FILE__) . '/OKCoin/OKCoin.php');

const API_KEY = "a3df6a8b-2799-4988-9336-e4ce74b88408";
const SECRET_KEY = "C890A97000A0A5102CF6462F4F7BDCC1";

try {
    echo "<h1> OKCoin::: </h1>";

	//OKCoin DEMO 
	$client = new OKCoin(new OKCoin_ApiKeyAuthentication(API_KEY, SECRET_KEY));
	
    
    echo "<table border='1px solid'; width='100%'>";
    
    echo "<tr>";
    echo "<th>Action</th>";
    echo "<th>Request Parameters</th>";
    echo "<th>Response</th>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd');
	$result = $client -> tickerApi($params);
    
    echo "<tr>";
    echo "<td>Price Ticker</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'size' => 5);
	$result = $client -> depthApi($params);
    
    echo "<tr>";
    echo "<td>Get Market Depth</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
	echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd');
	$result = $client -> tradesApi($params);
    
    echo "<tr>";
    echo "<td>Get Trade History</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
	echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'type' => '1day', 'size' => 5);
	$result = $client -> klineDataApi($params);
    echo "<tr>";
    echo "<td>Get BTC/LTC Candlestick Data</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY);
	$result = $client -> userinfoApi($params);
    
    echo "<tr>";
    echo "<td>Get User Account Info</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'type' => 'buy', 'price' => 1, 'amount' => 1);
	$result = $client -> tradeApi($params);
    
    echo "<tr>";
    echo "<td>Place Orders</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
    // $params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'type' => 'buy', 'orders_data' => "[;price:3,amount:5,type:'sell'" . var_dump($result) . ";,;price:3,amount:3,type:'buy'var_dump($result);,;price:3,amount:3var_dump($result);]");
	// $result = $client -> batchTradeApi($params);
    
    // echo "<tr>";
    // echo "<td>Batch Trade</td>";
    // echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    // echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    // echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'order_id' => '546,456,998,65656');
	$result = $client -> cancelOrderApi($params);
    
    echo "<tr>";
    echo "<td>Cancel Orders</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'order_id' => -1);
	$result = $client -> orderInfoApi($params);
    
    echo "<tr>";
    echo "<td>Get Order Info</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'status' => 0, 'current_page' => '1', 'page_length' => '1');
	$result = $client -> ordersInfoApi($params);
    
    echo "<tr>";
    echo "<td>Get Order Info (2)</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'type' => 0, 'order_id' => '123,123,555');
	$result = $client -> orderHistoryApi($params);
    
    echo "<tr>";
    echo "<td>Order History</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'chargefee' => '0.0001', 'trade_pwd' => '123456', 'withdraw_address' => '405sdsdsdsdsdsds', 'withdraw_amount' => 1);
	$result = $client -> withdrawApi($params);
    
    echo "<tr>";
    echo "<td>BTC/LTC Withdrawal</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'withdraw_id' => 301);
	$result = $client -> cancelWithdrawApi($params);
    
    echo "<tr>";
    echo "<td>Withdrawal Cancellation Request</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'contract_type' => 'this_week');
	$result = $client -> tickerFutureApi($params);
    
    echo "<tr>";
    echo "<td> Get OKCoin Futures Price </td>"; 
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'contract_type' => 'this_week', 'size' => 5);
	$result = $client -> depthFutureApi($params);
    echo "<tr>";
    echo "<td>Get OKCoin Future Market Depth</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";    

	$params = array('symbol' => 'btc_usd', 'contract_type' => 'this_week');
	$result = $client -> tradesFutureApi($params);
    echo "<tr>";
    echo "<td>Get Futures Trade History</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$result = $client -> getUSD2CNYRateFutureApi(null);
    
    echo "<tr>";
    echo "<td>USD-to-CNY Exchange Rate</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd');
	$result = $client -> getEstimatedPriceFutureApi($params);
    
    echo "<tr>";
    echo "<td>Get Estimated Delivery Price";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'date' => '2014-10-31', 'since' => '0');
	$result = $client -> futureTradesHistoryFutureApi($params);
    
    echo "<tr>";
    echo "<td>Get OKCoin Futures Trade History</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('symbol' => 'btc_usd', 'type' => '1day', 'contract_type' => 'this_week', 'size' => 5);
	$result = $client -> getFutureIndexFutureApi($params);
    
    echo "<tr>";
    echo "<td>Futures Index</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY);
	$result = $client -> userinfoFutureApi($params);
    echo "<tr>";
    echo "<td>User Info Futures API";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'contract_type' => 'this_week');
	$result = $client -> positionFutureApi($params);
    
    echo "<tr>";
    echo "<td>Get User Position</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'contract_type' => 'this_week', 'price' => '400', 'amount' => '1', 'type' => '1', 'lever_rate' => '10');
	$result = $client -> tradeFutureApi($params);
    
    echo "<tr>";
    echo "<td>Place Orders</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'orders_data' => '[;price:5,amount:2,type:1,match_price:1var_dump($result);,;price:2,amount:3,type:1,match_price:1var_dump($result);]', 'symbol' => 'btc_usd', 'contract_type' => 'this_week', 'lever_rate' => '10');
	$result = $client -> batchTradeFutureApi($params);
    
    echo "<tr>";
    echo "<td>Batch Trade</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'order_id' => '173126', 'contract_type' => 'this_week');
	$result = $client -> getOrderFutureApi($params);
    
    echo "<tr>";
    echo "<td>OKCoin Futures Account Info (Cross-Margin Mode)</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'order_id' => '173126', 'contract_type' => 'this_week');
	$result = $client -> cancelFutureApi($params);
    
    echo "<tr>";
    echo "<td>Cancel Future Orders</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
	$params = array('api_key' => API_KEY);
	$result = $client -> fixUserinfoFutureApi($params);
    echo "<tr>";
    echo "<td>Fix User Info Futures (Fixed Margin)";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
	$params = array('api_key' => API_KEY, 'symbol' => 'btc_usd', 'contract_type' => 'this_week', 'type' => 1);
	$result = $client -> singleBondPositionFutureApi($params);
    
    echo "<tr>";
    echo "<td>Single User Single-Bond Position Futures API:</td>";
    echo "<td><pre>" . print_r($params, TRUE) . "</pre></td>";
    echo "<td><pre>" . print_r($result, TRUE) . "</pre></td>";
    echo "</tr>";
    
    echo "</table>";
    
} catch (Exception $e) {
	$msg = $e -> getMessage();
	error_log($msg);
}
