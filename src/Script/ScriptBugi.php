<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBugi - Representation of the Buginese script.
 * @psalm-immutable
 */
class ScriptBugi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bugi';
    }

    public function number(): string
    {
        return '367';
    }

    public function unicodeName(): string
    {
        return 'Buginese';
    }
}
