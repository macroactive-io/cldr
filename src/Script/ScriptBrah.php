<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrah - Representation of the Brahmi script.
 * @psalm-immutable
 */
class ScriptBrah extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Brah';
    }

    public function numerals(): array
    {
        return ['𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯'];
    }

    public function number(): string
    {
        return '300';
    }

    public function unicodeName(): string
    {
        return 'Brahmi';
    }
}
