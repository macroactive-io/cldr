<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory014 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Eastern Africa';
    }

    public function code(): string
    {
        return '014';
    }
}
