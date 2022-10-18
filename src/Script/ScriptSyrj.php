<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Syriac (Western variant)
 *
 * @psalm-immutable
 */
class ScriptSyrj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syrj';
    }

    public function number(): string
    {
        return '137';
    }
}
