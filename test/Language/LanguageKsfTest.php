<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKsf;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKsfTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKsf();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ksf', $language->code());
    }
}
