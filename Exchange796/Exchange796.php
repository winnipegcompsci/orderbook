<?php
require_once (dirname(__FILE__) . '/Base.php');


class Exchange796 extends Exchange796Base {
    function __construct($authentication) {
        parent::__construct($authentication, null, null);
    }

    // User 
    public function user_get_info($params = null) {
        return $this->get("/v2/user/get_info", $params);
    }
    
    public function user_get_balance($params = null) {
        return $this->get("/v2/user/get_balance", $params);
    }
    
    public function user_get_assets($params = null) {
        return $this->get("/v2/user/get_assets", $params);
    }

    // BTC Weekly Futures (USD)
    public function btc_weekly_orders($params = null) {
        return $this->get("/v2/weeklyfutures/orders", $params);
    }
    
    public function btc_weekly_records($params = null) {
        return $this->get("/v2/weeklyfutures/records", $params);
    }
    
    public function btc_weekly_position($params = null) {
        return $this->get("/v2/weeklyfutures/position", $params);
    }
    
    public function btc_weekly_open_buy($params = null) {
        return $this->post("/v2/weeklyfutures/open_buy", $params);
    }
    
    public function btc_weekly_close_buy($params = null) {
        return $this->post("/v2/weeklyfutures/close_buy", $params);
    }
    
    public function btc_weekly_open_sell($params = null) {
        return $this->post("/v2/weeklyfutures/open_sell", $params);
    }
    
    public function btc_weekly_close_sell($params = null) {
        return $this->post("/v2/weeklyfutures/close_sell", $params);
    }
    
    public function btc_weekly_cancel_order($params = null) {
        return $this->post("/v2/weeklyfutures/cancel_order", $params);
    }
    
    public function btc_weekly_cancel_all($params = null) {
        return $this->post("/v2/weeklyfutures/cancel_all", $params);
    }
    
    // LTC WEekly Futures (USD)
    public function ltc_weekly_orders($params = null) {
        return $this->get("/v2/ltcfutures/orders", $params);
    }
    
    public function ltc_weekly_records($params = null) {
        return $this->get("/v2/ltcfutures/records", $params);
    }
    
    public function ltc_weekly_position($params = null) {
        return $this->get("/v2/ltcfutures/position", $params);
    }
    
    public function ltc_weekly_open_buy($params = null) {
        return $this->post("/v2/ltcfutures/open_buy", $params);
    }
    
    public function ltc_weekly_close_buy($params = null) {
        return $this->post("/v2/ltcfutures/close_buy", $params);
    }
    
    public function ltc_weekly_open_sell($params = null) {
        return $this->post("/v2/ltcfutures/open_sell", $params);
    }
    
    public function ltc_weekly_close_sell($params = null) {
        return $this->post("/v2/ltcfutures/close_sell", $params);
    }
    
    public function ltc_weekly_cancel_order($params = null) {
        return $this->post("/v2/ltcfutures/cancel_order", $params);
    }
    
    public function ltc_weekly_cancel_all($params = null) {
        return $this->post("/v2/ltcfutures/cancell_all");
    }
}

