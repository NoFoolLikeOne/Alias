<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class ExplosiveResistance extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Explosive Resistance';

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
             1  => -39.999996,
             2  => -39.999996,
             3  => -39.999996,
             4  => -50,
             5  => 19.999998,

        // Bulkhead > Anaconda
            11  => -39.999996,
            12  => -39.999996,
            13  => -39.999996,
            14  => -50,
            15  => 19.999998,

        // Bulkhead > Asp Explorer
            21  => -39.999996,
            22  => -39.999996,
            23  => -39.999996,
            24  => -50,
            25  => 19.999998,

        // Bulkhead > Asp Scout
            31  => -39.999996,
            32  => -39.999996,
            33  => -39.999996,
            34  => -50,
            35  => 19.999998,

        // Bulkhead > Beluga Liner
            41  => -39.999996,
            42  => -39.999996,
            43  => -39.999996,
            44  => -50,
            45  => 19.999998,

        // Bulkhead > Cobra Mk. III
            51  => -39.999996,
            52  => -39.999996,
            53  => -39.999996,
            54  => -50,
            55  => 19.999998,

        // Bulkhead > Cobra MkIV
            61  => -39.999996,
            62  => -39.999996,
            63  => -39.999996,
            64  => -50,
            65  => 19.999998,

        // Bulkhead > Diamondback Explorer
            71  => -39.999996,
            72  => -39.999996,
            73  => -39.999996,
            74  => -50,
            75  => 19.999998,

        // Bulkhead > Diamondback Scout
            81  => -39.999996,
            82  => -39.999996,
            83  => -39.999996,
            84  => -50,
            85  => 19.999998,

        // Bulkhead > Dolphin
            91  => -39.999996,
            92  => -39.999996,
            93  => -39.999996,
            94  => -50,
            95  => 19.999998,

        // Bulkhead > Eagle
           101  => -39.999996,
           102  => -39.999996,
           103  => -39.999996,
           104  => -50,
           105  => 19.999998,

        // Bulkhead > Federal Assault Ship
           111  => -39.999996,
           112  => -39.999996,
           113  => -39.999996,
           114  => -50,
           115  => 19.999998,

        // Bulkhead > Federal Corvette
           121  => -39.999996,
           122  => -39.999996,
           123  => -39.999996,
           124  => -50,
           125  => 19.999998,

        // Bulkhead > Federal Dropship
           131  => -39.999996,
           132  => -39.999996,
           133  => -39.999996,
           134  => -50,
           135  => 19.999998,

        // Bulkhead > Federal Gunship
           141  => -39.999996,
           142  => -39.999996,
           143  => -39.999996,
           144  => -50,
           145  => 19.999998,

        // Bulkhead > Fer-de-Lance
           151  => -39.999996,
           152  => -39.999996,
           153  => -39.999996,
           154  => -50,
           155  => 19.999998,

        // Bulkhead > Hauler
           161  => -39.999996,
           162  => -39.999996,
           163  => -39.999996,
           164  => -50,
           165  => 19.999998,

        // Bulkhead > Imperial Clipper
           171  => -39.999996,
           172  => -39.999996,
           173  => -39.999996,
           174  => -50,
           175  => 19.999998,

        // Bulkhead > Imperial Courrier
           181  => -39.999996,
           182  => -39.999996,
           183  => -39.999996,
           184  => -50,
           185  => 19.999998,

        // Bulkhead > Imperial Cutter
           191  => -39.999996,
           192  => -39.999996,
           193  => -39.999996,
           194  => -50,
           195  => 19.999998,

        // Bulkhead > Imperial Eagle
           201  => -39.999996,
           202  => -39.999996,
           203  => -39.999996,
           204  => -50,
           205  => 19.999998,

        // Bulkhead > Keelback
           211  => -39.999996,
           212  => -39.999996,
           213  => -39.999996,
           214  => -50,
           215  => 19.999998,

        // Bulkhead > Orca
           221  => -39.999996,
           222  => -39.999996,
           223  => -39.999996,
           224  => -50,
           225  => 19.999998,

        // Bulkhead > Python
           231  => -39.999996,
           232  => -39.999996,
           233  => -39.999996,
           234  => -50,
           235  => 19.999998,

        // Bulkhead > Sidewinder
           241  => -39.999996,
           242  => -39.999996,
           243  => -39.999996,
           244  => -50,
           245  => 19.999998,

        // Bulkhead > Type-6 Transporter
           251  => -39.999996,
           252  => -39.999996,
           253  => -39.999996,
           254  => -50,
           255  => 19.999998,

        // Bulkhead > Type-7 Transporter
           261  => -39.999996,
           262  => -39.999996,
           263  => -39.999996,
           264  => -50,
           265  => 19.999998,

        // Bulkhead > Type-9 Heavy
           271  => -39.999996,
           272  => -39.999996,
           273  => -39.999996,
           274  => -50,
           275  => 19.999998,

        // Bulkhead > Viper MkIII
           281  => -39.999996,
           282  => -39.999996,
           283  => -39.999996,
           284  => -50,
           285  => 19.999998,

        // Bulkhead > Viper MkIV
           291  => -39.999996,
           292  => -39.999996,
           293  => -39.999996,
           294  => -50,
           295  => 19.999998,

        // Bulkhead > Vulture
           301  => -39.999996,
           302  => -39.999996,
           303  => -39.999996,
           304  => -50,
           305  => 19.999998,

        // Bulkhead > Type-10 Defender
           311  => -39.999996,
           312  => -39.999996,
           313  => -39.999996,
           314  => -50,
           315  => 19.999998,

        // Bulkhead > Alliance Chieftain
           321  => -39.999996,
           322  => -39.999996,
           323  => -39.999996,
           324  => -50,
           325  => 19.999998,

        // Bulkhead > Alliance Challenger
           331  => -39.999996,
           332  => -39.999996,
           333  => -39.999996,
           334  => -50,
           335  => 19.999998,

        // Bulkhead > Krait MkII
           341  => -39.999996,
           342  => -39.999996,
           343  => -39.999996,
           344  => -50,
           345  => 19.999998,

        // Bulkhead > Alliance Crusader
           351  => -39.999996,
           352  => -39.999996,
           353  => -39.999996,
           354  => -50,
           355  => 19.999998,

        // Bulkhead > Krait Phantom
           361  => -39.999996,
           362  => -39.999996,
           363  => -39.999996,
           364  => -50,
           365  => 19.999998,

        // Bulkhead > Mamba
           371  => -39.999996,
           372  => -39.999996,
           373  => -39.999996,
           374  => -50,
           375  => 19.999998,

        // Utility Mount > Shield Boosters
          2001  => 0,
          2002  => 0,
          2004  => 0,
          2005  => 0,

        // Optional Internal > Shield Generator
          4101  => 50,
          4102  => 50,
          4103  => 50,
          4104  => 50,
          4106  => 50,
          4107  => 50,

          4110  => 50, // Not in category
          4111  => 50,
          4112  => 50,
          4113  => 50,
          4114  => 50,
          4115  => 50,
          4116  => 50,
          4117  => 50,

          4121  => 50,
          4122  => 50,
          4123  => 50,
          4124  => 50,
          4125  => 50,
          4126  => 50,
          4127  => 50,

          4131  => 50,
          4132  => 50,
          4133  => 50,
          4134  => 50,
          4135  => 50,
          4136  => 50,
          4137  => 50,

          4141  => 50,
          4142  => 50,
          4143  => 50,
          4144  => 50,
          4145  => 50,
          4146  => 50,
          4147  => 50,

          4151  => 50,
          4152  => 50,
          4153  => 50,
          4154  => 50,
          4155  => 50,
          4156  => 50,
          4157  => 50,

          4161  => 50,
          4162  => 50,
          4163  => 50,
          4164  => 50,
          4165  => 50,
          4166  => 50,
          4167  => 50,

          4171  => 50,
          4172  => 50,
          4173  => 50,
          4174  => 50,
          4175  => 50,
          4176  => 50,
          4177  => 50,

        // Optional Internal > Hull Reinforcement Package
          4812  => 0.999999,

          4822  => 1.499999,

          4832  => 1.999998,

          4842  => 2.499998,
    ];
}
