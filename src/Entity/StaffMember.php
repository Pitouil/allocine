<?php

namespace App\Entity;

abstract class StaffMember
{
    protected sting $firstName;

    protected string $lastName;

    /**
     * @return sting
     */
    public function getFirstName(): sting
    {
        return $this->firstName;
    }

    /**
     * @param sting $firstName
     * @return StaffMember
     */
    public function setFirstName(sting $firstName): StaffMember
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