This package represents stripped reference data cloned from AWESOME [fisharebest/localization](https://github.com/fisharebest/localization). Main difference:
* removed `Translator`
* PHP version >= 8.1 for the sake of using strict typing, enums, etc
* obviously, changed NS and package name

Localization standards and data
===============================

This package combines localization data from many standards, including
the [Unicode CLDR](http://cldr.unicode.org),
[RFC5646 / IANA subtag registry](https://tools.ietf.org/html/rfc5646),
[ISO-3166](https://en.wikipedia.org/wiki/ISO_3166),
[ISO-639](https://en.wikipedia.org/wiki/ISO_639),
[ISO-15924](http://unicode.org/iso15924/),
etc., to help you produce applications that behave nicely for visitors from
around the world.

Includes definitions for over 800 locales.

Locales, languages, scripts and territories
===========================================

A locale consists of three things: a language, a script and a territory.
Scripts and territories are often implicit from the language.

Normally you would just need to work with locales, and can ignore
languages and scripts.

``` php
$locale = new LocaleJa;         // Create a locale for Japanese.
$locale = Locale::create('ja'); // Create a locale for Japanese, from its code.

$locale->code();                // "ja_JP" (territories are always included in locale codes)
$locale->languageTag();         // "ja" (redundant territories are omitted in tags)
$locale->endonym();             // "日本語" (Japanese name for Japanese)

// Languages - extract from the locale, or create with "new LanguageXx"
$locale->language();            // LanguageJa
$locale->language()->code();    // "ja" (ISO-639 code)

// Scripts - extract from the locale, or create with "new ScriptXxxx"
$locale->script();              // ScriptJpan
$locale->script()->code();      // "Jpan" (ISO-15924 code)
$locale->script()->direction(); // "ltr" (left to right)

// Territories - extract from the locale, or create with "new TerritoryXx"
$locale->territory();           // TerritoryJp
$locale->territory()->code();   // "JP" (ISO-3166 code)

// A few locales can also specify variants.
$locale = new LocaleCaValencia; // The Valencian dialect of Catalan
$locale->variant();             // VariantValencia
$locale->variant()->code();     // "valencia"
```

Localization
============

Create a locale and use it to localize data in your application.

``` php
// Many ways to create locales
$locale = new LocaleEnGb;
$locale = Locale::create('en-GB'); // Use upper/lower case, hyphens/underscores/@
$locale = Locale::httpAcceptLanguage($_SERVER, $available_locales, $default_locale);

// Markup for HTML elements containing this locale
$locale->htmlAttributes();      // lang="ar" dir="rtl"

// Is text written left-to-right or right-to-left
$locale->direction();           // "ltr" or "rtl"

// Days of the week.
$locale->firstDay();            // 0=Sunday, 1=Monday, etc.
$locale->weekendStart();        // 0=Sunday, 1=Monday, etc.
$locale->weekendEnd();          // 0=Sunday, 1=Monday, etc.

// Measurement systems and paper sizes.
$locale->measurementSystem();   // "metric", "UK" or "US"
$locale->paperSize();           // "A4" or "US-Letter"

// Formatting numbers
$locale = new LocaleGr;         // Gujarati
$locale->digits('2014');        // "૨૦૧૪"
$locale = new LocaleItCh;       // Swiss Italian
$locale->number('12345678.9');  // "12'345'678.9"
$locale->percent(0.123);        // "12.3%"

// To sort data properly in MySQL, you need to specify a collation sequence.
// See http://dev.mysql.com/doc/refman/5.7/en/charset-unicode-sets.html
$locale->collation();           // "unicode_ci", "swedish_ci", etc.
```

Plural rules
===========

Plural rules are defined for each locale.  This example shows that although
English and French both have two plural forms, English considers zero as plural,
while french considers it to be singular.

``` php
$locale = new LocaleEn;
$locale->pluralRule()->plurals(); // 2 (English has two plural forms)
$locale->pluralRule()->plural(0); // 1 (zero is plural in English "zero apples")
$locale = new LocaleFr;
$locale->pluralRule()->plurals(); // 2 (French also has two plural forms)
$locale->pluralRule()->plural(0); // 0 (zero is singular in French "zero apple")
```

Updates welcome
===============

Please provide references to sources, such as:

* [Unicode CLDR](https://cldr.unicode.org/)
* [Ethnologue](https://www.ethnologue.com)
* [ScriptSource](https://www.scriptsource.org)
