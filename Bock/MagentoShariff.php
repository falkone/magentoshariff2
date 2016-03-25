<?php
namespace Falkone\MagentoShariff\Block;

class MagentoShariff extends \Magento\Catalog\Block\Product\View\AbstractView
{
    public function getProductName() {
        return $this->getProduct()->getName();
    }
}