<?php
namespace Respect\Validation\Rules;

class NoWhitespace extends AbstractRule
{
    public function validate($input)
    {
        if (false === is_scalar($input)) {
            return false;
        }

        return is_null($input) || !preg_match('#\s#', $input);
    }
}
