<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKsb;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKsbTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKsb();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ksb', $language->code());
    }
}
