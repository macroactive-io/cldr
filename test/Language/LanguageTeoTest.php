<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTeo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageTeoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTeo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('teo', $language->code());
    }
}
