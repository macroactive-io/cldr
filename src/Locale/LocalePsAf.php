<?php namespace Fisharebest\Localization;

/**
 * Class LocalePsAf
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePsAf extends LocalePs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryAf;
	}
}
