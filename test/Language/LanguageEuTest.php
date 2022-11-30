<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageEu;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEuTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEu();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('eu', $language->code());
    }
}
