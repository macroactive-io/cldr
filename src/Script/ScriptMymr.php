<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Myanmar
 *
 * @psalm-immutable
 */
class ScriptMymr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mymr';
    }

    public function numerals(): array
    {
        return ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'];
    }

    public function number(): string
    {
        return '350';
    }

    public function unicodeName(): string
    {
        return 'Myanmar';
    }
}
