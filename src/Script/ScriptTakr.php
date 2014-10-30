<?php namespace Fisharebest\Localization;

/**
 * Class ScriptTakr - Representation of the Takri, Ṭākrī, Ṭāṅkrī script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTakr extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Takr';
	}

	/** {@inheritdoc} */
	public function digits() {
		return array(
			'0' => '𑛀',
			'1' => '𑛁',
			'2' => '𑛂',
			'3' => '𑛃',
			'4' => '𑛄',
			'5' => '𑛅',
			'6' => '𑛆',
			'7' => '𑛇',
			'8' => '𑛈',
			'9' => '𑛉',
		);
	}

	/** {@inheritdoc} */
	public function number() {
		return '321';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Takri';
	}
}
