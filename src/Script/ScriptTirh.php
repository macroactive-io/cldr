<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTirh - Representation of the Tirhuta script.
 * @psalm-immutable
 */
class ScriptTirh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tirh';
    }

    public function number(): string
    {
        return '326';
    }

    public function unicodeName(): string
    {
        return 'Tirhuta';
    }
}
