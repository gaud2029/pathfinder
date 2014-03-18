@echo off
vendor\bin\codecept run unit %1 --skip-group database
