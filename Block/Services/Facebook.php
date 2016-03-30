<?php

namespace Falkone\MagentoShariff\Block\Services;
use Falkone\MagentoShariff\Block\Common;

class Facebook extends Common\Request
{
    public static function makeJsonRequest($url)
    {
        $queryUrl = 'https://graph.facebook.com/fql?q=SELECT%20total_count%20FROM%20link_stat%20WHERE%20url=%22'.$url.'%22';
        $json = Common\Request::makeSimpleRequest($queryUrl);
        return $json;
    }

    public static function getFacebookCount($url)
    {
        try {
            $json = Facebook::makeJsonRequest($url);
            $data = json_decode($json, true);
            if (isset($data['data']) && isset($data['data'][0]) && isset($data['data'][0]['total_count'])) {
                return $data['data'][0]['total_count'];
            }
            return null;
        }
        catch (Exception $ex) { }
        return null;
    }
}