<?php

namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * FormField element HTML writer.
 */
class FormField extends AbstractElement
{
    /**
     * Write text.
     *
     * @return string
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Element\FormField $element Type hint */
        $element = $this->element;
        $text = $element->getText();

        return $text ? $this->parentWriter->escapeHTML($text) : '';
    }
}
