<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrai - Representation of the Braille script.
 * @psalm-immutable
 */
class ScriptBrai extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Brai';
    }

    public function number(): string
    {
        return '570';
    }

    public function unicodeName(): string
    {
        return 'Braille';
    }
}
