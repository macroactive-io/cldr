<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsDo
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsDo extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryDo;
	}
}
