<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageOs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageOsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageOs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('os', $language->code());
    }
}
