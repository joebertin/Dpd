<?php
declare (strict_types=1);

namespace Ekyna\Component\DpdWs\Enum;

/**
 * Class EType
 * @package Ekyna\Component\DpdWs
 * @author  Etienne Dauvergne <contact@ekyna.com>
 */
final class EType implements EnumInterface
{
    const REVERSE           = 'REVERSE';           // Expédition Retour
    const PROOF             = 'PROOF';             // Preuve de dépôt
    const EPRINT            = 'EPRINT';            // Etiquette DPD
    const EPRINTATTACHEMENT = 'EPRINTATTACHEMENT'; // Récapitulatif d’envoi
    const MASTER            = 'MASTER';
    const COLLECTIONREQUEST = 'COLLECTIONREQUEST';
    const BIC3              = 'BIC3';


    /**
     * @inheritdoc
     */
    public static function getValues(): array
    {
        return [
            static::REVERSE,
            static::PROOF,
            static::EPRINT,
            static::EPRINTATTACHEMENT,
            static::MASTER,
            static::COLLECTIONREQUEST,
            static::BIC3,
        ];
    }

    /**
     * Disabled Constructor.
     */
    private function __construct()
    {
    }
}
