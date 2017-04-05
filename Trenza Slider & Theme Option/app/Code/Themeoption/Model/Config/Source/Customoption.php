<?php
 
//Location: magento_two/app/code/Trenza/Themeopion/Model/Config/Source/Custom.php
namespace Trenza\Themeoption\Model\Config\Source;
 
class Customoption implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
 
        return [
            ['value' => 'top center', 'label' => __('Top Center')],
            ['value' => 'top left', 'label' => __('Top Left')],
            ['value' => 'top right', 'label' => __('Top Right')],
            ['value' => 'center center', 'label' => __('Center Center')],
            ['value' => 'center left', 'label' => __('Center Left')],
            ['value' => 'center right', 'label' => __('Center Right')],
            ['value' => 'bottom center', 'label' => __('Bottom Center')],
            ['value' => 'bottom left', 'label' => __('Bottom Left')],
            ['value' => 'bottom right', 'label' => __('Bottom Right')],
        ];
    }
}