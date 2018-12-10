<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class KineticResistance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Kinetic Resistance';

    /**
     * List of categories
     */
    static protected $have          = [
        // Bulkheads
        128049267,  // Adder
        128816588,  // Alliance Challenger
        128816574,  // Alliance Chieftain
        128816581,  // Alliance Crusader
        128049363,  // Anaconda
        128049303,  // Asp Explorer
        128672276,  // Asp Scout
        128049345,  // Beluga Liner
        128049279,  // Cobra MkIII
        128672262,  // Cobra MkIV
        128671831,  // Diamondback Explorer
        128671217,  // Diamondback Scout
        128049291,  // Dolphin
        128049255,  // Eagle
        128672145,  // Federal Assault Ship
        128049369,  // Federal Corvette
        128049321,  // Federal Dropship
        128672152,  // Federal Gunship
        128049351,  // Fer-de-Lance
        128049261,  // Hauler
        128049315,  // Imperial Clipper
        128671223,  // Imperial Courrier
        128049375,  // Imperial Cutter
        128672138,  // Imperial Eagle
        128672269,  // Keelback
        128816567,  // Krait MkII
        128839281,  // Krait Phantom
        128915979,  // Mamba
        128049327,  // Orca
        128049339,  // Python
        128049249,  // Sidewinder
        128049285,  // Type-6 Transporter
        128049297,  // Type-7 Transporter
        128049333,  // Type-9 Heavy
        128785619,  // Type-10 Defender
        128049273,  // Viper MkIII
        128672255,  // Viper MkIV
        128049309,  // Vulture

        // Utility Mount
        'Shield Boosters',

        // Optional Internal
        'Shield Generators',
        'Hull Reinforcements',
    ];

    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Bulkhead > Adder
             1  => -20.000004,
             2  => -20.000004,
             3  => -20.000004,
             4  => -75,
             5  => 25,

        // Bulkhead > Anaconda
            11  => -20.000004,
            12  => -20.000004,
            13  => -20.000004,
            14  => -75,
            15  => 25,

        // Bulkhead > Asp Explorer
            21  => -20.000004,
            22  => -20.000004,
            23  => -20.000004,
            24  => -75,
            25  => 25,

        // Bulkhead > Asp Scout
            31  => -20.000004,
            32  => -20.000004,
            33  => -20.000004,
            34  => -75,
            35  => 25,

        // Bulkhead > Beluga Liner
            41  => -20.000004,
            42  => -20.000004,
            43  => -20.000004,
            44  => -75,
            45  => 25,

        // Bulkhead > Cobra Mk. III
            51  => -20.000004,
            52  => -20.000004,
            53  => -20.000004,
            54  => -75,
            55  => 25,

        // Bulkhead > Cobra MkIV
            61  => -20.000004,
            62  => -20.000004,
            63  => -20.000004,
            64  => -75,
            65  => 25,

        // Bulkhead > Diamondback Explorer
            71  => -20.000004,
            72  => -20.000004,
            73  => -20.000004,
            74  => -75,
            75  => 25,

        // Bulkhead > Diamondback Scout
            81  => -20.000004,
            82  => -20.000004,
            83  => -20.000004,
            84  => -75,
            85  => 25,

        // Bulkhead > Dolphin
            91  => -20.000004,
            92  => -20.000004,
            93  => -20.000004,
            94  => -75,
            95  => 25,

        // Bulkhead > Eagle
           101  => -20.000004,
           102  => -20.000004,
           103  => -20.000004,
           104  => -75,
           105  => 25,

        // Bulkhead > Federal Assault Ship
           111  => -20.000004,
           112  => -20.000004,
           113  => -20.000004,
           114  => -75,
           115  => 25,

        // Bulkhead > Federal Corvette
           121  => -20.000004,
           122  => -20.000004,
           123  => -20.000004,
           124  => -75,
           125  => 25,

        // Bulkhead > Federal Dropship
           131  => -20.000004,
           132  => -20.000004,
           133  => -20.000004,
           134  => -75,
           135  => 25,

        // Bulkhead > Federal Gunship
           141  => -20.000004,
           142  => -20.000004,
           143  => -20.000004,
           144  => -75,
           145  => 25,

        // Bulkhead > Fer-de-Lance
           151  => -20.000004,
           152  => -20.000004,
           153  => -20.000004,
           154  => -75,
           155  => 25,

        // Bulkhead > Hauler
           161  => -20.000004,
           162  => -20.000004,
           163  => -20.000004,
           164  => -75,
           165  => 25,

        // Bulkhead > Imperial Clipper
           171  => -20.000004,
           172  => -20.000004,
           173  => -20.000004,
           174  => -75,
           175  => 25,

        // Bulkhead > Imperial Courrier
           181  => -20.000004,
           182  => -20.000004,
           183  => -20.000004,
           184  => -75,
           185  => 25,

        // Bulkhead > Imperial Cutter
           191  => -20.000004,
           192  => -20.000004,
           193  => -20.000004,
           194  => -75,
           195  => 25,

        // Bulkhead > Imperial Eagle
           201  => -20.000004,
           202  => -20.000004,
           203  => -20.000004,
           204  => -75,
           205  => 25,

        // Bulkhead > Keelback
           211  => -20.000004,
           212  => -20.000004,
           213  => -20.000004,
           214  => -75,
           215  => 25,

        // Bulkhead > Orca
           221  => -20.000004,
           222  => -20.000004,
           223  => -20.000004,
           224  => -75,
           225  => 25,

        // Bulkhead > Python
           231  => -20.000004,
           232  => -20.000004,
           233  => -20.000004,
           234  => -75,
           235  => 25,

        // Bulkhead > Sidewinder
           241  => -20.000004,
           242  => -20.000004,
           243  => -20.000004,
           244  => -75,
           245  => 25,

        // Bulkhead > Type-6 Transporter
           251  => -20.000004,
           252  => -20.000004,
           253  => -20.000004,
           254  => -75,
           255  => 25,

        // Bulkhead > Type-7 Transporter
           261  => -20.000004,
           262  => -20.000004,
           263  => -20.000004,
           264  => -75,
           265  => 25,

        // Bulkhead > Type-9 Heavy
           271  => -20.000004,
           272  => -20.000004,
           273  => -20.000004,
           274  => -75,
           275  => 25,

        // Bulkhead > Viper MkIII
           281  => -20.000004,
           282  => -20.000004,
           283  => -20.000004,
           284  => -75,
           285  => 25,

        // Bulkhead > Viper MkIV
           291  => -20.000004,
           292  => -20.000004,
           293  => -20.000004,
           294  => -75,
           295  => 25,

        // Bulkhead > Vulture
           301  => -20.000004,
           302  => -20.000004,
           303  => -20.000004,
           304  => -75,
           305  => 25,

        // Bulkhead > Type-10 Defender
           311  => -20.000004,
           312  => -20.000004,
           313  => -20.000004,
           314  => -75,
           315  => 25,

        // Bulkhead > Alliance Chieftain
           321  => -20.000004,
           322  => -20.000004,
           323  => -20.000004,
           324  => -75,
           325  => 25,

        // Bulkhead > Alliance Challenger
           331  => -20.000004,
           332  => -20.000004,
           333  => -20.000004,
           334  => -75,
           335  => 25,

        // Bulkhead > Krait MkII
           341  => -20.000004,
           342  => -20.000004,
           343  => -20.000004,
           344  => -75,
           345  => 25,

        // Bulkhead > Alliance Crusader
           351  => -20.000004,
           352  => -20.000004,
           353  => -20.000004,
           354  => -75,
           355  => 25,

        // Bulkhead > Krait Phantom
           361  => -20.000004,
           362  => -20.000004,
           363  => -20.000004,
           364  => -75,
           365  => 25,

        // Bulkhead > Mamba
           371  => -20.000004,
           372  => -20.000004,
           373  => -20.000004,
           374  => -75,
           375  => 25,

        // Utility Mount > Shield Booster
          2001  => 0,
          2002  => 0,
          2003  => 0,
          2004  => 0,
          2005  => 0,

        // Optional Internal > Shield Generator
          4101  => 39.999996,
          4102  => 39.999996,
          4103  => 39.999996,
          4104  => 39.999996,
          4106  => 39.999996,
          4107  => 39.999996,

          4110  => 39.999996, // Not in category
          4111  => 39.999996,
          4112  => 39.999996,
          4113  => 39.999996,
          4114  => 39.999996,
          4115  => 39.999996,
          4116  => 39.999996,
          4117  => 39.999996,

          4121  => 39.999996,
          4122  => 39.999996,
          4123  => 39.999996,
          4124  => 39.999996,
          4125  => 39.999996,
          4126  => 39.999996,
          4127  => 39.999996,

          4131  => 39.999996,
          4132  => 39.999996,
          4133  => 39.999996,
          4134  => 39.999996,
          4135  => 39.999996,
          4136  => 39.999996,
          4137  => 39.999996,

          4141  => 39.999996,
          4142  => 39.999996,
          4143  => 39.999996,
          4144  => 39.999996,
          4145  => 39.999996,
          4146  => 39.999996,
          4147  => 39.999996,

          4151  => 39.999996,
          4152  => 39.999996,
          4153  => 39.999996,
          4154  => 39.999996,
          4155  => 39.999996,
          4156  => 39.999996,
          4157  => 39.999996,

          4161  => 39.999996,
          4162  => 39.999996,
          4163  => 39.999996,
          4164  => 39.999996,
          4165  => 39.999996,
          4166  => 39.999996,
          4167  => 39.999996,

          4171  => 39.999996,
          4172  => 39.999996,
          4173  => 39.999996,
          4174  => 39.999996,
          4175  => 39.999996,
          4176  => 39.999996,
          4177  => 39.999996,

        // Optional Internal > Hull Reinforcement Package
          4812  => 0.999999,

          4822  => 1.499999,

          4832  => 1.999998,

          4842  => 2.499998,
    ];
}
