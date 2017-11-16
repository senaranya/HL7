<?php

namespace Aranyasen\HL7;

use InvalidArgumentException;

class Segment
{
    protected $fields;

    /**
     * Create a segment. A segment may be created with just a name or a name and an array of field
     * values. The segment name should be a standard HL7 segment (e.g. MSH / PID etc.) that is three characters long, and
     * upper case. If an array is given, all fields will be filled from that array. Note that for composed fields and
     * sub-components, the array may hold sub-arrays and sub-sub-arrays. Repeated fields can not be supported the same
     * way, since we can't distinguish between composed fields and repeated fields.
     *
     * Example: <code>
     *
     * $seg = new Segment("PID");
     *
     * $seg->setField(3, "12345678");
     * echo $seg->getField(1);
     * </code>
     *
     * @author     Aranya Sen
     * @param string $name Name of the segment
     * @param array|null $fields Fields for segment
     * @throws \InvalidArgumentException
     */
    public function __construct(string $name, array $fields = null)
    {
        // Is the name 3 upper case characters?
        if ((!$name) || (\strlen($name) !== 3) || (strtoupper($name) !== $name)) {
            throw new InvalidArgumentException('Name should be 3 characters, uppercase');
        }

        $this->fields = [];

        $this->fields[0] = $name;

        if (\is_array($fields)) {
            foreach ($fields as $i => $value) {
                $this->setField($i + 1, $value);
            }
        }
    }

    /**
     * Set the field specified by index to value, and return some true value if the operation succeeded. Indices start
     * at 1, to stay with the HL7 standard. Trying to set the value at index 0 has no effect. The value may also be a
     * reference to an array (that may itself contain arrays) to support composed fields (and sub-components).
     *
     * To set a field to the HL7 null value, instead of omitting a field, can
     * be achieved with the _Net_HL7_NULL type, like:
     * <code>
     *   $segment->setField(8, $_Net_HL7_NULL);
     * </code>
     * This will render the field as the double quote ("").
     * If values are not provided at all, the method will just return.
     *
     * @param int $index Index to set
     * @param string $value Value for field
     * @return boolean
     */
    public function setField(int $index, $value = ''): bool
    {
        if (!($index && $value)) {
            return false;
        }

        // Fill in the blanks...
        for ($i = count($this->fields); $i < $index; $i++) {
            $this->fields[$i] = '';
        }

        $this->fields[$index] = $value;

        return true;
    }

    /**
     * Get the field at index. If the field is a composed field, you might
     * ask for the result to be an array like so:
     * <code>
     * $subfields = $seg->getField(9)
     * </code>
     * otherwise the thing returned will be a reference to an array.
     *
     * @param int $index Index of field
     * @return null|string|array The value of the field
     */
    public function getField(int $index)
    {
        return $this->fields[$index] ?? null;
    }

    /**
     * Get the number of fields for this segment, not including the name
     *
     * @return int number of fields
     * @access public
     */
    public function size(): int
    {
        return count($this->fields) - 1;
    }

    /**
     * Get the fields in the specified range, or all if nothing specified. If
     * only the 'from' value is provided, all fields from this index till the
     * end of the segment will be returned.
     *
     * @param int $from Start range at this index
     * @param int|null $to Stop range at this index
     * @return array List of fields
     * @access public
     */
    public function getFields(int $from = 0, int $to = null): array
    {
        if (!$to) {
            $to = count($this->fields);
        }
        return \array_slice($this->fields, $from, $to - $from + 1);
    }

    /**
     * Get the name of the segment. This is basically the value at index 0
     *
     * @return mixed Name of segment
     * @access public
     */
    public function getName(): string
    {
        return $this->fields[0];
    }
}
