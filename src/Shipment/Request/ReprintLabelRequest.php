<?php

namespace Ekyna\Component\Dpd\Shipment\Request;

use Ekyna\Component\Dpd\Shipment\Model\Manifest;

/**
 * Class ReprintLabelRequest
 * @author Etienne Dauvergne <contact@ekyna.com>
 */
class ReprintLabelRequest extends Manifest implements RequestInterface
{
    /** @var int */
    private $labelStartPosition = 1;

    /** @var string */
    private $parcelNumber;


    /**
     * Returns the label start position.
     *
     * @return int
     */
    public function getLabelStartPosition(): int
    {
        return $this->labelStartPosition;
    }

    /**
     * Sets the label start position.
     *
     * @param int $position
     *
     * @return ReprintLabelRequest
     */
    public function setLabelStartPosition(int $position): self
    {
        $this->labelStartPosition = $position;

        return $this;
    }

    /**
     * Returns the parcel number.
     *
     * @return string
     */
    public function getParcelNumber(): string
    {
        return $this->parcelNumber;
    }

    /**
     * Sets the parcel number.
     *
     * @param string $number
     *
     * @return ReprintLabelRequest
     */
    public function setParcelNumber(string $number): self
    {
        $this->parcelNumber = $number;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValidationGroups(): array
    {
        return ['Default'];
    }
}
