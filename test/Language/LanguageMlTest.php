<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMl;
use Macroactive\Cldr\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

class LanguageMlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMl();

        self::assertSame(ScriptMlym::class, $language->defaultScript()::class);
        self::assertSame('ml', $language->code());
    }
}
