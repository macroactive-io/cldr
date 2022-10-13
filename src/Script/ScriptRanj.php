<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRanj - Representation of the Ranjana script.
 * @psalm-immutable
 */
class ScriptRanj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ranj';
    }

    public function number(): string
    {
        return '303';
    }
}
