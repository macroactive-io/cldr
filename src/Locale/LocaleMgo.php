<?php namespace Fisharebest\Localization;

/**
 * Class LocaleMgo - Metaʼ
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleMgo extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return ',';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'metaʼ';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'METAʼ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageMgo;
	}
}
