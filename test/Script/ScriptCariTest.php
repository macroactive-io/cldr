<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCari class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCariTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCari;

		$this->assertSame('Cari', $script->code());
		$this->assertSame('201', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Carian', $script->unicodeName());
	}
}
