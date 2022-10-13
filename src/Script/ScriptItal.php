<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptItal - Representation of the Old Italic (Etruscan, Oscan, etc.) script.
 * @psalm-immutable
 */
class ScriptItal extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ital';
    }

    public function number(): string
    {
        return '210';
    }

    public function unicodeName(): string
    {
        return 'Old_Italic';
    }
}
