<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLoma - Representation of the Loma script.
 * @psalm-immutable
 */
class ScriptLoma extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Loma';
    }

    public function number(): string
    {
        return '437';
    }
}
