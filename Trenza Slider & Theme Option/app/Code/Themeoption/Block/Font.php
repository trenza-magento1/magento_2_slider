<?php

namespace Trenza\Themeoption\Block;
class Font extends \Magento\Config\Block\System\Config\Form\Field {

/**
 * @param \Magento\Backend\Block\Template\Context $context
 * @param Registry $coreRegistry
 * @param array $data
 */
public function __construct(
    \Magento\Backend\Block\Template\Context $context, array $data = []
) {
    parent::__construct($context, $data);
}

protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
    $html = $element->getElementHtml();
    $value = $element->getData('value');

    $html .= '<script type="text/javascript">
    require(["jquery", "jquery/ui"], function($){ 
            $("#' . $element->getHtmlId() . '").gwfselect().bind("gwfselectchange", function (event, fontInfo) {
            });
        });
    </script>';
    return $html;
}
}