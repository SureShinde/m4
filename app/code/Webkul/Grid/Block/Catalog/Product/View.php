<?php

namespace Webkul\Grid\Block\Catalog\Product;

use Magento\Catalog\Api\ProductRepositoryInterface;

class View extends \Magento\Catalog\Block\Product\View
{
    public function __construct(Context $context,
                                \Magento\Framework\Url\EncoderInterface $urlEncoder,
                                \Magento\Framework\Json\EncoderInterface $jsonEncoder,
                                \Magento\Framework\Stdlib\StringUtils $string,
                                \Magento\Catalog\Helper\Product $productHelper,
                                \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
                                \Magento\Framework\Locale\FormatInterface $localeFormat,
                                \Magento\Customer\Model\Session $customerSession,
                                ProductRepositoryInterface $productRepository,
                                \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
                                array $data = [])
    {
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $data);
    }

    /**
     * Retrieve current product model
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {
//        echo 'child';exit;
        // logging to test override
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug('Block Override Test');

        if (!$this->_coreRegistry->registry('product') && $this->getProductId()) {
            $product = $this->productRepository->getById($this->getProductId());
            $this->_coreRegistry->register('product', $product);
        }
        return $this->_coreRegistry->registry('product');
    }

    /**
     * Return wishlist widget options
     *
     * @return array
     * @deprecated 101.0.1
     */
    public function getWishlistOptions()
    {
        $d = parent::getWishlistOptions();
        $d['name'] = parent::getProduct()->getName();
        return $d;
    }
}
?>
