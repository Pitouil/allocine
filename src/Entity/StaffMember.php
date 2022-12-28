<?php

namespace App\Entity;

abstract class StaffMember
{
    protected string $firstName;

    protected string $lastName;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return StaffMember
     */
    public function setFirstName(string $firstName): StaffMember
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return StaffMember
     */
    public function setLastName(string $lastName): StaffMember
    {
        $this->lastName = $lastName;
        return $this;
    }


}