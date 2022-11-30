<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageFur;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageFurTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFur();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('fur', $language->code());
    }
}
