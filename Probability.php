<?php
/**
 * Created by PhpStorm.
 * User: Rudak
 * Date: 15/12/2014
 * Time: 11:17
 */

namespace Rudak\UtilsBundle;


class Probability
{


    public static function getBool($percent, $precision = 1)
    {
        $rand = rand(0, 100 * $precision);
        return ($rand <= $percent * $precision);
    }


    public static function getMultipleValues($options, $defaultValue = null)
    {
        $randPercent = rand(0, 100);

        foreach ($options as $probability => $value) {
            $detail_prob = explode("-", $probability);

            if ((isset($detail_prob[1])) && ($detail_prob[0] <= $randPercent) && ($detail_prob[1] >= $randPercent)) {
                return $value;
            } elseif ($probability === $randPercent) {
                return $value;
            }
        }

        return $defaultValue;
    }
}