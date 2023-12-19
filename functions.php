<?php

function languages()
{
	return [
		'pl' => 'Polish',
		'en' => 'English',
	];
}

function defaultLanguageCode()
{
	return 'pl';
}

function printLangaugesHTMLOptions($currentLanguage)
{
	$options = '';
	
	foreach (languages() as $languageCode => $language) {
		$options .= '<option id="' . $languageCode . '" value="' . $languageCode . '"' . ($languageCode === $currentLanguage ? ' selected' : '') . '>' . $language . '</option>';
	}
	
	echo $options;
}

function printLanguagesHTMLForFooter($currentLanguage)
{
	$links = '';
	
	$languages = languages();
	unset($languages[$currentLanguage]);
	
	foreach ($languages as $languageCode => $language) {
		$links .= '<a class="btn-two" href="https://bhpsoft.pl/' . $languageCode . '/">' . $language . '</a>&nbsp;';
	}
	
	echo $links;
}

function getCurrentLanguageCode($directory)
{
	$languageCode = basename($directory);
	
	$availableLanguageCodes = array_keys(languages());
	if (in_array($languageCode, $availableLanguageCodes)) {
		return $languageCode;
	}
	
	return defaultLanguageCode();
}