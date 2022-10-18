<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Syriac (Eastern variant)
 *
 * @psalm-immutable
 */
class ScriptSyrn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syrn';
    }

    public function number(): string
    {
        return '136';
    }
}
