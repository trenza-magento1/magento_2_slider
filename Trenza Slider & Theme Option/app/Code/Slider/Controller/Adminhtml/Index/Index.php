<?php
namespace Trenza\Slider\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
	/**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
	
    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Trenza_Slider::slider_manage');
    }

    /**
     * Slider List action
     *
     * @return void
     */
    public function execute()
    {
		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(
            'Trenza_Slider::slider_manage'
        )->addBreadcrumb(
            __('Slide'),
            __('Slide')
        )->addBreadcrumb(
            __('Manage Slide'),
            __('Manage Slide')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Trenza Slider'));
		return $resultPage;
    }
}
