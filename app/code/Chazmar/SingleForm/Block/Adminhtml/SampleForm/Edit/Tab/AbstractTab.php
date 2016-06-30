<?php

// @codingStandardsIgnoreFile

namespace Chazmar\SingleForm\Block\Adminhtml\SampleForm\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;

abstract class AbstractTab extends Generic
{
    protected function createTextField($fieldset, $name, $label, $isRequired) {
        $fieldset->addField(
            $name,
            'text',
            [
                'name' => $name,
                'label' => __($label),
                'title' => __($label),
                'required' => $isRequired
            ]
        );
    }

    protected function createTextAreaField($fieldset, $name, $label, $isRequired) {
        $fieldset->addField(
            $name,
            'textarea',
            [
                'name' => $name,
                'label' => __($label),
                'title' => __($label),
                'required' => $isRequired
            ]
        );
    }

    protected function createSelectField($fieldset, $name, $label, $isRequired, $options) {
        $fieldset->addField(
            $name,
            'select',
            [
                'label' => __($label),
                'title' => __($label),
                'name' => 'post[' . $name . ']',
                'required' => $isRequired,
                'options' => $options
            ]
        );
    }

    protected function createLinkField($fieldset, $name, $label, $href) {
        $fieldset->addField($name, 'link', [
            'label' => $label,
            'href' => $href,
            'style' => 'display: block; margin-top: 7px;'
        ]);
    }

    protected function createMultiSelectField($fieldset, $name, $label, $isRequired, $options) {
        $fieldset->addField(
            $name,
            'multiselect',
            [
                'name' => $name . '[]',
                'label' => __($label),
                'title' => __($label),
                'required' => $isRequired,
                'values' => $options,
                'disabled' => false
            ]
        );
    }
}
