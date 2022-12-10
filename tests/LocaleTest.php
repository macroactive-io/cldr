<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use DomainException;
use Macroactive\Cldr\Locale;
use Macroactive\Cldr\Locale\LocaleEnAu;
use Macroactive\Cldr\Locale\LocaleEnGb;
use Macroactive\Cldr\Locale\LocaleEnUs;
use PHPUnit\Framework\TestCase;

class LocaleTest extends TestCase
{
    /**
     * Test the comparator
     */
    public function testCompare(): void
    {
        // American English, Australian English, British English
        self::assertLessThan(0, Locale::compare(new LocaleEnAU(), new LocaleEnGb()));
        self::assertLessThan(0, Locale::compare(new LocaleEnUs(), new LocaleEnAu()));
        self::assertLessThan(0, Locale::compare(new LocaleEnUs(), new LocaleEnGb()));

        self::assertEquals(0, Locale::compare(new LocaleEnAu(), new LocaleEnAu()));
        self::assertEquals(0, Locale::compare(new LocaleEnGb(), new LocaleEnGb()));
        self::assertEquals(0, Locale::compare(new LocaleEnUs(), new LocaleEnUs()));

        self::assertGreaterThan(0, Locale::compare(new LocaleEnAu(), new LocaleEnUs()));
        self::assertGreaterThan(0, Locale::compare(new LocaleEnGb(), new LocaleEnUs()));
        self::assertGreaterThan(0, Locale::compare(new LocaleEnGb(), new LocaleEnAu()));
    }

    /**
     * Test the comparator
     *
     * @medium
     */
    public function testCompareAll(): void
    {
        $array = array_map(static function ($x) {
            $class = 'Macroactive\Cldr\Locale\\' . basename($x, '.php');

            return new $class();
        }, preg_grep('/Abstract|Interface/', glob(__DIR__ . '/../src/Locale/Locale??*.php'), PREG_GREP_INVERT));

        usort($array, 'Macroactive\Cldr\Locale::compare');
        self::assertNotEmpty($array);
        self::assertTrue(is_array($array));
    }

    /**
     * Test creating valid locales
     */
    public function testCreateValidLocale(): void
    {
        $locale1 = Locale::create('en-GB');
        $locale2 = Locale::create('en_GB');
        $locale3 = Locale::create('En-gB');

        self::assertinstanceof(get_class(new LocaleEnGb()), $locale1);
        self::assertinstanceof(get_class(new LocaleEnGb()), $locale2);
        self::assertinstanceof(get_class(new LocaleEnGb()), $locale3);
    }

    /**
     * Test creating locales
     */
    public function testCreateInvalidLocale(): void
    {
        try {
            Locale::create('xxx');

            self::assertTrue(false);
        } catch (DomainException $ex) {
            self::assertTrue(true);
        }
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguage(): void
    {
        $available = [
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        ];
        $server  = ['HTTP_ACCEPT_LANGUAGE' => 'it;q=0.8,de,fr,ar'];
        $default = Locale::create('en-US');
        $locale  = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('de'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageNoneMatching(): void
    {
        $available = [
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        ];
        $server  = ['HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar'];
        $default = Locale::create('en-US');
        $locale  = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals($default, $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageDowngrade(): void
    {
        $available = [
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        ];
        $server  = ['HTTP_ACCEPT_LANGUAGE' => 'de-DE'];
        $default = Locale::create('en-US');
        $locale  = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('de'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageDoubleDowngrade(): void
    {
        $available = [
            Locale::create('zh'),
        ];
        $server  = ['HTTP_ACCEPT_LANGUAGE' => 'zh-Hans-CN'];
        $default = Locale::create('en-US');
        $locale  = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('zh'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptChinese(): void
    {
        $available = [
            Locale::create('zh-Hans'),
            Locale::create('zh-Hant'),
            Locale::create('en-US'),
        ];

        $default = Locale::create('en-US');

        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-CN'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-SG'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-HK'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-MO'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-TW'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        // google: ZH-CN，ZH; Q = 0.9
        $server = ['HTTP_ACCEPT_LANGUAGE' => 'ZH-CN，ZH; Q = 0.9'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // QQ移动浏览器: zh-CN，zh-CN; q = 0.8，zh-CN; q = 0.6
        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-CN，zh-CN; q = 0.8，zh-CN; q = 0.6'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // 华为移动浏览器: zh-CN，zh-CN ; q = 0.8，en-US; q = 0.6
        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-CN，zh-CN ; q = 0.8，en-US; q = 0.6'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // UC Mobile Brower: zh-Hans-CN，en-US; q = 0.8
        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-Hans-CN，en-US; q = 0.8'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // Baidu Mobile Brower: zh-CN ，EN-US; q = 0.9
        $server = ['HTTP_ACCEPT_LANGUAGE' => 'zh-CN ，EN-US; q = 0.9'];
        $locale = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageNoneSelected(): void
    {
        $available = [];
        $server    = ['HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar'];
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals($default, $locale);
    }

    public function testAll(): void
    {
        $iterator = Locale::all();
        self::assertIsIterable($iterator);

        $count = 0;
        foreach ($iterator as $item) {
            self::assertTrue($item instanceof Locale\LocaleInterface);
            $count++;
        }
        self::assertSame(911, $count);
    }
}
