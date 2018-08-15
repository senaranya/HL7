<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * MSH (message header) segment class
 *
 * Usage:
 * ```php
 * $seg = new MSH();
 *
 * $seg->setField(9, "ADT^A24");
 * echo $seg->getField(1);
 * ```
 *
 * The MSH is an implementation of the Segment class. The MSH segment is a bit different from other segments, in that
 * the first field is the field separator after the segment name. Other fields thus start counting from 2! The setting
 * for the field separator for a whole message can be changed by the setField method on index 1 of the MSH for that
 * message.  The MSH segment also contains the default settings for field 2, COMPONENT_SEPARATOR, REPETITION_SEPARATOR,
 * ESCAPE_CHARACTER and SUBCOMPONENT_SEPARATOR. These fields default to ^, ~, \ and & respectively.
 *
 * Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-msh-message-header
 */
class MSH extends Segment
{
    /**
     * Create an instance of the MSH segment.
     *
     * If an array argument is provided, all fields will be filled from that array. Note that for composed fields and
     * sub-components, the array may hold sub-arrays and sub-sub-arrays. If the reference is not given, the MSH segment
     * will be created with the MSH 1,2,7,10 and 12 fields filled in for convenience.
     *
     * @param null|array $fields
     * @param null|array $hl7Globals
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function __construct(array $fields = null, array $hl7Globals = null)
    {
        parent::__construct('MSH', $fields);

        // Only fill default fields if no fields array is given
        //
        if (!isset($fields)) {
            if (!\is_array($hl7Globals)) {
                $this->setField(1, '|');
                $this->setField(2, '^~\\&');
                $this->setField(7, strftime('%Y%m%d%H%M%S'));

                // Set ID field
                $this->setField(10, $this->getField(7) . random_int(10000, 99999));
                $this->setField(12, '2.3');
            }
            else {
                $this->setField(1, $hl7Globals['FIELD_SEPARATOR']);
                $this->setField(
                    2,
                    $hl7Globals['COMPONENT_SEPARATOR'] .
                    $hl7Globals['REPETITION_SEPARATOR'] .
                    $hl7Globals['ESCAPE_CHARACTER'] .
                    $hl7Globals['SUBCOMPONENT_SEPARATOR']
                );
                $this->setField(7, strftime('%Y%m%d%H%M%S'));

                // Set ID field
                $this->setField(10, $this->getField(7) . random_int(10000, 99999));
                $this->setField(12, $hl7Globals['HL7_VERSION']);
            }
        }
    }

    /**
     * Set the field specified by index to value.
     *
     * Indices start at 1, to stay with the HL7 standard. Trying to set the value at index 0 has no effect. Setting the
     * value on index 1, will effectively change the value of FIELD_SEPARATOR for the message containing this segment,
     * if the value has length 1; setting the field on index 2 will change the values of COMPONENT_SEPARATOR,
     * REPETITION_SEPARATOR, ESCAPE_CHARACTER and SUBCOMPONENT_SEPARATOR for the message, if the string is of length 4.
     *
     * @param $index Index of field
     * @param string $value
     * @return bool
     * @access public
     */
    public function setField($index, $value = '')
    {
        if ($index === 1) {
            if (\strlen($value) !== 1) {
                return false;
            }
        }

        if ($index === 2) {
            if (\strlen($value) !== 4) {
                return false;
            }
        }

        return parent::setField($index, $value);
    }

    // -------------------- Setter Methods ------------------------------

    public function setSendingApplication($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setSendingFacility($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setReceivingApplication($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setReceivingFacility($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeOfMessage($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setSecurity($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     *
     * Sets message type to MSH segment.
     *
     * If trigger event is already set, then it is preserved
     *
     * Example:
     *
     * If field value is ORU^R01 and you call
     *
     * ```
     * $msh->setMessageType('ORM');
     * ```
     *
     * Then the new field value will be ORM^R01.
     * If it was empty then the new value will be just ORM.
     *
     * @param string $value
     * @param $position
     * @return bool
     */
    public function setMessageType($value, $position = 9)
    {
        $typeField = $this->getField($position);
        if (is_array($typeField) && !empty($typeField[1])) {
            $value = [$value, $typeField[1]];
        }
        return $this->setField($position, $value);
    }

    /**
     *
     * Sets trigger event to MSH segment.
     *
     * If meessage type is already set, then it is preserved
     *
     * Example:
     *
     * If field value is ORU^R01 and you call
     *
     * ```
     * $msh->setTriggerEvent('R30');
     * ```
     *
     * Then the new field value will be ORU^R30.
     * If trigger event was not set then it will set the new value.
     *
     * @param string $value
     * @param $position
     * @return bool
     */
    public function setTriggerEvent($value, $position = 9)
    {
        $typeField = $this->getField($position);
        if (is_array($typeField) && !empty($typeField[0])) {
            $value = [$typeField[0], $value];
        } else {
            $value = [$typeField, $value];
        }
        return $this->setField($position, $value);
    }

    public function setMessageControlId($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setProcessingId($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setVersionId($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setSequenceNumber($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setContinuationPointer($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setAcceptAcknowledgementType($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setApplicationAcknowledgementType($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setCountryCode($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setCharacterSet($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setPrincipalLanguage($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    public function getSendingApplication($position = 3)
    {
        return $this->getField($position);
    }

    public function getSendingFacility($position = 4)
    {
        return $this->getField($position);
    }

    public function getReceivingApplication($position = 5)
    {
        return $this->getField($position);
    }

    public function getReceivingFacility($position = 6)
    {
        return $this->getField($position);
    }

    public function getDateTimeOfMessage($position = 7)
    {
        return $this->getField($position);
    }

    /**
     * ORM / ORU etc.
     * @param $position
     * @return string
     */
    public function getMessageType($position = 9)
    {
        $typeField = $this->getField($position);
        if (!empty($typeField) && is_array($typeField)) {
            return (string) $typeField[0];
        }
        return (string) $typeField;
    }

    public function getTriggerEvent($position = 9)
    {
        $triggerField = $this->getField($position);
        if (!empty($triggerField[1]) && is_array($triggerField)) {
            return $triggerField[1];
        }
        return false;
    }

    public function getMessageControlId($position = 10)
    {
        return $this->getField($position);
    }

    public function getProcessingId($position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get HL7 version, e.g. 2.1, 2.3, 3.0 etc.
     * @param $position
     * @return array|null|string
     */
    public function getVersionId($position = 12)
    {
        return $this->getField($position);
    }
}
