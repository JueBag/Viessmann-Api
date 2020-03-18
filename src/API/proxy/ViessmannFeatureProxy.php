<?php
/**
 * Created by PhpStorm.
 * User: thetrueavatar
 * Date: 8/10/18
 * Time: 15:14
 */

namespace Viessmann\API\proxy;

use TomPHP\Siren\Entity;

interface  ViessmannFeatureProxy {

    public function getEntity($resources): Entity;
    public function setRawJsonData($feature, $action, $data);
}