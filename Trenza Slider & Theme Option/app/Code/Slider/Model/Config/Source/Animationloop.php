<?php
namespace Trenza\Slider\Model\Config\Source;
class Animationloop implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
  return [
    ['value' => 'true', 'label' => __('Yes')],
    ['value' => 'false', 'label' => __('No')]
  ];
 }
}