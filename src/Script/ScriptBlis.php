<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBlis - Representation of the Blissymbols script.
 * @psalm-immutable
 */
class ScriptBlis extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Blis';
    }

    public function number(): string
    {
        return '550';
    }
}
