<?php
namespace SnowIO\AttributeOptionCode\Api;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\StateException;
use SnowIO\AttributeOptionCode\Api\Data\CodedAttributeOptionInterface;

interface CodedAttributeOptionRepositoryInterface
{
    /**
     * Save option
     *
     * @param int $entityType
     * @param string $attributeCode
     * @param CodedAttributeOptionInterface $option
     * @return void
     * @throws StateException
     * @throws InputException
     */
    public function save($entityType, $attributeCode, CodedAttributeOptionInterface $option);

    /**
     * Delete option from attribute
     *
     * @param int $entityType
     * @param string $attributeCode
     * @param string $optionCode
     * @return void
     * @throws StateException
     * @throws InputException
     */
    public function delete($entityType, $attributeCode, $optionCode);
}
