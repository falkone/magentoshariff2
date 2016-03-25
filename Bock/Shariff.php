<?php
namespace Falkone\MagentoShariff\Block;

class Shariff extends \Magento\Catalog\Block\Product\View\AbstractView
{

    public function getProductName()
    {
        return $this->getProduct()->getName();
    }
}