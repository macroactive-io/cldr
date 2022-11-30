<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ro', $language->code());
    }
}
