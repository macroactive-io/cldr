<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Egyptian hieroglyphs
 *
 * @psalm-immutable
 */
class ScriptEgyp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyp';
    }

    public function number(): string
    {
        return '050';
    }

    public function unicodeName(): string
    {
        return 'Egyptian_Hieroglyphs';
    }
}
