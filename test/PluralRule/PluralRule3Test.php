<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule3 class
 *
 * @coversNothing
 */
class PluralRule3Test extends TestCase
{
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule3();

        self::assertSame(3, $plural_rule->plurals());
    }

    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule3();

        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(0, $plural_rule->plural(21));
        self::assertSame(0, $plural_rule->plural(31));
        self::assertSame(1, $plural_rule->plural(11));
        self::assertSame(1, $plural_rule->plural(111));
        self::assertSame(1, $plural_rule->plural(2));
        self::assertSame(1, $plural_rule->plural(3));
        self::assertSame(1, $plural_rule->plural(4));
        self::assertSame(2, $plural_rule->plural(0));
    }
}
