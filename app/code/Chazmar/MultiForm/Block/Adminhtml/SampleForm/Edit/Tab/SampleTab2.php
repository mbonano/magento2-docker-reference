<?php

// @codingStandardsIgnoreFile

namespace Chazmar\MultiForm\Block\Adminhtml\SampleForm\Edit\Tab;

use Magento\Backend\Block\Widget\Tab\TabInterface;

class SampleTab2 extends AbstractTab implements TabInterface
{
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('Tab_Name2');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Tab_Name2');
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
        $form->setHtmlIdPrefix('sampleform2_');

        $fieldset1 = $form->addFieldset('base_fieldset', ['legend' => __('Fieldset_1_2')]);

        $this->createSelectField($fieldset1, 'some_select_field_2', 'Select_Field_Label', true, ['Enabled','Disabled']);

        $this->createLinkField($fieldset1, "some_link_2", 'Link_Label', 'http://magento.chazmar.com');

        $fieldset2 = $form->addFieldset('basic_fieldset', ['legend' => __('Fieldset_2_2')]);

        $this->createTextField($fieldset2, 'some_text_field_2', 'Text_Label', true);

        $this->createMultiSelectField($fieldset2, 'some_multiselect_field_2', 'MultiSelect_Field_Label', false, [
            ['value' => 'value1', 'label' => 'label1'],
            ['value' => 'value2', 'label' => 'label2'],
            ['value' => 'value3', 'label' => 'label3']
        ]);

        $form->setValues([
            'some_select_field_2' => 0,
            'some_link_2' => 'link_text_2',
            'some_text_field_2' => 'some-text-value_2',
            'some_multiselect_field_2' => ['value1','value2']
        ]);

        $this->setForm($form);
        return parent::_prepareForm();
    }
}

