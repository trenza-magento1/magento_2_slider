<?php
namespace Trenza\Slider\Model\Config\Source;
class Topslider implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
  return [
    ['value' => 'enable', 'label' => __('Enable')],
    ['value' => 'disable', 'label' => __('Disable')]
  ];
 }
}