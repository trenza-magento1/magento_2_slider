<?php
/**
 * Slider Resource Collection
 */
namespace Trenza\Slider\Model\ResourceModel\Slider;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Trenza\Slider\Model\Slider', 'Trenza\Slider\Model\ResourceModel\Slider');
    }
}
