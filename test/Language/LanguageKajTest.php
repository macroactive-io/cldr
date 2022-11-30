<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKaj;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKajTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKaj();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kaj', $language->code());
    }
}
