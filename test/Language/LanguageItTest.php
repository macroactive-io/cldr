<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageItTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('it', $language->code());
    }
}
