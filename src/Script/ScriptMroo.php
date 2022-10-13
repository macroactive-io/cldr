<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMroo - Representation of the Mro, Mru script.
 * @psalm-immutable
 */
class ScriptMroo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mroo';
    }

    public function number(): string
    {
        return '264';
    }

    public function unicodeName(): string
    {
        return 'Mro';
    }
}
