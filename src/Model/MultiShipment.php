<?php
declare (strict_types=1);

namespace Ekyna\Component\Dpd\Model;

/**
 * Class MultiShipment
 * @package Ekyna\Component\Dpd
 * @author  Etienne Dauvergne <contact@ekyna.com>
 */
class MultiShipment implements OutputInterface
{
    /**
     * @var Shipment
     */
    public $mastershipment;

    /**
     * @var ArrayOfShipment
     */
    public $shipments;


    /**
     * @inheritdoc
     */
    public function initialize(): void
    {
        if ($this->shipments) {
            $this->shipments->initialize();
        }
    }
}
