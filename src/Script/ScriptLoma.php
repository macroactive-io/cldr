<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Loma
 *
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
