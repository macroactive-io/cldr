<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Territory\TerritoryInterface;

class IanaSubtagRegistryTest extends TestCase
{
    /**
     * Test the language tags against the IANA subtag registry
     * @group ab
     * @large
     */
    public function testLanguageTags()
    {
        $iana = $this->getSubtagRegistry();
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: language/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $subtag = $match[1];
            $class = '\\Macroactive\\Cldr\\Language\\Language' . ucfirst(strtolower($match[1]));
            // The registry contains 8000 languages, and we aren't interested in most of them.
            if (class_exists($class)) {
                /** @var LanguageInterface $language */
                $language = new $class();

                // Deprecated tags should use their new, preferred value.
                if (preg_match('/Preferred-Value: ([a-z]+)/', $data, $match2)) {
                    $subtag = $match2[1];
                }
                $debug = implode(' | ', [$subtag, $match[1], $match2[1] ?? '']);

                self::assertSame($subtag, $language->code(), $debug);
            }
        }
    }

    /**
     * Test the script tags against the IANA subtag registry
     *
     * @large
     */
    public function testScriptTags()
    {
        $iana = $this->getSubtagRegistry();
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: script/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = '\\Macroactive\\Cldr\\Script\\Script' . ucfirst(strtolower($match[1]));
            /** @var ScriptInterface $script */
            $script = new $class();

            self::assertSame($match[1], $script->code());
        }
    }

    /**
     * Test the territory (region) tags against the IANA subtag registry
     *
     * @large
     */
    public function testTerritoryTags()
    {
        $iana = $this->getSubtagRegistry();
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: region/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = '\\Macroactive\\Cldr\\Territory\\Territory' . ucfirst(strtolower($match[1]));
            /** @var TerritoryInterface $territory */
            $territory = new $class();

            self::assertSame($match[1], $territory->code());
        }
    }
}