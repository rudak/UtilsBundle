<?php
/**
 * Created by PhpStorm.
 * User: Rudak
 * Date: 29/12/2014
 * Time: 12:49
 */

namespace Rudak\UtilsBundle;

use FOS\UserBundle\Util\CanonicalizerInterface;
use Rudak\UtilsBundle\Slug;

class CustomCanonicalizer implements CanonicalizerInterface
{
    public function canonicalize($string)
    {
        return Slug::slugit($string);
    }
}