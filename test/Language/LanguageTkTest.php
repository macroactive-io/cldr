<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTk;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageTkTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTk();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('tk', $language->code());
    }
}
