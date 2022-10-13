<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Zanabazar Square script.
 * @psalm-immutable
 */
class ScriptZanb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zanb';
    }

    public function number(): string
    {
        return '339';
    }

    public function unicodeName(): string
    {
        return 'Zanabazar_Square';
    }
}
