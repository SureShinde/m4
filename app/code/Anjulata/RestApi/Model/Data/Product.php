<?php
namespace Anjulata\RestApi\Model\Data;

use Anjulata\RestApi\Api\Data\ProductInterface;
use Magento\Framework\DataObject;

class Product extends DataObject implements ProductInterface
{
    /**
     * @retrun int
     */
    public function getId()
    {
        return $this->getData(key:'id');
    }

    /**
     * @param int $id
     * @retrun $this
     */
    public function setId($id)
    {
        return $this->setData('id', $id);
    }

    /**
     * @retrun string
     */
    public function getSku()
    {
        return $this->getData(key:'sku');
    }

    /**
     * @param string $sku
     * @retrun $this
     */
    public function setSku($sku)
    {
        return $this->setData('sku', $sku);
    }

    /**
     * @retrun string
     */
    public function getName()
    {
        return $this->getData(key:'name');
    }

    /**
     * @param string $name
     * @retrun $this
     */
    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    /**
     * @retrun string
     */
    public function getDescription()
    {
        return $this->getData(key:'description');
    }

    /**
     * @param string $description
     * @retrun $this
     */
    public function setDescription($description)
    {
        return $this->setData('description', $description);
    }

    /**
     * @retrun string
     */
    public function getPrice()
    {
        return $this->getData(key:'price');
    }

    /**
     * @param string $price
     * @retrun $this
     */
    public function setPrice($price)
    {
        return $this->setData('price', $price);
    }

    /**
     * @retrun string[]
     */
    public function getImages()
    {
        return $this->getData(key:'images');
    }

    /**
     * @param string[] $productImagesArray
     * @retrun $this
     */
    public function setImages($productImagesArray)
    {
        return $this->setData('images', $productImagesArray);
    }


}
