<?php

namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * PreserveText element HTML writer.
 */
class PreserveText extends Text
{
    /**
     * Write text.
     * 
     * @return string
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Element\PreserveText $element Type hint */
        $element = $this->element;

        $text = $element->getText();
        if (!is_array($text)) {
            $text = [$text];
        }

        $content = $this->writeOpening();
        foreach ($text as $line) {
            if (strpos($line, '{') !== 0) {
                $content .= $this->parentWriter->escapeHTML($line);
            }
        }
        $content .= $this->writeClosing();

        return $content;
    }
}
