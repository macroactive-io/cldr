<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKsf - Bafia
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKsf extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'rikpa';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'RIKPA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKsf;
	}
}
