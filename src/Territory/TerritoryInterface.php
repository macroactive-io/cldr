<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Interface TerritoryInterface - Representation of a geographic area.
 *
 * @psalm-immutable
 */
interface TerritoryInterface
{
    /**
     * The ISO639 or M.49 code for this territory.
     */
    public function code(): string;

    /**
     * What is the first day of the week?
     * 0 = Sunday
     * 1 = Monday
     * etc.
     */
    public function firstDay(): int;

    /**
     * Does this territory prefer 'metric', 'UK' or 'US' measurements.
     */
    public function measurementSystem(): string;

    /**
     * Does this territory prefer 'A4' or 'US-Letter' paper.
     */
    public function paperSize(): string;

    /**
     * What is the first day of the weekend?
     * 0 = Sunday
     * 1 = Monday
     * etc.
     */
    public function weekendStart(): int;

    /**
     * What is the last day of the weekend?
     * 0 = Sunday
     * 1 = Monday
     * etc.
     */
    public function weekendEnd(): int;
}
