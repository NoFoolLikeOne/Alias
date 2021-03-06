<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Bay extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Bay';
    
    /**
     * List of categories
     */
    static protected $have          = [
        'Fighter Hangar',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Optional Internal > Fighter Hangar
          5541  => 1,
        
          5551  => 2,
        
          5561  => 2,
    ];
}