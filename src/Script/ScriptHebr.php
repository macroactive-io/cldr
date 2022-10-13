<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHebr - Representation of the Hebrew script.
 * @psalm-immutable
 */
class ScriptHebr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hebr';
    }

    public function number(): string
    {
        return '125';
    }

    public function unicodeName(): string
    {
        return 'Hebrew';
    }
}
