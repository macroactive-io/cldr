<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Sharada, Śāradā
 *
 * @psalm-immutable
 */
class ScriptShrd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shrd';
    }

    public function numerals(): array
    {
        return ['𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'];
    }

    public function number(): string
    {
        return '319';
    }

    public function unicodeName(): string
    {
        return 'Sharada';
    }
}
