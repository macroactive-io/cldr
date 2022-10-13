<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTang - Representation of the Tangut script.
 * @psalm-immutable
 */
class ScriptTang extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tang';
    }

    public function number(): string
    {
        return '520';
    }

    public function unicodeName(): string
    {
        return 'Tangut';
    }
}
