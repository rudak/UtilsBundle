<?php
namespace Rudak\UtilsBundle;

class Emailer
{
    public static function getEmailAdress($prefix = null)
    {

        return uniqid() . Namer::getLastName() . self::getRandSalt() . '@' . self::getProvider() . '.' . self::getTld();
    }


    private static function getRandSalt()
    {
        return (rand(0, 1) == 1) ? rand(10, 999) : null;
    }


    private static function getProvider()
    {
        $providers = array(
            'wanadoo', 'free', 'stuxnet', 'orange', 'msn', 'hotmail', 'duracell', 'rcm',
            'aol', 'youporn', 'facebook', 'gmail', 'sfr', 'cargon', 'silverstex'
        );
        return $providers[array_rand($providers)];
    }

    private static function getTld()
    {
        $tlds = array(
            'fr', 'com', 'net', 'org', 'biz'
        );
        return $tlds[array_rand($tlds)];
    }
}