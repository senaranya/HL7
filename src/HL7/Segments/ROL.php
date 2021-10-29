<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * ROL: Role Segment
 *
 * The role segment contains the data necessary to add, update, correct, and delete from the record persons involved,
 * as well as their functional involvement with the activity being transmitted.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/ROL
 */
class ROL extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('ROL', $fields);
    }

    public function setID($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setActionCode($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    // See: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Fields/ROL.3
    public function setRole($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setRolePerson($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setRoleBeginDateTime($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setRoleEndDateTime($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setRoleDuration($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setRoleActionReason($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setProviderType($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setOrganizationUnitType($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setOfficeHomeAddress($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setPhone($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getActionCode(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getRole(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getRolePerson(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getRoleBeginDateTime(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getRoleEndDateTime(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getRoleDuration(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getRoleActionReason(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getProviderType(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getOrganizationUnitType(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getOfficeHomeAddress(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getPhone(int $position = 12)
    {
        return $this->getField($position);
    }
}
