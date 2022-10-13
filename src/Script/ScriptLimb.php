<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLimb - Representation of the Limbu script.
 * @psalm-immutable
 */
class ScriptLimb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Limb';
    }

    public function numerals(): array
    {
        return ['᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'];
    }

    public function number(): string
    {
        return '336';
    }

    public function unicodeName(): string
    {
        return 'Limbu';
    }
}
