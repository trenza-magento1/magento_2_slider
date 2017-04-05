<?php
namespace Trenza\Slider\Block;

/**
 * Slider content block
 */
class Slider extends \Magento\Framework\View\Element\Template
{
    /**
     * Slider collection
     *
     * @var Trenza\Slider\Model\ResourceModel\Slider\Collection
     */
    protected $_sliderCollection = null;
    
    /**
     * Slider factory
     *
     * @var \Trenza\Slider\Model\SliderFactory
     */
    protected $_sliderCollectionFactory;
    
    /** @var \Trenza\Slider\Helper\Data */
    protected $_dataHelper;
    
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Trenza\Slider\Model\Resource\Slider\CollectionFactory $sliderCollectionFactory
	 * @param \Trenza\Slider\Helper\Data $dataHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Trenza\Slider\Model\ResourceModel\Slider\CollectionFactory $sliderCollectionFactory,
        \Trenza\Slider\Helper\Data $dataHelper,
        array $data = []
    ) {
        $this->_sliderCollectionFactory = $sliderCollectionFactory;
        $this->_dataHelper = $dataHelper;
        parent::__construct(
            $context,
            $data
        );
    }
    
    /**
     * Retrieve slider collection
     *
     * @return Trenza_Slider_Model_ResourceModel_Slider_Collection
     */
    protected function _getCollection()
    {
        $collection = $this->_sliderCollectionFactory->create();
        return $collection;
    }
    
    /**
     * Retrieve prepared slider collection
     *
     * @return Trenza_Slider_Model_Resource_Slider_Collection
     */
    public function getCollection()
    {
        if (is_null($this->_sliderCollection)) {
            $this->_sliderCollection = $this->_getCollection();
            $this->_sliderCollection->setCurPage($this->getCurrentPage());
            $this->_sliderCollection->setPageSize($this->_dataHelper->getSliderPerPage());
            $this->_sliderCollection->setOrder('sort','asc');
            $this->_sliderCollection->addFieldToFilter('is_active',1);
        }

        return $this->_sliderCollection;
    }
    
    /**
     * Fetch the current page for the slider list
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->getData('current_page') ? $this->getData('current_page') : 1;
    }
    
    /**
     * Return URL to item's view page
     *
     * @param Trenza_Slider_Model_Slider $sliderItem
     * @return string
     */
    public function getItemUrl($sliderItem)
    {
        return $this->getUrl('*/*/view', array('id' => $sliderItem->getId()));
    }
    
    /**
     * Return URL for resized Slider Item image
     *
     * @param Trenza_Slider_Model_Slider $item
     * @param integer $width
     * @return string|false
     */
    public function getImageUrl($item)
    {
        return $this->_dataHelper->resize($item, 800);
    }
    
    /**
     * Get a pager
     *
     * @return string|null
     */
    public function getPager()
    {
        $pager = $this->getChildBlock('slider_list_pager');
        if ($pager instanceof \Magento\Framework\Object) {
            $sliderPerPage = $this->_dataHelper->getSliderPerPage();

            $pager->setAvailableLimit([$sliderPerPage => $sliderPerPage]);
            $pager->setTotalNum($this->getCollection()->getSize());
            $pager->setCollection($this->getCollection());
            $pager->setShowPerPage(TRUE);
            $pager->setFrameLength(
                $this->_scopeConfig->getValue(
                    'design/pagination/pagination_frame',
                    \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                )
            )->setJump(
                $this->_scopeConfig->getValue(
                    'design/pagination/pagination_frame_skip',
                    \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                )
            );

            return $pager->toHtml();
        }

        return NULL;
    }
}
