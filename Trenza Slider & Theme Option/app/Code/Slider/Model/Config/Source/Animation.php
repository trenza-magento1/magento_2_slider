<?php
namespace Trenza\Slider\Model\Config\Source;
class Animation implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
  return [
    ['value' => 'slide', 'label' => __('Slide')],
    ['value' => 'fade', 'label' => __('Fade')]
  ];
 }
}