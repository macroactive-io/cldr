<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Interface ScriptInterface - Representation of a writing system.
 * @psalm-immutable
 */
interface ScriptInterface
{
    /**
     * The ISO15924 code for this script.
     * @return non-empty-string
     */
    public function code(): string;

    /**
     * Is the script usually written left-to-right “ltr” or right-to-left “rtl”.
     *
     * @return 'ltr'|'rtl'
     */
    public function direction(): string;

    /**
     * The ISO15924 number for this script.
     * @return non-empty-string
     */
    public function number(): string;

    /**
     * What are the default digits used by this script?
     * This is an array of translations from Hindu-Arabic (0123456789)
     * symbols to other symbols.  For English, etc., this array is empty.
     * Some locales (e.g. Persian) use their own digits, rather than
     * the default digits of their script.
     *
     * @return non-empty-string[]
     */
    public function numerals(): array;

    /**
     * The Unicode name (aka “property value alias”) for this script, or
     * null if one does not exist.
     * @return non-empty-string|null
     */
    public function unicodeName(): ?string;
}
