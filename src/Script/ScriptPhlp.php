<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlp - Representation of the Psalter Pahlavi script.
 * @psalm-immutable
 */
class ScriptPhlp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phlp';
    }

    public function number(): string
    {
        return '132';
    }

    public function unicodeName(): string
    {
        return 'Psalter_Pahlavi';
    }
}
