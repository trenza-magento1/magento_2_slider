<?php
namespace Trenza\Slider\Controller\AbstractController;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;

interface SliderLoaderInterface
{
    /**
     * Load order
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return \Trenza\Slider\Model\Slider
     */
    public function load(RequestInterface $request, ResponseInterface $response);
}
