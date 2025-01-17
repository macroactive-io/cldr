<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMgh;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMghTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMgh();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mgh', $language->code());
    }
}
