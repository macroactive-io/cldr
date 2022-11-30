<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMer;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMerTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMer();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mer', $language->code());
    }
}
