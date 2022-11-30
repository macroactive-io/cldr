<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMas;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMasTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMas();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mas', $language->code());
    }
}
