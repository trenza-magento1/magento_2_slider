<?php
namespace Trenza\Slider\Block\Adminhtml;

class Slider extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_slider';
        $this->_blockGroup = 'Trenza_Slider';
        $this->_headerText = __('Trenza Slider');
        $this->_addButtonLabel = __('Add Slide');
        parent::_construct();
        if ($this->_isAllowedAction('Trenza_Slider::save')) {
            $this->buttonList->update('add', 'label', __('Add New Slide'));
        } else {
            $this->buttonList->remove('add');
        }
    }
    
    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
