<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEwoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEwo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ewo', $language->code());
    }
}
