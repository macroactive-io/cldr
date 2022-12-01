<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageEe;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEe();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ee', $language->code());
    }
}
