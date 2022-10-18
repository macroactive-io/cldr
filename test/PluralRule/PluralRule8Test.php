<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule8 class
 *
 * @coversNothing
 */
class PluralRule8Test extends TestCase
{
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule8();

        self::assertSame(3, $plural_rule->plurals());
    }

    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule8();

        self::assertSame(2, $plural_rule->plural(0));
        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(1, $plural_rule->plural(2));
        self::assertSame(1, $plural_rule->plural(3));
        self::assertSame(1, $plural_rule->plural(4));
        self::assertSame(2, $plural_rule->plural(5));
        self::assertSame(2, $plural_rule->plural(6));
        self::assertSame(2, $plural_rule->plural(7));
        self::assertSame(2, $plural_rule->plural(8));
        self::assertSame(2, $plural_rule->plural(9));
        self::assertSame(2, $plural_rule->plural(10));
    }
}
