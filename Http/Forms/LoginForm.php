<?php

// Purpose: Encapsulates login form validation and error collection.
namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected array $errors = [];

    public function validate($email, $password): bool
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($password, 7, 255)) {
            $this->errors['password'] = 'Please provide a password with at least 7 characters.';
        }

        return empty($this->errors);
    }

    public function error(string $field, string $message): self
    {
        $this->errors[$field] = $message;

        return $this;
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
