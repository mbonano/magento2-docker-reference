<?php

namespace Chazmar\MultiForm\Controller\Adminhtml\SampleForm;

class Edit extends \Chazmar\MultiForm\Controller\Adminhtml\Sampleform\AbstractAction
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
        $resultPage->setActiveMenu('Chazmar_MultiForm::chazmar_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Chazmar Reference: Multi Form'));
        $resultPage->addBreadcrumb(__('Chazmar'), __('Chazmar'));
        $resultPage->addBreadcrumb(__('Multi Form'), __('Multi Form'));
        return $resultPage;
    }
}
