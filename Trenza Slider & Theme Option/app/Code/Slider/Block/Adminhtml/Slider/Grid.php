<?php
namespace Trenza\Slider\Block\Adminhtml\Slider;

/**
 * Adminhtml slider pages grid
 */
class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Trenza\Slider\Model\ResourceModel\Slider\CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * @var \Trenza\Slider\Model\Slider
     */
    protected $_slider;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Trenza\Slider\Model\Slider $slider
     * @param \Trenza\Slider\Model\ResourceModel\Slider\CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Trenza\Slider\Model\Slider $slider,
        \Trenza\Slider\Model\ResourceModel\Slider\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_collectionFactory = $collectionFactory;
        $this->_slider = $slider;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('sliderGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setUseAjax(true);
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare collection
     *
     * @return \Magento\Backend\Block\Widget\Grid
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create();
        /* @var $collection \Trenza\Slider\Model\ResourceModel\Slider\Collection */
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare columns
     *
     * @return \Magento\Backend\Block\Widget\Grid\Extended
     */
    protected function _prepareColumns()
    {
        $this->addColumn('slider_id', [
            'header'    => __('Slider Id'),
            'index'     => 'slider_id',

        ]);
        
        $this->addColumn('name', ['header' => __('Slider Name'), 'index' => 'name']);
        $this->addColumn('sort', ['header' => __('Sort Order'), 'index' => 'sort']);
        $this->addColumn('is_active', ['header' => __('Status'), 'index' => 'is_active','type'=>'options',
          'options'=> array(1 =>'Enabled',0 =>'Disabled')]);
       /* $this->addColumn('image', ['header' => __('Image'), 'index' => 'image']);*/
        
   


        
        $this->addColumn(
            'action',
            [
                'header' => __('Edit'),
                'type' => 'action',
                'getter' => 'getId',
                'actions' => [
                    [
                        'caption' => __('Edit'),
                        'url' => [
                            'base' => '*/*/edit',
                            'params' => ['store' => $this->getRequest()->getParam('store')]
                        ],
                        'field' => 'id'
                    ]
                ],
                'sortable' => true,
                'filter' => false,
                'header_css_class' => 'col-action',
                'column_css_class' => 'col-action'
            ]
        );

        return parent::_prepareColumns();
    }

    /**
     * Row click url
     *
     * @param \Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', ['id' => $row->getId()]);
    }

    /**
     * Get grid url
     *
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', ['_current' => true]);
    }
}
