<?php

namespace Chazmar\SingleForm\Block\Adminhtml\SampleForm\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
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
        $this->setId('chazmar_singleform_form');
        $this->setTitle(__('General'));
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'edit_form',
                    'action' => $this->getUrl('chazmar_singleform/sampleform/edit'),
                    'method' => 'post',
                ],
            ]
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
