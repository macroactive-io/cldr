<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class AbstractScript - Representation of a writing system.
 * @psalm-immutable
 */
abstract class AbstractScript implements ScriptInterface
{
    public function numerals(): array
    {
        return [];
    }

    public function direction(): ScriptDirection
    {
        return substr_compare($this->number(), '1', 0, 1) ? ScriptDirection::LTR : ScriptDirection::RTL;
    }

    abstract public function number(): string;

    public function unicodeName(): ?string
    {
        return null;
    }
}
