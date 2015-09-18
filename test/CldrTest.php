<?php namespace Fisharebest\Localization;

use Fisharebest\Localization\Locale\LocaleInterface;
use Fisharebest\Localization\Locale\LocaleNmg;
use Fisharebest\Localization\Territory\TerritoryInterface;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class CldrTest extends TestCase {
	/**
	 * Test weekData
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testWeekData() {
		$days = array(
			'sun' => 0,
			'mon' => 1,
			'tue' => 2,
			'wed' => 3,
			'thu' => 4,
			'fri' => 5,
			'sat' => 6,
		);

		$cldr = file_get_contents(__DIR__ . '/data/cldr-27.0.3/cldr-core/supplemental/weekData.json');
		$cldr = json_decode($cldr);

		foreach ($cldr->supplemental->weekData->firstDay as $code => $day) {
			$class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));

			/** @var TerritoryInterface $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->firstDay());
		}

		foreach ($cldr->supplemental->weekData->weekendStart as $code => $day) {
			$class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));

			/** @var TerritoryInterface $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->weekendStart());
		}

		foreach ($cldr->supplemental->weekData->weekendEnd as $code => $day) {
			$class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));

			/** @var TerritoryInterface $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->weekendEnd());
		}
	}

	/**
	 * Test measurementData
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testMeasurementData() {
		$cldr = file_get_contents(__DIR__ . '/data/cldr-27.0.3/cldr-core/supplemental/measurementData.json');
		$cldr = json_decode($cldr);

		foreach ($cldr->supplemental->measurementData->measurementSystem as $code => $data) {
			$class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));

			/** @var TerritoryInterface $territory */
			$territory = new $class;
			$this->assertSame($data, $territory->measurementSystem());
		}

		foreach ($cldr->supplemental->measurementData->paperSize as $code => $data) {
			$class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));

			/** @var TerritoryInterface $territory */
			$territory = new $class;

			$this->assertSame($data, $territory->paperSize());
		}
	}

	/**
	 * Test layout
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testCharacterOrder() {
		$direction = array(
			'left-to-right' => 'ltr',
			'right-to-left' => 'rtl',
		);

		foreach (glob(__DIR__ . '/data/cldr-27.0.3/cldr-misc-full/main/*/layout.json') as $cldr) {
			if (strpos($cldr, '/root/layout.json') === false) {
				$locale = $this->cldrLocale($cldr);
				$json   = $this->cldrJson($cldr);
				$dir    = $direction[$json['layout']['orientation']['characterOrder']];

				$this->assertSame($dir, $locale->direction());
			}
		}
	}

	/**
	 * Test numbers
	 *
	 * @large
	 *
	 * @return void
	 */
	public function testNumbers() {
		foreach (glob(__DIR__ . '/data/cldr-28/main/*.xml') as $cldr) {
			if (strpos($cldr, '/root/layout.json') === false) {
				$locale = Locale::create(basename($cldr, '.xml'));
				$xml    = simplexml_load_file($cldr);
				while (!isset($xml->numbers->defaultNumberingSystem)) {
					$cldr = $this->parentCldr($cldr);
					$xml  = simplexml_load_file($cldr);
				}

				$dir = (string) $xml->layout->orientation->characterOrder;

				$this->assertSame($direction[$dir], $locale->direction());
			}
		}



		foreach (glob(__DIR__ . '/data/cldr-27.0.3/cldr-numbers-full/main/*/numbers.json') as $cldr) {
			if (strpos($cldr, '/root/numbers.json') === false) {
				$locale                   = $this->cldrLocale($cldr);
				$json                     = $this->cldrJson($cldr);
				$default_numbering_system = $json['numbers']['defaultNumberingSystem'];
				$symbols_key              = 'symbols-numberSystem-' . $default_numbering_system;
				$decimal_formats_key      = 'decimalFormats-numberSystem-' . $default_numbering_system;
				$percent_formats_key      = 'percentFormats-numberSystem-' . $default_numbering_system;
				$decimal                  = $json['numbers'][$symbols_key]['decimal'];
				$group                    = $json['numbers'][$symbols_key]['group'];
				$minus_sign               = $json['numbers'][$symbols_key]['minusSign'];
				$percent_sign             = $json['numbers'][$symbols_key]['percentSign'];
				$standard                 = $json['numbers'][$decimal_formats_key]['standard'];
				$percent                  = $json['numbers'][$percent_formats_key]['standard'];

				if ($locale->languageTag() !== 'en-US-posix') {
					$number = $locale->number(12345678.089);
					$regex  = '/' . strtr($standard, array(
						',' => preg_quote($group, '/'),
						'.' => preg_quote($decimal, '/'),
						'0' => '.',
						'#' => '.',
					)) . '$/u';

					// Check the number matches the pattern
					$this->assertTrue(preg_match($regex, $number) === 1);

					$number = $locale->percent(12345.67);
					$regex  = '/' . strtr($percent, array(
						',' => preg_quote($group, '/'),
						'.' => preg_quote($decimal, '/'),
						'0' => '.',
						'#' => '.',
						'%' => $percent_sign,
					)) . '/u';

					// Check the percentage matches the pattern
					$this->assertTrue(preg_match($regex, $number) === 1);
				}

				// Check the minus sign is correct
				$this->assertTrue(strpos($locale->number(-1), $minus_sign) === 0);
			}
		}
	}

	/**
	 * Test languages
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testLanguages() {
		foreach (glob(__DIR__ . '/data/cldr-27.0.3/cldr-localenames-full/main/*/languages.json') as $cldr) {
			if (strpos($cldr, '/root/languages.json') === false) {
				$locale = $this->cldrLocale($cldr);
				$json   = $this->cldrJson($cldr);

				$language_tag = $locale->languageTag();
				if (isset($json['localeDisplayNames']['languages'][$language_tag])) {
					$endonym = $json['localeDisplayNames']['languages'][$language_tag];

					if ($locale instanceof LocaleNmg) {
						// CLDR 27.0.3 gives the language code as the language name.
						$endonym = 'Kwasio';
					}

					$this->assertSame($endonym, $locale->endonym());
				}
			}
		}
	}

	/**
	 * Test plural rules
	 *
	 * @large
	 *
	 * @return void
	 */
	public function testPluralRules() {
		$cldr = file_get_contents(__DIR__ . '/data/cldr-27.0.3/cldr-core/supplemental/plurals.json');
		$cldr = json_decode($cldr, true);

		foreach ($cldr['supplemental']['plurals-type-cardinal'] as $code => $data) {
			// The following CLDR definitions/examples are incompatible with the accepted gettext ones.
			switch ($code) {
			case 'root': // This isn't a locale
			case 'in':   // This code (Indonesian) is deprecated. Use id.
			case 'iw':   // This code (Hebrew) is deprecated. Use he.
			case 'ji':   // This code (Javanese) is deprecated,  Use yi.
			case 'jw':   // This code (Javanese) is deprecated.  Use jv.
			case 'no':   // This code (Norwegian) is deprecated. Use nb or nn.
			case 'sh':   // This code (Serbo-croat) is deprecated
			case 'br':   // CLDR has 5 rules, whereas gettext has (0,1) (other)
			case 'cy':   // CLDR has 5 rules, whereas gettext has (1), (2), (other), (8,11)
			case 'fa':   // CLDR has (0,1) (other), whereas gettext has (other)
			case 'fil':  // CLDR has a different rule from gettext
			case 'he':   // CLDR has (1) (2) (many) (other), whereas gettext has (1) (other)
			case 'kw':   // CLDR has 3 rules, whereas gettext has (1), (2), (3), (other)
			case 'lv':   // CLDR has (0) (1) (other), whereas gettext has (1) (other) (0)
			case 'mk':   // There are lots of conflicting definitions.
			case 'prg':  // Same as lv
			case 'pt':   // CLDR has the plural rule for pt-BR, whereas gettext has the plural rule for pt-PT
			case 'se':   // CLDR has (1) (2) (other), whereas gettext has (0,1) (other)
			case 'tr':   // CLDR has (1) (other), whereas gettext has (other)
				continue 2;
			}
			try {
				$locale = Locale::create($code);
				$rules = array();
				foreach ($data as $datum) {
					if (preg_match('/@integer ([^@]+)/', $datum, $example)) {
						$rules[] = preg_split('/[^0-9~]+/', $example[1], -1, PREG_SPLIT_NO_EMPTY);
					};
				}
				$this->assertSame(count($rules), $locale->pluralRule()->plurals());

				foreach ($rules as $rule => $examples) {
					foreach ($examples as $example) {
						if (strpos($example, '~')) {
							list($low, $high) = explode('~', $example);
							for ($number = $low; $number <= $high; ++$number) {
								$this->assertSame($rule, $locale->pluralRule()->plural($number));
							}
						} else {
							if ($rule !== $locale->pluralRule()->plural($example)) { var_dump($code);}
							$this->assertSame($rule, $locale->pluralRule()->plural($example));
						}
					}
				}
			} catch (\DomainException $ex) {
				var_dump("Found CLDR plural rule for non-existant language $code");
			}
		}
	}

	/**
	 * Extract the JSON data from a JSON file
	 *
	 * @param string $file
	 *
	 * @return \stdClass
	 */
	private function cldrJson($file) {
		$data = json_decode(file_get_contents($file), true);

		return reset($data['main']);
	}

	/**
	 * Create a locale object corresponding to a CLDR JSON file
	 *
	 * @param string $file
	 *
	 * @return LocaleInterface
	 */
	private function cldrLocale($file) {
		return Locale::create(basename(dirname($file)));
	}
}
