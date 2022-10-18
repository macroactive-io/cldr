<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * XK - Kosovo
 * Note: this is a provisional assignemnt, used by various European organisations.
 *
 * @psalm-immutable
 */
class TerritoryXk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'XK';
    }
}
