<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTi - Tigrinya
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTi extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'ትግርኛ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageTi;
	}
}
