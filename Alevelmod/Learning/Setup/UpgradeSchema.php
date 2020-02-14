<?php

namespace Alevelmod\Learning\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * Class UpgradeSchema
 * @package Alevelmod\Learning\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{

    private $table;
    private $connection;

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $this->table = $setup->getTable('alevelmod_learning_model');
        $this->connection = $setup->getConnection();

        /**  version_compare() returned 1 if the second is lower. */
        if (version_compare($context->getVersion(), '1.0.0') < 0) {
            $this->addColumnAge();
        }

        $setup->endSetup();
    }

    /**
     *  Add new column for table.
     */
    private function addColumnAge()
    {
        $this->connection->addColumn(
            $this->table,
            'age',
            [
                'type' => Table::TYPE_INTEGER,
                'unsigned' => true,
                'comment' => 'Age'
            ]
        );
    }
}