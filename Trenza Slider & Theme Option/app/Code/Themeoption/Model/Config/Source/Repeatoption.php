<?php
 
//Location: magento_two/app/code/Trenza/Themeopion/Model/Config/Source/Repeatoption.php
namespace Trenza\Themeoption\Model\Config\Source;
 
class Repeatoption implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
 
        return [
            ['value' => 'repeat', 'label' => __('Repeat')],
            ['value' => 'no-repeat', 'label' => __('No Repeat')],
            ['value' => 'repeat-x', 'label' => __('Repeat X')],
            ['value' => 'repeat-x', 'label' => __('Repeat Y')],
        ];
    }
}