<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\GreetingMessage\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Upgrade Data script
 */

class UpgradeData implements UpgradeDataInterface
{
    private $eavSetupFactory;
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if ($context->getVersion()
            && version_compare($context->getVersion(), '0.0.2') < 0
        ) {
            $table = $setup->getTable('greeting_message');
            $setup->getConnection()
                ->insertForce($table, ['message' => 'Happy Thanksgiving', 'season' => 'fall']);
            $setup->getConnection()
                ->update($table, ['season' => 'winter'], 'greeting_id IN (1,2)');
        }
        if (version_compare($context->getVersion(), '0.0.4', '<')) {

            $table = $setup->getTable('greeting_message');
            $setup->getConnection()
                ->insertForce($table, ['message' => 'Happy new year 2021', 'season' => 'winter']);
            $setup->getConnection()->delete($table,["greeting_id = 1"]);
        }
        if (version_compare($context->getVersion(), '0.0.6', '<')) {

            $table = $setup->getTable('greeting_message');
            $setup->getConnection()
                ->insertForce($table, ['message' => 'Have a happy good day', 'season' => 'winter']);
            //$setup->getConnection()->delete($table,["greeting_id = 1"]);
        }
        if(version_compare($context->getVersion(),'0.0.7','<')){
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'sample_attribute',
                [
                    'type' => 'text',
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Sample Atrribute',
                    'input' => 'text',
                    'class' => '',
                    'source' => '',
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => ''
                ]
            );
        }

        $setup->endSetup();
    }
}
