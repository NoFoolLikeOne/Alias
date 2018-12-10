<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class EnginesRecharge extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Engines Recharge';

    /**
     * List of categories
     */
    static protected $have          = [
        'Power Coupling',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Core Internal > Power Distributor
          3500  => null, // Not in category
          3501  => 0.4,
          3502  => 0.5,
          3503  => 0.5,
          3504  => null,
          3505  => 0.6,

          3509  => null,

          3511  => null,
          3512  => 0.6,
          3513  => null,
          3514  => null,
          3515  => 0.8,

          3519  => null,

          3521  => null,
          3522  => 1,
          3523  => null,
          3524  => null,
          3525  => 1.3,

          3529  => null,

          3531  => 1.3,
          3532  => 1.4,
          3533  => 1.6,
          3534  => 1.8,
          3535  => 1.9,

          3539  => null,

          3541  => null,
          3542  => 1.9,
          3543  => 2.1,
          3544  => 2.3,
          3545  => 2.5,

          3549  => null,

          3551  => 2.2,
          3552  => 2.4,
          3553  => 2.7,
          3554  => 3,
          3555  => 3.2,

          3559  => null,

          3561  => 2.6,
          3562  => 3,
          3563  => 3.3,
          3564  => 3.6,
          3565  => 4,

          3569  => null,

          3571  => null,
          3572  => 3.6,
          3573  => 4,
          3574  => 4.4,
          3575  => 4.8,

          3579  => null,
    ];
}
