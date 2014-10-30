<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDeLu
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDeLu extends LocaleDe {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryLu;
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}
}
