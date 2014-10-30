<?php namespace Fisharebest\Localization;

/**
 * Class ScriptSora - Representation of the Sora Sompeng script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSora extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Sora';
	}

	/** {@inheritdoc} */
	public function digits() {
		return array(
			'0' => '𑃰',
			'1' => '𑃱',
			'2' => '𑃲',
			'3' => '𑃳',
			'4' => '𑃴',
			'5' => '𑃵',
			'6' => '𑃶',
			'7' => '𑃷',
			'8' => '𑃸',
			'9' => '𑃹',
		);
	}

	/** {@inheritdoc} */
	public function number() {
		return '398';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Sora_Sompeng';
	}
}
