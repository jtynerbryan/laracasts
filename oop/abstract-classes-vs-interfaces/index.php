<?php

/* Interfaces define a public api (contract) that any class implementation must adhere to
No logic is ever stored in an Interface

Abstract classes pass down functionality that multiple sub-classes use
Abstract classes also give you the ability to define abstract protected methods that must be defined in sub-classes
 */

interface Provider
{
    public function getAuthorizationUrl();
}

abstract class AbstractProvider
{
    protected function related()
    {

    }
}

class FacebookProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return '';
    }
}
