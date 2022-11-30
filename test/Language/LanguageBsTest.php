<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageBs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageBsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bs', $language->code());
    }
}
