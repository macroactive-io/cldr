<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageEt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('et', $language->code());
    }
}
