<?php

namespace wcf\system\option;

use wcf\data\option\Option;
use wcf\system\html\input\HtmlInputProcessor;
use wcf\system\WCF;

class TextareaWysiwygOptionType extends AbstractOptionType
{
    /**
     * @inheritDoc
     */
    public function getFormElement(Option $option, $value)
    {
        WCF::getTPL()->assign([
            'option' => $option,
            'value' => $value,
        ]);

        return WCF::getTPL()->fetch('textareaWysiwygOptionType');
    }

    /**
     * @inheritDoc
     */
    public function getData(Option $option, $newValue)
    {
        $htmlInputProcessor = new HtmlInputProcessor();
        $htmlInputProcessor->process($newValue, 'dev.hanashi.wsc.textareawysiwyg.message', 0);

        return $htmlInputProcessor->getHtml();
    }
}
