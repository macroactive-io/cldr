<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBali - Representation of the Balinese script.
 */
class ScriptBali extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bali';
    }

    public function numerals()
    {
        return ['᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'];
    }

    public function number()
    {
        return '360';
    }

    public function unicodeName()
    {
        return 'Balinese';
    }
}
