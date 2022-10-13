<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptToto - Representation of the Toto script.
 * @psalm-immutable
 */
class ScriptToto extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Toto';
    }

    public function number(): string
    {
        return '294';
    }

    public function unicodeName(): string
    {
        return 'Toto';
    }
}
