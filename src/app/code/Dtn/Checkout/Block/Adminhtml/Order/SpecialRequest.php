<?php

namespace Dtn\Checkout\Block\Adminhtml\Order;

class SpecialRequest extends \Magento\Backend\Block\Template implements \Magento\Backend\Block\Widget\Tab\TabInterface
{
    protected $_template = 'order/view/specialrequest.phtml';
    protected $_coreRegistry = null;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    public function getTabLabel()
    {
        return __('Request');
    }

    public function getTabTitle()
    {
        return __('Request');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }

    public function getOrder()
    {
        return $this->_coreRegistry->registry('current_order');
    }

    public function getSpecial()
    {
        return $this->getOrder()->getRequest();
//        return $this->getOrder()->getCustomerId();
    }
    public function getabc(){
        return "Test Specical request";
    }

}
