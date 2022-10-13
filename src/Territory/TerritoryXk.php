<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory XK - Kosovo.
 * Note: this is a provisional assignemnt, used by various European organisations.
 * @psalm-immutable
 */
class TerritoryXk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'XK';
    }
}
