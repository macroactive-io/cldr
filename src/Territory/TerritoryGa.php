<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory GA - Gabon.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGa extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'GA';
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}
}
