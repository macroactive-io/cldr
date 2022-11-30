<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSsy;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSsyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSsy();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ssy', $language->code());
    }
}
