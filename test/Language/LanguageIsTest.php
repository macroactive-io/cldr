<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('is', $language->code());
    }
}
