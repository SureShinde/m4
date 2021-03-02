<?php
/** @package    mage2...*/

namespace Anjulata\RestApi\Model;

use Anjulata\RestApi\Api\ConfigurableProductRepositoryInterface;
use Anjulata\RestApi\Api\ProductRepositoryInterface;
use Anjulata\RestApi\Api\Data\ProductInterface;
//use Anjulata\RestApi\Helper\ProductHelper;
use Magento\Catalog\Api\Data\ProductInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Anjulata Api to getProduct by Id
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var ProductInterfaceFactory
     */
    private $productInterfaceFactory;
    /**
     * @var ProductHelper
     */
    //private $productHelper;
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;
    /**
     * ProductRepository constructor
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
     * @param ProductInterfaceFactory $productInterfaceFactory,
     *
     */
    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
    ProductInterfaceFactory $productInterfaceFactory){
        $this->productInterfaceFactory = $productInterfaceFactory;
        //$this->productHelper = $productHelper;
        $this->productRepository = $productRepository;
    }
    /**
     * Get Product By its Id
     *
     * @param int $id
     * @retrun \Anjulata\RestApi\Api\Data\ProductInterface
     * @throw NoSuchEntityException
     */
    public function getProductById($id)
    {
        /** @var \Anjulata\RestApi\Api\Data\ProductInterface */
        $productInterface = $this->productInterfaceFactory->create();
        try {
            /** @var \Magento\Catalog\Api\Data\ProductInterface $product */
            $product = $this->productRepository->getById($id);
            $productInterface->setId($product->getId());
            $productInterface->setSku($product->getSku());
            $productInterface->setName($product->getName());
            //$productInterface->setDescription(description: $product->getDescription() ? $product->getDescription() : "");
            //$productInterface->setPrice($this->productHelper->formatPrice($product->getPrice()));
            $productInterface->setPrice($product->getPrice());
//            $productInterface->setImages($this->productHelper->getProductImagesArray($product));
            //$productInterface->setImages($product);
            return $productInterface;
        } catch (NoSuchEntityException $e) {
           // throw NoSuchEntityException::singleField(fieldName: "id", $id);
        }
    }
}
