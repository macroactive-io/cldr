<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageFf;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageFfTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFf();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ff', $language->code());
    }
}
