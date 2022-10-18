<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Book Pahlavi
 *
 * @psalm-immutable
 */
class ScriptPhlv extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phlv';
    }

    public function number(): string
    {
        return '133';
    }
}
