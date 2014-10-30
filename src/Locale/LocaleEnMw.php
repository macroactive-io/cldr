<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnMw
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnMw extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMw;
	}
}
