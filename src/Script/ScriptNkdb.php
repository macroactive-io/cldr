<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNkdb - Representation of the Naxi Dongba script.
 * @psalm-immutable
 */
class ScriptNkdb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nkdb';
    }

    public function number(): string
    {
        return '085';
    }
}
