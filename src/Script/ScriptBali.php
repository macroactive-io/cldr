<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptBali - Representation of the Balinese script.
 * @psalm-immutable
 */
class ScriptBali extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bali';
    }

    public function numerals(): array
    {
        return ['᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'];
    }

    public function number(): string
    {
        return '360';
    }

    public function unicodeName(): string
    {
        return 'Balinese';
    }
}
