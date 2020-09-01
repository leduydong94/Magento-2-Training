<?php
namespace Tigren\Catalog\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $eavSetupFactory;

    public function __construct(EavSetupFactory $eav)
    {
        $this->eavSetupFactory = $eav;
    }

    public function upgrade(
        \Magento\Framework\Setup\ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $days = [
            'monday', 'tuesday', 'wednesday', 'thursday',
            'friday', 'saturday', 'sunday'
        ];
        $sortOrder = 100;
        foreach ($days as $day) {
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                $day . '_cutoff_at',
                [
                    'type' => 'varchar',
                    'label' => ucfirst($day) . ' Cutoff At',
                    'input' => 'text',
                    'required' => false,
                    'sort_order' => $sortOrder++,
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                    'group' => 'Cutoff',
                ]
            );
        }
    }
}
