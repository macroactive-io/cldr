<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBr;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('br', $language->code());
    }
}
