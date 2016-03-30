<?php
namespace Falkone\MagentoShariff\Block;
use Falkone\MagentoShariff\Block\Common\Request;
use Falkone\MagentoShariff\Block\Services;

class Shariff extends \Magento\Catalog\Block\Product\View\AbstractView
{

    public function getTest()
    {
        //return Request::makeSimpleRequest('https://graph.facebook.com/fql?q=SELECT%20total_count%20FROM%20link_stat%20WHERE%20url=%22http://www.heise.de%22');
        //return Services\Facebook::makeSimpleRequest('https://graph.facebook.com/fql?q=SELECT%20total_count%20FROM%20link_stat%20WHERE%20url=%22http://www.heise.de%22');
        return Services\Facebook::getFacebookCount("http://www.heise.de");
    }

    public function getProductName()
    {
        return $this->getProduct()->getName();
    }
}