<?php


namespace App\CustomStuff;

use Illuminate\Support\Facades\Http;

class GeoLocate
{
    public static function locate(string $ip)
    {
        try{
            $resp = Http::get('http://ip-api.com/json/'.$ip);
            $position = $resp->json();
            if($position['status'] != 'success'){
                $position = null;
            }
        }
        catch(\Exception $e){
            $position = null;
        }

        return $ret = $position;
    }
}
