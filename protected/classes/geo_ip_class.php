<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.04.18
 * Time: 10:14
 */
class geo_api_class extends base
{
    /**
     * @param $ip
     * @return mixed
     */

    public function getCountry($ip)
    {
        require_once PROTECTED_DIR . 'vendor/autoload.php';
        $reader = new Reader(PROTECTED_DIR . 'data/geo_ip/GeoLite2-Country.mmdb');
        $geo = $reader->country($_SERVER['REMOTE_ADDR']);
        return $geo->country->isoCode;
    }

    /**
     * @param $country_code
     * @return bool
     */
    public function is_country($country_code)
    {
        return $this->detect() == strtoupper($country_code);
    }
}