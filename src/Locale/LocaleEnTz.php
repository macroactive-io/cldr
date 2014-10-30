<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnTz
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnTz extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryTz;
	}
}
