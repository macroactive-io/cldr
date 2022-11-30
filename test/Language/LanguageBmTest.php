<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBm;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bm', $language->code());
    }
}
