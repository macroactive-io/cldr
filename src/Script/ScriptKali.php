<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptKali - Representation of the Kayah Li script.
 * @psalm-immutable
 */
class ScriptKali extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kali';
    }

    public function numerals(): array
    {
        return ['꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'];
    }

    public function number(): string
    {
        return '357';
    }

    public function unicodeName(): string
    {
        return 'Kayah_Li';
    }
}
