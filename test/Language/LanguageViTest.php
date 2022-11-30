<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageVi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageViTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageVi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('vi', $language->code());
    }
}
