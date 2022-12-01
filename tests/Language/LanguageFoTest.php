<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageFo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageFoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('fo', $language->code());
    }
}
