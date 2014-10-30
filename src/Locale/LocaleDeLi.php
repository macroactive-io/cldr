<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDeLi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDeLi extends LocaleDe {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryLi;
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '\'';
	}
}
