<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageUg;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

class LanguageUgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageUg();

        self::assertSame(ScriptArab::class, $language->defaultScript()::class);
        self::assertSame('ug', $language->code());
    }
}
