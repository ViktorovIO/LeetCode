<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $lowestPriceForBuy = $prices[0];
        $maxPriceForSell = 0;
        $pricesCount = count($prices);
        if ($pricesCount === 0) {
            return 0;
        }

        for ($i = 0; $i < $pricesCount; $i++) {
            if ($prices[$i] < $lowestPriceForBuy) {
                $lowestPriceForBuy = $prices[$i];
                continue;
            }

            if ($prices[$i] > $lowestPriceForBuy && ($prices[$i] - $lowestPriceForBuy) > $maxPriceForSell) {
                $maxPriceForSell = $prices[$i] - $lowestPriceForBuy;
            }
        }

        return $maxPriceForSell;
    }
}
