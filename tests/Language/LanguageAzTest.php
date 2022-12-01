<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAz;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAzTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAz();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('az', $language->code());
    }
}
