<?php

namespace Chazmar\SingleForm\Block\Adminhtml\SampleForm\Edit;

class TabSection extends \Magento\Backend\Block\Widget\Tabs
{
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;

    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('chazmar_singleform_sampleform_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Tab_Container_Name'));
    }
}
