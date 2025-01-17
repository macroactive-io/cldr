<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLuy;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLuyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLuy();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('luy', $language->code());
    }
}
