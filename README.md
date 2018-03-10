# Uncovered by Infection, but covered by PHPUnit

An example of a strange behaviour when using multi line arrays tested by [Infection](https://github.com/infection/infection) and [PHPUnit](https://phpunit.de/).

`infection-log.txt` contains 2 "Not covered mutants". That's strange because `MyClass::multiLineArray()` and `MyClass::singleLineArray()` are exactly the same except from the formatting.

[Created an issue at Infection](https://github.com/infection/infection/issues/214)
