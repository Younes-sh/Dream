<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The dream</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- text Header -->
    <div class ='container'>
        <h1 class="textHead">Convert Money</h1>
        <div class="row">
        <div class='col-sm-12 col-md-6 col-lg-6'>
             
            <form>
                <div class ='display'>
                    <label class = 'insertamount' for="amount">the amount of </label>
                    <input type="text" id="moneyAmount" class='moneyAmount' name="amount" value="<?php if (isset($_GET['amount'])){ echo $_GET['amount']; }; ?>">
                </div>
                    
                 <br><br>
                 <label id="mainLabels">Select currency</label>
                 <br>
                    <div class = 'row'>
                        <label class="secondaryLabels" id="secondaryLabels1" for="currencyFrom">From :</label>
                        <label class="secondaryLabels" id="secondaryLabels2" for="currencyTo">To :</label>

                       <div class="col-sm-12 col-md-12 col-lg-12">
                            <select id="currencyFrom" name="currencyFrom">
                                <option value="EUR" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "EUR") {echo ' selected="selected"';} ?>>Euros (EUR)</option>
                                <option value="USD" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "USD") {echo ' selected="selected"';} ?>>Americain Dollars (USD)</option>
                                <option value="CAD" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "CAD") {echo ' selected="selected"';} ?>>Canadian Dollars (CAD)</option>
                                <option value="AUD" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "AUD") {echo ' selected="selected"';} ?>>Australian Dollars (AUD)</option>
                                <option value="GBP" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "GBP") {echo ' selected="selected"';} ?>>Great-Britain Pounds (GBP)</option>
                                <option value="EGP" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "EGP") {echo ' selected="selected"';} ?>>Egyptian Pounds (EGP)</option>
                                <option value="JPY" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "JPY") {echo ' selected="selected"';} ?>>Japanese Yens (JPY)</option>
                                <option value="CLP" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "CLP") {echo ' selected="selected"';} ?>>Chilean Pesos (CLP)</option>
                                <option value="COP" <?php if (isset($_GET['currencyFrom']) && $_GET['currencyFrom'] == "COP") {echo ' selected="selected"';} ?>>Colobian Pesos (CUP)</option>
                            </select>
                       </div>



                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <select id="currencyTo" name="currencyTo">
                                <option value="EUR" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "EUR") {echo ' selected="selected"';} ?>>Euros (EUR)</option>
                                <option value="USD" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "USD") {echo ' selected="selected"';} ?>>Americain Dollars (USD)</option>
                                <option value="CAD" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "CAD") {echo ' selected="selected"';} ?>>Canadian Dollars (CAD)</option>
                                <option value="AUD" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "AUD") {echo ' selected="selected"';} ?>>Australian Dollars (AUD)</option>
                                <option value="GBP" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "GBP") {echo ' selected="selected"';} ?>>Great-Britain Pounds (GBP)</option>
                                <option value="EGP" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "EGP") {echo ' selected="selected"';} ?>>Egyptian Pounds (EGP)</option>
                                <option value="JPY" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "JPY") {echo ' selected="selected"';} ?>>Japanese Yens (JPY)</option>
                                <option value="CLP" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "CLP") {echo ' selected="selected"';} ?>>Chilean Pesos (CLP)</option>
                                <option value="COP" <?php if (isset($_GET['currencyTo']) && $_GET['currencyTo'] == "COP") {echo ' selected="selected"';} ?>>Colobian Pesos (CUP)</option>
                            </select>
                        </div>
                       
                    </div>
                   

                    <input type="submit" id="convertBtn" name="submit" value="Convert">
                </form>
           
     
         
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div>
                    <p  class='result'> 
                     <?php
                         if (isset($_GET['amount'])){
                             if(is_numeric($_GET['amount'])){
                                 $amountToConvert = $_GET['amount'];
                                 $currencyFrom = $_GET['currencyFrom'];
                                 $currencyTo = $_GET['currencyTo'];
         
                                 $result = $_GET['amount'] * GetCurrency($currencyFrom, $currencyTo);
         
                                 echo "$amountToConvert $currencyFrom → $result $currencyTo";
                             }
                             else{
                                 echo "Please enter the amount";
                             }
                         };
                     ?>
                    </p>
         
                </div>
            </div>
        </div>
          
        <div class="container-icon">
            <ul>
                <a href=""><li>Euro</li></a>
                
                <a href=""><li>USD</li></a>
                
                <a href=""><li>CAD</li></a>
                
                <a href=""><li>AUD</li></a>
                
                <a href=""><li>GBP</li></a>
                
                <a href=""><li>EGP</li></a>
                
                <a href=""><li>JPY</li></a>
                
                <a href=""><li>CLP</li></a>
                
                <a href=""><li>CUP</li></a>
                
            </ul>
       </div>
       
    </div>

    <?php
        function GetCurrency($currency1, $currency2){
            $currencyRate = 0;

            switch ($currency1) {
                case "EUR":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 1; break;
                        case "AUD": $currencyRate = 1.54; break;
                        case "CAD": $currencyRate = 1.35; break;
                        case "GBP": $currencyRate = 0.86; break;
                        case "EGP": $currencyRate = 19.65; break;
                        case "JPY": $currencyRate = 141.74; break;
                        case "USD": $currencyRate = 1.05; break;
                        case "CLP": $currencyRate = 958.48; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "USD": $currencyRate = 1; break;
                case "EUR": $currencyRate = 0.96; break;
                switch ($currency2) {
                    case "CAD": $currencyRate = 1.29; break;
                    case "JPY": $currencyRate = 135.56; break;
                    case "GBP": $currencyRate = 0.83; break;
                    case "EGP": $currencyRate = 18.80; break;
                    case "USD":
                        case "AUD": $currencyRate = 1.47; break;
                        case "CLP": $currencyRate = 916.75; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "CAD":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.74; break;
                        case "AUD": $currencyRate = 1.14; break;
                        case "CAD": $currencyRate = 1; break;
                        case "GBP": $currencyRate = 0.64; break;
                        case "EGP": $currencyRate = 14.56; break;
                        case "JPY": $currencyRate = 104.95; break;
                        case "USD": $currencyRate = 0.77; break;
                        case "CLP": $currencyRate = 709.79; break;
                        default : $currencyRate = 0;
                    }
                break;
                
                case "AUD":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.65; break;
                        case "AUD": $currencyRate = 1; break;
                        case "CAD": $currencyRate = 0.88; break;
                        case "GBP": $currencyRate = 0.56; break;
                        case "EGP": $currencyRate = 12.80; break;
                        case "JPY": $currencyRate = 92.28; break;
                        case "USD": $currencyRate = 0.68; break;
                        case "CLP": $currencyRate = 624.11; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "GBP":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 1.16; break;
                        case "AUD": $currencyRate = 1.78; break;
                        case "CAD": $currencyRate = 1.56; break;
                        case "GBP": $currencyRate = 1; break;
                        case "EGP": $currencyRate = 22.75; break;
                        case "JPY": $currencyRate = 164.03; break;
                        case "USD": $currencyRate = 1.21; break;
                        case "CLP": $currencyRate = 1109.73; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "EGP":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.051; break;
                        case "AUD": $currencyRate = 0.078; break;
                        case "CAD": $currencyRate = 0.069; break;
                        case "GBP": $currencyRate = 0.044; break;
                        case "EGP": $currencyRate = 1; break;
                        case "JPY": $currencyRate = 7.21; break;
                        case "USD": $currencyRate = 0.053; break;
                        case "CLP": $currencyRate = 48.78; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "JPY":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.0071; break;
                        case "AUD": $currencyRate = 0.011; break;
                        case "CAD": $currencyRate = 0.0095; break;
                        case "GBP": $currencyRate = 0.0061; break;
                        case "EGP": $currencyRate = 0.14; break;
                        case "JPY": $currencyRate = 1; break;
                        case "USD": $currencyRate = 0.0074; break;
                        case "CLP": $currencyRate = 6.76; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "CLP":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.001; break;
                        case "AUD": $currencyRate = 0.0016; break;
                        case "CAD": $currencyRate = 0.0014; break;
                        case "GBP": $currencyRate = 0.0009; break;
                        case "EGP": $currencyRate = 0.02; break;
                        case "JPY": $currencyRate = 0.15; break;
                        case "USD": $currencyRate = 0.0011; break;
                        case "CLP": $currencyRate = 1; break;
                        default : $currencyRate = 0;
                    }
                break;

                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.00023; break;
                        case "AUD": $currencyRate = 0.00036; break;
                        case "CAD": $currencyRate = 0.00032; break;
                        case "GBP": $currencyRate = 0.0002; break;
                        case "EGP": $currencyRate = 0.0046; break;
                        case "JPY": $currencyRate = 0.033; break;
                        case "USD": $currencyRate = 0.00024; break;
                        case "CLP": $currencyRate = 0.22; break;
                        default : $currencyRate = 0;
                    }
                break;

                case "MXN":
                    switch ($currency2) {
                        case "EUR": $currencyRate = 0.047; break;
                        case "AUD": $currencyRate = 0.073; break;
                        case "CAD": $currencyRate = 0.064; break;
                        case "GBP": $currencyRate = 0.041; break;
                        case "EGP": $currencyRate = 0.93; break;
                        case "JPY": $currencyRate = 6.71; break;
                        case "USD": $currencyRate = 0.05; break;
                        case "CLP": $currencyRate = 45.40; break;
                        default : $currencyRate = 0;
                    }
                break;

                default : $currencyRate = 0;
            }

            return $currencyRate;
        }
    ?> -->

</body>
</html>