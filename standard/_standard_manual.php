<?php

/**
 * (PHP 5.1)<br/>
 * Останавливает работу компилятора. Эта функция может быть полезна при внедрении данных в PHP-скрипты, например, в файлы установки.
 * Начальная позиция данных в байтах может быть определена константой __COMPILER_HALT_OFFSET__, которая может быть определена, только если в файле имеется функция __halt_compiler().
 * <p> Замечание: Функция __halt_compiler() может быть использована только извне.</p>
 * @link https://php.net/manual/ru/function.halt-compiler.php
 * @return void
 */
function PS_UNRESERVE_PREFIX___halt_compiler() {}

/**
 * (PHP 5.1)<br/>
 * Byte position of the data start, defined only if there is a __halt_compiler() presented in the file.
 * @link https://php.net/manual/ru/function.halt-compiler.php
 * @return void
 */
define("__COMPILER_HALT_OFFSET__", 0);

/**
 * Convert hexadecimal string to its binary representation.
 *
 * If the hexadecimal input string is of odd length or invalid hexadecimal string an <code>E_WARNING</code> level error is emitted.
 *
 * @link https://php.net/manual/ru/function.hex2bin.php
 * @param string $string Hexadecimal string to convert.
 * @return string|false The binary representation of the given data or <b>FALSE</b> on failure.
 * @see bin2hex()
 * @see unpack()
 * @since 5.4
 */
function hex2bin(string $string): string|false {};

/**
 * Get or Set the HTTP response code
 * @param int $response_code [optional] The optional response_code will set the response code.
 * @return int|bool The current response code. By default the return value is int(200).
 */
function http_response_code(int $response_code): int|bool {}
