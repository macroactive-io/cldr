<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageRm;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageRmTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageRm();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('rm', $language->code());
    }
}
