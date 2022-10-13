<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJamo - Representation of the Jamo script.
 * @psalm-immutable
 */
class ScriptJamo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jamo';
    }

    public function number(): string
    {
        return '284';
    }
}
