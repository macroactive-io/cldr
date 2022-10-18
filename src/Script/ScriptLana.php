<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptLana - Representation of the Tai Tham (Lanna) script.
 * @psalm-immutable
 */
class ScriptLana extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lana';
    }

    public function numerals(): array
    {
        return ['᪀', '᪁', '᪂', '᪃', '᪄', '᪅', '᪆', '᪇', '᪈', '᪉'];
    }

    public function number(): string
    {
        return '351';
    }

    public function unicodeName(): string
    {
        return 'Tai_Tham';
    }
}
