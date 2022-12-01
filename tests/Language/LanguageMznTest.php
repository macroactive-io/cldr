<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMzn;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageMznTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMzn();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('mzn', $language->code());
    }
}
