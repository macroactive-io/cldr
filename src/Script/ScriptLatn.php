<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatn - Representation of the Latin script.
 * @psalm-immutable
 */
class ScriptLatn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latn';
    }

    public function number(): string
    {
        return '215';
    }

    public function unicodeName(): string
    {
        return 'Latin';
    }
}
