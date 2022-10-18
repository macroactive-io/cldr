<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * N’Ko
 *
 * @psalm-immutable
 */
class ScriptNkoo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nkoo';
    }

    public function numerals(): array
    {
        return ['߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'];
    }

    public function number(): string
    {
        return '165';
    }

    public function unicodeName(): string
    {
        return 'Nko';
    }
}
