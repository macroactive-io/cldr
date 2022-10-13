<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGran - Representation of the Grantha script.
 * @psalm-immutable
 */
class ScriptGran extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gran';
    }

    public function number(): string
    {
        return '343';
    }

    public function unicodeName(): string
    {
        return 'Grantha';
    }
}
