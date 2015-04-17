796.com API Function List:

BTC Weekly Futures: 
-------------------------------------------------------------------------------
    BTC Weekly Futures (USD) API:
        - Ticker:
            Takes: type=weekly;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
        - Depth:
            Takes: type=weekly;
            Success: {"asks":[["887.00","30"],["875.00","0.4"],...],"bids":[["758.09","0.1"],["758.08","6.16"],...]}
        - Trades:
            Takes: type=weekly;
            Success: [{"date":1387529350,"price":"761.50","amount":"1.14","tid":"84964","type":"sell"},...]
        - Settlements:
            Takes: type=weekly;
            Success: [{{"id":"1","date":"2015-03-14","price":"285.03","vol":"11200.70","yk":"0","rate":"0.0000","sir":"303.47573721 "}]
   
    LTC Weekly Futures (USD) API:
        - Ticker:
            Takes: type=ltc;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
        - Depth:
            Takes: type=ltc;
            Success: {"asks":[["887.00","30"],["875.00","0.4"],...],"bids":[["758.09","0.1"],["758.08","6.16"],...]}
        - Trades:
            Takes: type=ltc;
            Success: [{"date":1387529350,"price":"761.50","amount":"1.14","tid":"84964","type":"sell"},...]
        - Settlements:
            Takes: type=ltc"
            Success:[{{"id":"1","date":"2015-03-14","price":"285.03","vol":"11200.70","yk":"0","rate":"0.0000","sir":"303.47573721 "}]
    
BTC / LTC Spot API:
-------------------------------------------------------------------------------
    796Xchange-MRI API
        - Ticker:
            Takes: type=mri
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
        - Depth:
            Takes: type=mri
            Success: {"asks":[["887.00","30"],["875.00","0.4"],...],"bids":[["758.09","0.1"],["758.08","6.16"],...]}
        - Trades:
            Takes: type=mri
            Success: [{"date":1387529350,"price":"761.50","amount":"1.14","tid":"84964","type":"sell"},...]
        - Settlements:
            Takes: type=mri
            Success:[{{"id":"1","date":"2015-03-14","price":"285.03","vol":"11200.70","yk":"0","rate":"0.0000","sir":"303.47573721 "}]
    
    ASICMINER-796 API
        - Ticker:
            Takes: type=asicminer;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
        - Depth:
            Takes: type=asicminer;
            Success: {"asks":[["887.00","30"],["875.00","0.4"],...],"bids":[["758.09","0.1"],["758.08","6.16"],...]}
        - Trades:
            Takes: type=asicminer;
            Success: [{"date":1387529350,"price":"761.50","amount":"1.14","tid":"84964","type":"sell"},...]
        - Settlements:
            Takes: type=asicminer;
            Success:[{{"id":"1","date":"2015-03-14","price":"285.03","vol":"11200.70","yk":"0","rate":"0.0000","sir":"303.47573721 "}]
        
    RSM API
        - Ticker:
            Takes: type=rsm;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
            
        - Depth:
            Takes: type=rsm;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}            
        
        - Trades:
            Takes: type=rsm;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
            
        - Settlements:
            Takes: type=rsm;
            Success: {"ticker":{"high":"790.00","low":"612.02","buy":"758.08","sell":"764.00","last":"758.00","vol":"12742.81"}}
        
Trade API:
-------------------------------------------------------------------------------
    User:
        - Get Info:
        - Get Balance:
        - Get Assets:
        
    BTC Weekly Futures:
        - Orders
        - Records
        - Position
        - Open Buy
        - Close Buy 
        - Open Sell
        - Close Sell
        - Cancel Order
        - Cancel All
    
    LTC Weekly Futures:
        - Orders
        - Records
        - Position
        - Open Buy
        - Close Buy 
        - Open Sell
        - Close Sell
        - Cancel Order
        - Cancel All