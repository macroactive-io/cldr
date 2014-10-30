<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArIl
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArIl extends LocaleAr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryIl;
	}
}
