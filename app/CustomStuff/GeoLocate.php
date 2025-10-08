<?php


namespace App\CustomStuff;

use Illuminate\Support\Facades\Http;

class GeoLocate
{
    public static function locate(string $ip)
    {
        $resp = Http::get('http://ip-api.com/json/'.'185.255.128.54');
        $position = $resp->json();
        if($position['status'] != 'success'){
            $position = null;
        }
        return $ret = $position;
    }
}
