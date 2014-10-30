<?php namespace Fisharebest\Localization;

/**
 * Class LocaleElCy
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleElCy extends LocaleEl {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCy;
	}
}
