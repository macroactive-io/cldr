<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageGuz;

class LanguageGuzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageGuz();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('guz', $language->code());
    }
}
