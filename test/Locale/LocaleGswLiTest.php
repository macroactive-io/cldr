<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGswLi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGswLiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleGswLi;

		$this->assertEquals(new LanguageGsw, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLi, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('gsw_LI', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="gsw-LI"', $locale->htmlAttributes());
		$this->assertSame('gsw-LI', $locale->languageTag());
		$this->assertSame('12’345’678.09', $locale->number(12345678.09));
		$this->assertSame('−123', $locale->number(-123));
		$this->assertSame('1’234.56 %', $locale->percent(12.3456, 2));
	}
}
