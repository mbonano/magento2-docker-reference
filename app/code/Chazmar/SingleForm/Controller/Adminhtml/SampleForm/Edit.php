<?php

namespace Chazmar\SingleForm\Controller\Adminhtml\SampleForm;

class Edit extends \Chazmar\SingleForm\Controller\Adminhtml\SampleForm\AbstractAction
{
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;

    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Chazmar_SingleForm::chazmar_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Chazmar Reference: Single Form'));
        $resultPage->addBreadcrumb(__('Chazmar'), __('Chazmar'));
        $resultPage->addBreadcrumb(__('Single Form'), __('Single Form'));
        return $resultPage;
    }
}
