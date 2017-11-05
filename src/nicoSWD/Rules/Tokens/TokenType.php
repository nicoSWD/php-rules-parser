<?php

/**
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/nicoSWD
 * @author      Nicolas Oelgart <nico@oelgart.com>
 */
namespace nicoSWD\Rules\Tokens;

class TokenType
{
    const INT_VALUE = 2;
    const VALUE = 4;
    const LOGICAL = 8;
    const VARIABLE = 16;
    const COMMENT = 32;
    const SPACE = 64;
    const UNKNOWN = 128;
    const PARENTHESIS = 256;
    const SQUARE_BRACKET = 512;
    const COMMA = 1024;
    const METHOD = 2048;
    const FUNCTION = 8096;
    const OPERATOR = 16192;
}
