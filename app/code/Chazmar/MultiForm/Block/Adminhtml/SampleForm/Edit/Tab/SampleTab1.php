<?php

// @codingStandardsIgnoreFile

namespace Chazmar\MultiForm\Block\Adminhtml\SampleForm\Edit\Tab;

use Magento\Backend\Block\Widget\Tab\TabInterface;

class SampleTab1 extends AbstractTab implements TabInterface
{
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('Tab_Name1');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Tab_Name1');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('sampleform1_');

        $fieldset1 = $form->addFieldset('base_fieldset', ['legend' => __('Fieldset_1_1')]);

        $this->createSelectField($fieldset1, 'some_select_field_1', 'Select_Field_Label', true, ['Enabled','Disabled']);

        $this->createLinkField($fieldset1, "some_link_1", 'Link_Label', 'http://magento.chazmar.com');

        $fieldset2 = $form->addFieldset('basic_fieldset', ['legend' => __('Fieldset_2_1')]);

        $this->createTextField($fieldset2, 'some_text_field_1', 'Text_Label', true);

        $this->createMultiSelectField($fieldset2, 'some_multiselect_field_1', 'MultiSelect_Field_Label', false, [
            ['value' => 'value1', 'label' => 'label1'],
            ['value' => 'value2', 'label' => 'label2'],
            ['value' => 'value3', 'label' => 'label3']
        ]);

        $form->setValues([
            'some_select_field_1' => 1,
            'some_link_1' => 'link_text',
            'some_text_field_1' => 'some-text-value',
            'some_multiselect_field_1' => ['value2','value3']
        ]);

        $this->setForm($form);
        return parent::_prepareForm();
    }
}

