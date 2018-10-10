<?php

namespace Snowdog\BreadcrumbsFix\Plugin\Catalog\Block\Product;

use Magento\Catalog\Block\Breadcrumbs;
use Magento\Catalog\Block\Product\View as BlockView;

class View
{
    /**
     * @param BlockView $subject
     * @param BlockView $result
     * @return mixed
     */
    public function afterSetLayout(BlockView $subject, $result)
    {
        $subject->getLayout()->createBlock(Breadcrumbs::class);

        return $result;
    }
}
