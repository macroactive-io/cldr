<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Chakma
 *
 * @psalm-immutable
 */
class ScriptCakm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cakm';
    }

    public function numerals(): array
    {
        return ['𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'];
    }

    public function number(): string
    {
        return '349';
    }

    public function unicodeName(): string
    {
        return 'Chakma';
    }
}
