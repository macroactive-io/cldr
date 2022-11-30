<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\PluralRule;

use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\PluralRule\PluralRuleUnknown;
use PHPUnit\Framework\TestCase;
use function basename;
use function glob;
use function sprintf;

class PluralExamplesTest extends TestCase
{
    public function testPluralExamples(): void
    {
        foreach (glob(__DIR__ . '/../../src/PluralRule/*.php', GLOB_MARK|GLOB_ERR) as $file) {
            $class = 'Macroactive\\Cldr\\PluralRule\\' . basename($file, '.php');

            if (PluralRuleUnknown::class === $class || PluralRuleInterface::class === $class) {
                continue;
            }

            $instance = new $class;
            $examples = array_values($instance->pluralExamples());
            self::assertCount($instance->plurals(), $examples, sprintf('Count of plural forms differs to examples count in class %s', $class));

            foreach ($examples as $pluralForm => $pluralSamples) {
                foreach ($pluralSamples as $sample) {
                    self::assertSame($pluralForm, $instance->plural($sample), sprintf('Plural form for number "%s" is expected to be "%s" in class %s', $sample, $pluralForm, $class));
                }
            }
        }

    }
}
