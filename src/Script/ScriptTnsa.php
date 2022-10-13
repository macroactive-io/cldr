<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTnsa - Representation of the Tangsa script.
 * @psalm-immutable
 */
class ScriptTnsa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tnsa';
    }

    public function number(): string
    {
        return '275';
    }

    public function unicodeName(): string
    {
        return 'Tangsa';
    }
}
