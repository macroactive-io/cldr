<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Syriac (Estrangelo variant)
 *
 * @psalm-immutable
 */
class ScriptSyre extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syre';
    }

    public function number(): string
    {
        return '138';
    }
}
