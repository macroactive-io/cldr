<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMtTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mt', $language->code());
    }
}
