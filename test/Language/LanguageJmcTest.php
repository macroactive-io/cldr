<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageJmc;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageJmcTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJmc();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('jmc', $language->code());
    }
}
