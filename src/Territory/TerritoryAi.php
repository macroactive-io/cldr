<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AI - Anguilla
 *
 * @psalm-immutable
 */
class TerritoryAi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AI';
    }
}
