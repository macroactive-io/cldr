<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Takri, Ṭākrī, Ṭāṅkrī
 *
 * @psalm-immutable
 */
class ScriptTakr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Takr';
    }

    public function numerals(): array
    {
        return ['𑛀', '𑛁', '𑛂', '𑛃', '𑛄', '𑛅', '𑛆', '𑛇', '𑛈', '𑛉'];
    }

    public function number(): string
    {
        return '321';
    }

    public function unicodeName(): string
    {
        return 'Takri';
    }
}
