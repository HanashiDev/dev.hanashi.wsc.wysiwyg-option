<?php
namespace wcf\system\option;
use wcf\data\option\Option;
use wcf\system\exception\UserInputException;
use wcf\system\html\input\HtmlInputProcessor;
use wcf\system\language\I18nHandler;
use wcf\system\WCF;

class TextareaWysiwygI18nOptionType extends TextareaWysiwygOptionType {
	/**
	 * @inheritDoc
	 */
	protected $supportI18n = true;
	
	/**
	 * @inheritDoc
	 */
	public function getFormElement(Option $option, $value) {
		I18nHandler::getInstance()->assignVariables(!empty($_POST));
		
		WCF::getTPL()->assign([
			'option' => $option,
			'value' => $value
		]);
		return WCF::getTPL()->fetch('textareaWysiwygI18nOptionType');
	}
	
	/**
	 * @inheritDoc
	 */
	public function validate(Option $option, $newValue) {
		if (!I18nHandler::getInstance()->validateValue($option->optionName, $option->requireI18n, true)) {
			throw new UserInputException($option->optionName, 'validationFailed');
		}
	}
}
