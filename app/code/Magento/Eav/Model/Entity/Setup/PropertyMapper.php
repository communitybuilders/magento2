<?php
/**
 * Default entity attribute mapper
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Eav\Model\Entity\Setup;

use Magento\Catalog\Model\Resource\Eav\Attribute;

class PropertyMapper extends PropertyMapperAbstract
{
    /**
     * Map input attribute properties to storage representation
     *
     * @param array $input
     * @param int $entityTypeId
     * @return array
     */
    public function map(array $input, $entityTypeId)
    {
        return [
            'backend_model' => $this->_getValue($input, 'backend'),
            'backend_type' => $this->_getValue($input, 'type', 'varchar'),
            'backend_table' => $this->_getValue($input, 'table'),
            'frontend_model' => $this->_getValue($input, 'frontend'),
            'frontend_input' => $this->_getValue($input, 'input', 'text'),
            'frontend_label' => $this->_getValue($input, 'label'),
            'frontend_class' => $this->_getValue($input, 'frontend_class'),
            'source_model' => $this->_getValue($input, 'source'),
            'is_required' => $this->_getValue($input, 'required', 1),
            'is_user_defined' => $this->_getValue($input, 'user_defined', 0),
            'default_value' => $this->_getValue($input, 'default'),
            'is_unique' => $this->_getValue($input, 'unique', 0),
            'note' => $this->_getValue($input, 'note'),
            'is_global' => $this->_getValue($input, 'global', Attribute::SCOPE_GLOBAL)
        ];
    }
}
