<?php

namespace Http\Forms;
use Core\Validator;
class LoginForms
{
    protected $errors = [];

    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($password, 7, 255)) {
            $this->errors['password'] = 'Please provide a password with at least 7 characters.';
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}