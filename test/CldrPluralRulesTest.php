<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use Macroactive\Cldr\Locale;

use function explode;
use function implode;
use function preg_match;

class CldrPluralRulesTest extends TestCase
{
    /**
     * Test plural rules
     *
     * @large
     */
    public function testPluralRules()
    {
        $cldr = simplexml_load_string(self::getPluralsData());

        foreach ($cldr->xpath("/supplementalData/plurals[@type='cardinal']/pluralRules") as $plural_rule) {
            $locale_codes = explode(' ', (string) $plural_rule->attributes()->locales);
            $plurals      = $plural_rule->pluralRule;
            foreach ($locale_codes as $locale_code) {
                // The following CLDR definitions/examples are incompatible with the accepted gettext ones.
                switch ($locale_code) {
                    case 'root':  // This isn't a locale
                    case 'se':    // CLDR has (1) (2) (other), whereas gettext has (0,1) (other)
                    case 'sh':    // This code (Serbo-croat) is deprecated
                        continue 2;
                }
                $locale = Locale::create($locale_code);

                $exampleForms = array_keys($locale->pluralRule()->pluralExamples());
                $pluralRulePosition = 0;

                $treatManyAsOther = false;

                foreach ($plurals as $pluralExamples) {
                    if ('other' === (string) $pluralExamples->attributes()['count'] && !str_contains((string) $pluralExamples, '@integer')) {
                        $treatManyAsOther = true;
                        break;
                    }
                }
                foreach ($plurals as $plural_examples) {
                    if (preg_match('/@integer ([^@]+)/', (string) $plural_examples, $match) !== 1) {
                        continue;
                    }

                    $pluralForm = (string) $plural_examples->attributes()['count'];

                    if ($treatManyAsOther && 'many' === $pluralForm) {
                        // pl, be, ru… have no @integer in 'other', but icu/MessageFormatter requires 'other' and fails on 'many'
                        $pluralForm = 'other';
                    }

                    $rules = explode(', ', $match[1]);

                    foreach ($rules as $rule) {
                        $rule = trim($rule);

                        if ('…' === $rule) {
                            continue;
                        }

                        if (str_contains($rule, '~')) {
                            [$low, $high] = explode('~', $rule);
                        } else {
                            $low = $high = str_replace(['c3', 'c6'], ['000', '000000'], $rule);
                        }

                        $low  = (int) $low;
                        $high = (int) $high;

                        for ($number = $low; $number <= $high; $number++) {
                            $debug = implode('|', [
                                $locale_code,
                                $pluralRulePosition,
                                $pluralForm,
                                $rule,
                                $low, $high
                            ]);

                            self::assertSame($pluralForm, $exampleForms[$locale->pluralRule()->plural($number)], $debug);
                        }
                    }

                    ++$pluralRulePosition;
                }
                self::assertSame($pluralRulePosition, $locale->pluralRule()->plurals(), $locale_code);
            }
        }
    }
}
