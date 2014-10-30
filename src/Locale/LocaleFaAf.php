<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFaAf
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFaAf extends LocaleFa {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryAf;
	}
}
