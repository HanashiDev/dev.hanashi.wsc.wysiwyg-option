<textarea id="{$option->optionName}" name="{$option->optionName}" class="wysiwygTextarea">{$i18nPlainValues[$option->optionName]}</textarea>
{include file='multipleLanguageInputJavascript' elementIdentifier=$option->optionName forceSelection=$option->requireI18n}
{include file='wysiwyg' wysiwygSelector=$option->optionName}
