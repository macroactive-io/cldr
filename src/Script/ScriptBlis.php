<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Blissymbols
 *
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
