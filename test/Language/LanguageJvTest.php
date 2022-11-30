<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageJv;
use Macroactive\Cldr\Script\ScriptJava;
use PHPUnit\Framework\TestCase;

class LanguageJvTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJv();

        self::assertSame(ScriptJava::class, $language->defaultScript()::class);
        self::assertSame('jv', $language->code());
    }
}
