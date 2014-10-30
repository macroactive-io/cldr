<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrCd
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrCd extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCd;
	}
}
