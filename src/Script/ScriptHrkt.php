<?php namespace Fisharebest\Localization;

/**
 * Class ScriptHrkt - Representation of the Japanese syllabaries (alias for Hiragana + Katakana) script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHrkt extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Hrkt';
	}

	/** {@inheritdoc} */
	public function number() {
		return '412';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Katakana_Or_Hiragana';
	}
}
