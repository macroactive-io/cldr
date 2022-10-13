<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPsin - Representation of the Proto-Sinaitic script.
 * @psalm-immutable
 */
class ScriptPsin extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Psin';
    }

    public function number(): string
    {
        return '103';
    }
}
