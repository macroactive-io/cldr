<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'British Indian Ocean Territory';
    }

    public function code(): string
    {
        return 'IO';
    }
}
