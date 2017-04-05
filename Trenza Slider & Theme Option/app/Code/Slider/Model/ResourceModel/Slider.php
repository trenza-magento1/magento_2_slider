<?php
namespace Trenza\Slider\Model\ResourceModel;

/**
 * Slider Resource Model
 */
class Slider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('trenza_slider', 'slider_id');
    }
}
