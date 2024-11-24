<?php

namespace IgorKachko\OtusComposerPackage;

class EmailValidator
{
    public function isEmailAndDnsValid($email): bool {
        return $this->isEmailFormatValid($email) && $this->isDnsMxExists($email);
    }

    public function isEmailFormatValid(string $email): bool {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    public function isDnsMxExists(string $email): bool {
        $explodedEmail = explode("@", $email);
        if(count($explodedEmail) !== 2)
            return false;

        return getmxrr($explodedEmail[1], $hosts);
    }
}