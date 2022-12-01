<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKy;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKy();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ky', $language->code());
    }
}
