<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHatr - Representation of the Hatran script.
 * @psalm-immutable
 */
class ScriptHatr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hatr';
    }

    public function number(): string
    {
        return '127';
    }

    public function unicodeName(): string
    {
        return 'Hatran';
    }
}
