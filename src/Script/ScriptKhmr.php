<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Khmer
 *
 * @psalm-immutable
 */
class ScriptKhmr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Khmr';
    }

    public function numerals(): array
    {
        return ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];
    }

    public function number(): string
    {
        return '355';
    }

    public function unicodeName(): string
    {
        return 'Khmer';
    }
}
