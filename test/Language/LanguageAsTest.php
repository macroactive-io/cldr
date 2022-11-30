<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAs;
use Macroactive\Cldr\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

class LanguageAsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAs();

        self::assertSame(ScriptBeng::class, $language->defaultScript()::class);
        self::assertSame('as', $language->code());
    }
}
