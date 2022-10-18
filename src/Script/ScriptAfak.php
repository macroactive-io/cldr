<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Afaka
 *
 * @psalm-immutable
 */
class ScriptAfak extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Afak';
    }

    public function number(): string
    {
        return '439';
    }
}
