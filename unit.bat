@echo off
vendor\bin\codecept run unit %1 --colors --coverage --html
