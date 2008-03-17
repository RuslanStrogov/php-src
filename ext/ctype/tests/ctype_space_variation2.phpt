--TEST--
Test ctype_space() function : usage variations - different integers
--SKIPIF--
<?php
if( ini_get("unicode.semantics") == "1") {
    die('skip do not run when unicode on');
}
?>
--FILE--
<?php
/* Prototype  : bool ctype_space(mixed $c)
 * Description: Checks for whitespace character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass different integers to ctype_space() to test which character codes are considered
 * valid whitespace characters
 */

echo "*** Testing ctype_space() : usage variations ***\n";

$orig = setlocale(LC_CTYPE, "C");

for ($c = 1; $c < 256; $c++) {
	if (ctype_space($c)) {
		echo "character code $c is a space character\n";
	}
}
setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** Testing ctype_space() : usage variations ***
character code 9 is a space character
character code 10 is a space character
character code 11 is a space character
character code 12 is a space character
character code 13 is a space character
character code 28 is a space character
character code 29 is a space character
character code 30 is a space character
character code 31 is a space character
character code 32 is a space character
character code 133 is a space character
character code 160 is a space character
===DONE===
