<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBrx;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBrxTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBrx();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('brx', $language->code());
    }
}
