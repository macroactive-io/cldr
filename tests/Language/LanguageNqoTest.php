<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNqo;
use Macroactive\Cldr\Script\ScriptNkoo;
use PHPUnit\Framework\TestCase;

class LanguageNqoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNqo();

        self::assertSame(ScriptNkoo::class, $language->defaultScript()::class);
        self::assertSame('nqo', $language->code());
    }
}
