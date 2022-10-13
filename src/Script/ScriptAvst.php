<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAvst - Representation of the Avestan script.
 * @psalm-immutable
 */
class ScriptAvst extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Avst';
    }

    public function number(): string
    {
        return '134';
    }

    public function unicodeName(): string
    {
        return 'Avestan';
    }
}
