<?php
/**
 * Created by PhpStorm.
 * User: Rudak
 * Date: 14/12/2014
 * Time: 21:04
 */

namespace Rudak\UtilsBundle;


class CityHelper
{

    public static $returnedCityList = array();


    public static function getCity()
    {

        $cities = self::getCitiesList();
        shuffle($cities);
        do {
            $city = $cities[array_rand($cities)];
        } while (self::alreadyReturned($city));

        self::addReturnedCity($city);
        return $city;
    }

    private static function getCitiesList()
    {
        return array(
            'paris', 'bordeaux', 'lyon', 'toulouse', 'Nice', 'Strasbourg',
            'nantes', 'le Havre', 'reims', 'rennes', 'marthon', 'poitiers',
            'niort', 'barbezieux', 'royan', 'cognac', 'jarnac', 'clichy',
            'londres', 'manchester', 'la rochefoucauld', 'la rochelle',
            'piégut', 'st sornin', 'blayes', 'soyaux', 'tourcoing', 'dunkerque',
            'st jean de luz', 'orthez', 'Pau', 'st amant les eaux', 'chatellerault',
            'oloron', 'dax', 'st etienne', 'toulon', 'besancon', 'caen', 'brive',
            'bayonne', 'biaritz', 'chamonix', 'cahors', 'ajacio', 'beziers');
    }

    private static function addReturnedCity($city)
    {
        self::$returnedCityList[] = $city;
    }

    private static function initDejaDit()
    {
        self::$returnedCityList = array();
    }

    private static function alreadyReturned($city)
    {
        if (count(self::$returnedCityList) == count(self::getCitiesList())) {
            self::initDejaDit();
        }
        if (in_array($city, self::$returnedCityList)) {
            return true;
        } else {
            return false;
        }
    }
}