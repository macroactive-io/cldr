<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Malayalam
 *
 * @psalm-immutable
 */
class ScriptMlym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mlym';
    }

    public function numerals(): array
    {
        return ['൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯'];
    }

    public function number(): string
    {
        return '347';
    }

    public function unicodeName(): string
    {
        return 'Malayalam';
    }
}
