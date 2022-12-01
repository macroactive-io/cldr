<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mg', $language->code());
    }
}
