<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNy;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNy();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ny', $language->code());
    }
}
