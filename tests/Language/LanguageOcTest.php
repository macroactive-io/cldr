<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageOc;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageOcTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageOc();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('oc', $language->code());
    }
}