<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTale - Representation of the Tai Le script.
 * @psalm-immutable
 */
class ScriptTale extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tale';
    }

    public function number(): string
    {
        return '353';
    }

    public function unicodeName(): string
    {
        return 'Tai_Le';
    }
}
