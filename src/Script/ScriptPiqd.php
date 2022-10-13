<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPiqd - Representation of the Piqd script.
 * @psalm-immutable
 */
class ScriptPiqd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Piqd';
    }

    public function number(): string
    {
        return '293';
    }
}
