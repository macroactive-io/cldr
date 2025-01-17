<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAst;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAstTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAst();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ast', $language->code());
    }
}
