<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageVo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageVoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageVo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('vo', $language->code());
    }
}
