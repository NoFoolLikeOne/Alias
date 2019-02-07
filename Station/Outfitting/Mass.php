<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Mass extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Mass';
    static protected $unit              = '%1$s t';
    static protected $lessIsGood        = true;

    /**
     * List of price by outfitting
     */
    static protected $name  = [
        // Bulkhead > Adder
             1  => 0,
             2  => 3,
             3  => 5,
             4  => 5,
             5  => 5,

        // Bulkhead > Anaconda
            11  => 0,
            12  => 30,
            13  => 60,
            14  => 60,
            15  => 60,

        // Bulkhead > Asp Explorer
            21  => 0,
            22  => 21,
            23  => 42,
            24  => 42,
            25  => 42,

        // Bulkhead > Asp Scout
            31  => 0,
            32  => 21,
            33  => 42,
            34  => 42,
            35  => 42,

        // Bulkhead > Beluga Liner
            41  => 0,
            42  => 83,
            43  => 165,
            44  => 165,
            45  => 165,

        // Bulkhead > Cobra MkIII
            51  => 0,
            52  => 14,
            53  => 27,
            54  => 27,
            55  => 27,

        // Bulkhead > Cobra MkIV
            61  => 0,
            62  => 14,
            63  => 27,
            64  => 27,
            65  => 27,

        // Bulkhead > Diamondback Explorer
            71  => 0,
            72  => 23,
            73  => 47,
            74  => 47,
            75  => 47,

        // Bulkhead > Diamondback Scout
            81  => 0,
            82  => 13,
            83  => 26,
            84  => 26,
            85  => 26,

        // Bulkhead > Dolphin
            91  => 0,
            92  => 32,
            93  => 63,
            94  => 63,
            95  => 63,

        // Bulkhead > Eagle
           101  => 0,
           102  => 4,
           103  => 8,
           104  => 8,
           105  => 8,

        // Bulkhead > Federal Assault Ship
           111  => 0,
           112  => 44,
           113  => 87,
           114  => 87,
           115  => 87,

        // Bulkhead > Federal Corvette
           121  => 0,
           122  => 30,
           123  => 60,
           124  => 60,
           125  => 60,

        // Bulkhead > Federal Dropship
           131  => 0,
           132  => 44,
           133  => 87,
           134  => 87,
           135  => 87,

        // Bulkhead > Federal Gunship
           141  => 0,
           142  => 44,
           143  => 87,
           144  => 87,
           145  => 87,

        // Bulkhead > Fer-de-Lance
           151  => 0,
           152  => 19,
           153  => 38,
           154  => 38,
           155  => 38,

        // Bulkhead > Hauler
           161  => 0,
           162  => 1,
           163  => 2,
           164  => 2,
           165  => 2,

        // Bulkhead > Imperial Clipper
           171  => 0,
           172  => 30,
           173  => 60,
           174  => 60,
           175  => 60,

        // Bulkhead > Imperial Courrier
           181  => 0,
           182  => 4,
           183  => 8,
           184  => 8,
           185  => 8,

        // Bulkhead > Imperial Cutter
           191  => 0,
           192  => 30,
           193  => 60,
           194  => 60,
           195  => 60,

        // Bulkhead > Imperial Eagle
           201  => 0,
           202  => 4,
           203  => 8,
           204  => 8,
           205  => 8,

        // Bulkhead > Keelback
           211  => 0,
           212  => 12,
           213  => 23,
           214  => 23,
           215  => 23,

        // Bulkhead > Orca
           221  => 0,
           222  => 21,
           223  => 87,
           224  => 87,
           225  => 87,

        // Bulkhead > Python
           231  => 0,
           232  => 26,
           233  => 53,
           234  => 53,
           235  => 53,

        // Bulkhead > Sidewinder
           241  => 0,
           242  => 2,
           243  => 4,
           244  => 4,
           245  => 4,

        // Bulkhead > Type-6 Transporter
           251  => 0,
           252  => 12,
           253  => 23,
           254  => 23,
           255  => 23,

        // Bulkhead > Type-7 Transporter
           261  => 0,
           262  => 32,
           263  => 63,
           264  => 63,
           265  => 63,

        // Bulkhead > Type-9 Heavy
           271  => 0,
           272  => 75,
           273  => 150,
           274  => 150,
           275  => 150,

        // Bulkhead > Viper MkIII
           281  => 0,
           282  => 5,
           283  => 9,
           284  => 9,
           285  => 9,

        // Bulkhead > Viper MkIV
           291  => 0,
           292  => 5,
           293  => 9,
           294  => 9,
           295  => 9,

        // Bulkhead > Vulture
           301  => 0,
           302  => 17,
           303  => 35,
           304  => 35,
           305  => 35,

        // Bulkhead > Type-10 Defender
           311  => 0,
           312  => 75,
           313  => 150,
           314  => 150,
           315  => 150,

        // Bulkhead > Alliance Chieftain
           321  => 0,
           322  => 40,
           323  => 78,
           324  => 78,
           325  => 78,

        // Bulkhead > Alliance Challenger
           331  => 0,
           332  => 40,
           333  => 78,
           334  => 78,
           335  => 78,

        // Bulkhead > Krait MkII
           341  => 0,
           342  => 36,
           343  => 67,
           344  => 67,
           345  => 67,

        // Bulkhead > Alliance Crusader
           351  => 0,
           352  => 40,
           353  => 78,
           354  => 78,
           355  => 78,

        // Bulkhead > Krait Phantom
           361  => 0,
           362  => 26,
           363  => 53,
           364  => 53,
           365  => 53,

        // Bulkhead > Mamba
           371  => 0,
           372  => 19,
           373  => 38,
           374  => 38,
           375  => 38,

        // Weapon Hardpoint > Sub-Surface Displacement Missile
           951  => 2,
           952  => 2,

           959  => 4,
           960  => 4,

        // Weapon Hardpoint > Beam Laser
          1001  => 2,
          1002  => 4,
          1003  => 8,
          1004  => 16,

          1005  => 2,
          1006  => 4,
          1007  => 8,
          1008  => 16,

          1009  => 2,
          1010  => 4,
          1011  => 8,

          1021  => 2,

          1031  => 2,
          1032  => 4,

        // Weapon Hardpoint > Pulse Laser
          1050  => 2,
          1051  => 2,
          1052  => 4,
          1053  => 8,
          1054  => 16,

          1055  => 2,
          1056  => 4,
          1057  => 8,
          1058  => 16,

          1059  => 2,
          1060  => 4,
          1061  => 8,

          1072  => 4,

        // Weapon Hardpoint > Burst Laser
          1101  => 2,
          1102  => 4,
          1103  => 8,
          1104  => 16,

          1105  => 2,
          1106  => 4,
          1107  => 8,
          1108  => 16,

          1109  => 2,
          1110  => 4,
          1111  => 8,

          1121  => 2,

        // Weapon Hardpoint > Cannon
          1151  => 2,
          1152  => 4,
          1153  => 8,
          1154  => 16,

          1155  => 2,
          1156  => 4,
          1157  => 8,
          1158  => 16,

          1159  => 2,
          1160  => 4,
          1161  => 8,

        // Weapon Hardpoint > Fragment Cannon
          1201  => 2,
          1202  => 4,
          1203  => 8,

          1205  => 2,
          1206  => 4,
          1207  => 8,

          1209  => 2,
          1210  => 4,
          1211  => 8,

          1215  => 8,

        // Weapon Hardpoint > Multi-Cannon
          1251  => 2,
          1252  => 4,
          1253  => 8,
          1254  => 16,

          1255  => 2,
          1256  => 4,
          1257  => 8,
          1258  => 16,

          1259  => 2,
          1260  => 4,
          1261  => 8,

          1271  => 2,

        // Weapon Hardpoint > Plasma Accelerator
          1302  => 4,
          1303  => 8,
          1304  => 16,

          1313  => 8,

          1321  => 2,
          1322  => 4,
          1323  => 8,

          1329  => 2,
          1330  => 4,
          1331  => 8,

        // Weapon Hardpoint > Rail Gun
          1351  => 2,
          1352  => 4,

          1362  => 4,

        // Weapon Hardpoint > Missile Rack
          1401  => 2,
          1402  => 4,
          1403  => 8,

          1405  => 2,
          1406  => 4,
          1407  => 8,

          1411  => 4,

        // Weapon Hardpoint > Mine Launcher
          1451  => 2,
          1452  => 4,

        // Weapon Hardpoint > Mining Laser
          1501  => 2,
          1502  => 2,

          1509  => 2,
          1510  => 2,

          1521  => 2,

        // Weapon Hardpoint > Torpedo Pylon
          1551  => 2,
          1552  => 4,
          1553  => 8,

        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 2,

        // Weapon Hardpoint > AX Missile Rack
          1652  => 4,
          1653  => 8,
          1660  => 4,
          1661  => 8,

        // Weapon Hardpoint > AX Multi-Cannon
          1702  => 4,
          1703  => 8,
          1710  => 4,
          1711  => 8,

        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => 4,
          1760  => 4,

        // Weapon Hardpoint > Remote Release Flechette Launcher
          1772  => 4,
          1780  => 4,

        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 4,

        // Weapon Hardpoint > Abrasion Blaster
          1821  => 2,
          1829  => 2,

        // Weapon Hardpoint > Shock Cannon
          1851  => 2,
          1852  => 4,
          1853  => 8,

          1855  => 2,
          1856  => 4,
          1857  => 8,

          1860  => 4,
          1861  => 8,

        // Weapon Hardpoint > Enzyme Missile Rack
          1872  => 4,

        // Weapon Hardpoint > Shard Cannon
          1921  => 2,
          1922  => 4,
          1923  => 8,

          1929  => 2,
          1930  => 4,
          1931  => 8,

        // Weapon Hardpoint > Seismic Charge
          1952  => 4,
          1960  => 4,

        // Utility Mount > Shield Booster
          2001  => 0.5,
          2002  => 1,
          2003  => 2,
          2004  => 3,
          2005  => 3.5,

        // Utility Mount > Chaff Launcher
          2050  => 1.3,

        // Utility Mount > Electronic Countermeasure
          2100  => 1.3,

        // Utility Mount > Heat Sink Launcher
          2150  => 1.3,

        // Utility Mount > Point Defence
          2200  => 0.5,

        // Utility Mount > Cargo Scanner
          2251  => 1.3,
          2252  => 1.3,
          2253  => 1.3,
          2254  => 1.3,
          2255  => 1.3,

        // Utility Mount > Frame Shift Wake Scanner
          2301  => 1.3,
          2302  => 1.3,
          2303  => 1.3,
          2304  => 1.3,
          2305  => 1.3,

        // Utility Mount > Kill Warrant Scanner
          2351  => 1.3,
          2352  => 1.3,
          2353  => 1.3,
          2354  => 1.3,
          2355  => 1.3,

        // Utility Mount > Xeno Scanner
          2401  => 1.3,

        // Utility Mount > Shutdown Field Neutraliser
          2451  => 1.3,

        // Utility Mount > Pulse Wave Analyser
          2501  => 1.3,
          2502  => 1.3,
          2503  => 1.3,
          2504  => 1.3,
          2505  => 1.3,

        // Core Internal > Fuel Tank
          3000  => 0,
          3001  => 0,   3002  => 0,     3003  => 0,     3004  => 0,     3005  => 0,     3006  => 0,     3007  => 0,     3008  => 0,

        // Core Internal > Power Plant
          3100  => 2.5,
          3101  => 2.5,
          3102  => 1,
          3103  => 1.3,
          3104  => 2,
          3105  => 1.3,

          3109  => 1.5,

          3111  => 5,
          3112  => 2,
          3113  => 2.5,
          3114  => 4,
          3115  => 2.5,

          3119  => 2.9,

          3121  => 10,
          3122  => 4,
          3123  => 5,
          3124  => 8,
          3125  => 5,

          3129  => 5.9,

          3131  => 20,
          3132  => 8,
          3133  => 10,
          3134  => 16,
          3135  => 10,

          3139  => 11.7,

          3141  => 40,
          3142  => 16,
          3143  => 20,
          3144  => 32,
          3145  => 20,

          3149  => 23.4,

          3151  => 80,
          3152  => 32,
          3153  => 40,
          3154  => 64,
          3155  => 40,

          3159  => 46.8,

          3161  => 160,
          3162  => 64,
          3163  => 80,
          3164  => 128,
          3165  => 80,

          3169  => 93.6,

        // Core Internal > Thrusters
          3200  => 2.5,
          3201  => 2.5,
          3202  => 1,
          3203  => 2.5,
          3204  => 4,
          3205  => 2.5,
          3206  => 2.5,

          3211  => 5,
          3212  => 2,
          3213  => 5,
          3214  => 8,
          3215  => 5,
          3216  => 5,

          3221  => 10,
          3222  => 4,
          3223  => 10,
          3224  => 16,
          3225  => 10,

          3231  => 20,
          3232  => 8,
          3233  => 20,
          3234  => 32,
          3235  => 20,

          3241  => 40,
          3242  => 16,
          3243  => 40,
          3244  => 64,
          3245  => 40,

          3251  => 80,
          3252  => 32,
          3253  => 80,
          3254  => 128,
          3255  => 80,

          3261  => 160,
          3262  => 64,
          3263  => 160,
          3264  => 256,
          3265  => 160,

        // Core Internal > Frame Shift Drive
          3301  => 2.5,
          3302  => 1,
          3303  => 2.5,
          3304  => 4,
          3305  => 2.5,

          3311  => 5,
          3312  => 2,
          3313  => 5,
          3314  => 8,
          3315  => 5,

          3321  => 10,
          3322  => 4,
          3323  => 10,
          3324  => 16,
          3325  => 10,

          3331  => 20,
          3332  => 8,
          3333  => 20,
          3334  => 32,
          3335  => 20,

          3341  => 40,
          3342  => 16,
          3343  => 40,
          3344  => 64,
          3345  => 40,

          3351  => 80,
          3352  => 32,
          3353  => 80,
          3354  => 128,
          3355  => 80,

          3361  => 160,
          3362  => 64,
          3363  => 160,
          3364  => 256,
          3365  => 160,

        // Core Internal > Life Support
          3400  => 1.3,
          3401  => 1.3,
          3402  => 0.5,
          3403  => 1.3,
          3404  => 2,
          3405  => 1.3,

          3411  => 2.5,
          3412  => 1,
          3413  => 2.5,
          3414  => 4,
          3415  => 2.5,

          3421  => 5,
          3422  => 2,
          3423  => 5,
          3424  => 8,
          3425  => 5,

          3431  => 10,
          3432  => 4,
          3433  => 10,
          3434  => 16,
          3435  => 10,

          3441  => 20,
          3442  => 8,
          3443  => 20,
          3444  => 32,
          3445  => 20,

          3451  => 40,
          3452  => 16,
          3453  => 40,
          3454  => 64,
          3455  => 40,

          3461  => 80,
          3462  => 32,
          3463  => 80,
          3464  => 128,
          3465  => 80,

          3471  => 160,
          3472  => 64,
          3473  => 160,
          3474  => 256,
          3475  => 160,

        // Core Internal > Power Distributor
          3501  => 1.3,
          3502  => 0.5,
          3503  => 1.3,
          3504  => 2,
          3505  => 1.3,

          3509  => 1.4,

          3511  => 2.5,
          3512  => 1,
          3513  => 2.5,
          3514  => 4,
          3515  => 2.5,

          3519  => 2.6,

          3521  => 5,
          3522  => 2,
          3523  => 5,
          3524  => 8,
          3525  => 5,

          3529  => 5.25,

          3531  => 10,
          3532  => 4,
          3533  => 10,
          3534  => 16,
          3535  => 10,

          3539  => 10.5,

          3541  => 20,
          3542  => 8,
          3543  => 20,
          3544  => 32,
          3545  => 20,

          3549  => 21,

          3551  => 40,
          3552  => 16,
          3553  => 40,
          3554  => 64,
          3555  => 40,

          3559  => 42,

          3561  => 80,
          3562  => 32,
          3563  => 80,
          3564  => 128,
          3565  => 80,

          3569  => 84,

          3571  => 160,
          3572  => 64,
          3573  => 160,
          3574  => 256,
          3575  => 160,

          3579  => 168,

        // Core Internal > Sensors
          3600  => 1.3,
          3601  => 1.3,
          3602  => 0.5,
          3603  => 1.3,
          3604  => 2,
          3605  => 1.3,

          3611  => 2.5,
          3612  => 1,
          3613  => 2.5,
          3614  => 4,
          3615  => 2.5,

          3621  => 5,
          3622  => 2,
          3623  => 5,
          3624  => 8,
          3625  => 5,

          3631  => 10,
          3632  => 4,
          3633  => 10,
          3634  => 16,
          3635  => 10,

          3641  => 20,
          3642  => 8,
          3643  => 20,
          3644  => 32,
          3645  => 20,

          3651  => 40,
          3652  => 16,
          3653  => 40,
          3654  => 64,
          3655  => 40,

          3661  => 80,
          3662  => 32,
          3663  => 80,
          3664  => 128,
          3665  => 80,

          3671  => 160,
          3672  => 64,
          3673  => 160,
          3674  => 256,
          3675  => 160,

        // Core Internal > Planetary Approach Suite
          3701  => 0,

        // Core Internal > Guardian FSD Booster
          3801  => 1.3,

          3811  => 1.3,

          3821  => 1.3,

          3831  => 1.3,

          3841  => 1.3,

        // Optional Internal > Discovery Scanner
          4000  => 2,
          4001  => 2,
          4002  => 2,
          4003  => 2,

        // Optional Internal > Detailed Surface Scanner
          4011  => 0,

        // Optional Internal > Cargo Rack
          4020  => 0,
          4021  => 0,
          4022  => 0,   4023  => 0,     4024  => 0,     4025  => 0,     4026  => 0,     4027  => 0,     4028  => 0,
          4031  => 0,   4032  => 0,     4033  => 0,     4034  => 0,

        // Optional Internal > Standard Docking Computer
          4051  => 0,

        // Optional Internal > Shield Generator
          4104  => 1.3,
          4106  => 1.3,
          4107  => 2.6,

          4110  => 2.5,
          4111  => 2.5,
          4112  => 1,
          4113  => 2.5,
          4114  => 2.5,
          4115  => 4,
          4116  => 2.5,
          4117  => 5,

          4121  => 5,
          4122  => 2,
          4123  => 5,
          4124  => 5,
          4125  => 8,
          4126  => 5,
          4127  => 10,

          4131  => 10,
          4132  => 4,
          4133  => 10,
          4134  => 10,
          4135  => 16,
          4136  => 10,
          4137  => 20,

          4141  => 20,
          4142  => 8,
          4143  => 20,
          4144  => 20,
          4145  => 32,
          4146  => 20,
          4147  => 40,

          4151  => 40,
          4152  => 16,
          4153  => 40,
          4154  => 40,
          4155  => 64,
          4156  => 40,
          4157  => 80,

          4161  => 80,
          4162  => 32,
          4163  => 80,
          4164  => 80,
          4165  => 128,
          4166  => 80,
          4167  => 160,

          4171  => 160,
          4172  => 64,
          4173  => 160,
          4174  => 160,
          4175  => 256,
          4176  => 160,
          4177  => 320,

        // Optional Internal > Shield Cell Bank
          4201  => 1.3,
          4202  => 0.5,
          4203  => 1.3,
          4204  => 2,
          4205  => 1.3,

          4211  => 2.5,
          4212  => 1,
          4213  => 2.5,
          4214  => 4,
          4215  => 2.5,

          4221  => 5,
          4222  => 2,
          4223  => 5,
          4224  => 8,
          4225  => 5,

          4231  => 10,
          4232  => 4,
          4233  => 10,
          4234  => 16,
          4235  => 10,

          4241  => 20,
          4242  => 8,
          4243  => 20,
          4244  => 32,
          4245  => 20,

          4251  => 40,
          4252  => 16,
          4253  => 40,
          4254  => 64,
          4255  => 40,

          4261  => 80,
          4262  => 32,
          4263  => 80,
          4264  => 128,
          4265  => 80,

          4271  => 160,
          4272  => 64,
          4273  => 160,
          4274  => 256,
          4275  => 160,

        // Optional Internal > Fuel Scoop
          4301  => 0,   4302  => 0,     4303  => 0,     4304  => 0,     4305  => 0,
          4311  => 0,   4312  => 0,     4313  => 0,     4314  => 0,     4315  => 0,
          4321  => 0,   4322  => 0,     4323  => 0,     4324  => 0,     4325  => 0,
          4331  => 0,   4332  => 0,     4333  => 0,     4334  => 0,     4335  => 0,
          4341  => 0,   4342  => 0,     4343  => 0,     4344  => 0,     4345  => 0,
          4351  => 0,   4352  => 0,     4353  => 0,     4354  => 0,     4355  => 0,
          4361  => 0,   4362  => 0,     4363  => 0,     4364  => 0,     4365  => 0,
          4371  => 0,   4372  => 0,     4373  => 0,     4374  => 0,     4375  => 0,

        // Optional Internal > Refinery
          4401  => 0,   4402  => 0,     4403  => 0,     4404  => 0,     4405  => 0,
          4411  => 0,   4412  => 0,     4413  => 0,     4414  => 0,     4415  => 0,
          4421  => 0,   4422  => 0,     4423  => 0,     4424  => 0,     4425  => 0,
          4431  => 0,   4432  => 0,     4433  => 0,     4434  => 0,     4435  => 0,

        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 1.3,
          4502  => 0.5,
          4503  => 1.3,
          4504  => 2,
          4505  => 1.3,

          4511  => 2.5,
          4512  => 1,
          4513  => 2.5,
          4514  => 4,
          4515  => 2.5,

          4521  => 5,
          4522  => 2,
          4523  => 5,
          4524  => 8,
          4525  => 5,

          4531  => 10,
          4532  => 4,
          4533  => 10,
          4534  => 16,
          4535  => 10,

        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 1.3,
          4602  => 0.5,
          4603  => 1.3,
          4604  => 2,
          4605  => 1.3,

          4621  => 5,
          4622  => 2,
          4623  => 5,
          4624  => 8,
          4625  => 5,

          4641  => 20,
          4642  => 8,
          4643  => 20,
          4644  => 32,
          4645  => 20,

          4661  => 80,
          4662  => 32,
          4663  => 80,
          4664  => 128,
          4665  => 80,

        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 0,   4702  => 0,     4703  => 0,     4704  => 0,     4705  => 0,
          4711  => 0,   4712  => 0,     4713  => 0,     4714  => 0,     4715  => 0,
          4721  => 0,   4722  => 0,     4723  => 0,     4724  => 0,     4725  => 0,
          4731  => 0,   4732  => 0,     4733  => 0,     4734  => 0,     4735  => 0,
          4741  => 0,   4742  => 0,     4743  => 0,     4744  => 0,     4745  => 0,
          4751  => 0,   4752  => 0,     4753  => 0,     4754  => 0,     4755  => 0,
          4761  => 0,   4762  => 0,     4763  => 0,     4764  => 0,     4765  => 0,
          4771  => 0,   4772  => 0,     4773  => 0,     4774  => 0,     4775  => 0,

        // Optional Internal > Hull Reinforcement Package
          4801  => 2,
          4802  => 1,

          4811  => 4,
          4812  => 2,

          4821  => 8,
          4822  => 4,

          4831  => 16,
          4832  => 8,

          4841  => 32,
          4842  => 16,

        // Optional Internal > Module Reinforcement Package
          4901  => 2,
          4902  => 1,

          4911  => 4,
          4912  => 2,

          4921  => 8,
          4922  => 4,

          4931  => 16,
          4932  => 8,

          4941  => 32,
          4942  => 16,

        // Optional Internal > Collector Limpet Controller
          5001  => 0.5,
          5002  => 0.5,
          5003  => 1.3,
          5004  => 2,
          5005  => 2,

          5021  => 2,
          5022  => 2,
          5023  => 5,
          5024  => 8,
          5025  => 8,

          5041  => 8,
          5042  => 8,
          5043  => 20,
          5044  => 32,
          5045  => 32,

          5061  => 32,
          5062  => 32,
          5063  => 80,
          5064  => 128,
          5065  => 128,

        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 1.3,
          5102  => 0.5,
          5103  => 1.3,
          5104  => 2,
          5105  => 1.3,

          5121  => 5,
          5122  => 2,
          5123  => 5,
          5124  => 8,
          5125  => 5,

          5141  => 20,
          5142  => 8,
          5143  => 20,
          5144  => 32,
          5145  => 20,

          5161  => 80,
          5162  => 32,
          5163  => 80,
          5164  => 128,
          5165  => 80,

        // Optional Internal > Prospector Limpet Controller
          5201  => 1.3,
          5202  => 0.5,
          5203  => 1.3,
          5204  => 2,
          5205  => 1.3,

          5221  => 5,
          5222  => 2,
          5223  => 5,
          5224  => 8,
          5225  => 5,

          5241  => 20,
          5242  => 8,
          5243  => 20,
          5244  => 32,
          5245  => 20,

          5261  => 80,
          5262  => 32,
          5263  => 80,
          5264  => 128,
          5265  => 80,

        // Optional Internal > Passenger Cabin
          5311  => 2.5,

          5321  => 5,
          5322  => 5,

          5331  => 10,
          5332  => 10,
          5333  => 10,

          5341  => 20,
          5342  => 20,
          5343  => 20,
          5344  => 20,

          5351  => 40,
          5352  => 40,
          5353  => 40,
          5354  => 40,

        // Optional Internal > Planetary Vehicle Hangar
          5411  => 12,
          5412  => 6,

          5431  => 20,
          5432  => 10,

          5451  => 34,
          5452  => 17,

        // Optional Internal > Fighter Hangar
          5541  => 20,

          5551  => 40,

          5561  => 60,

        // Optional Internal > Repair Limpet Controller
          5601  => 1.3,
          5602  => 0.5,
          5603  => 1.3,
          5604  => 2,
          5605  => 1.3,

          5621  => 5,
          5622  => 2,
          5623  => 5,
          5624  => 8,
          5625  => 5,

          5641  => 20,
          5642  => 8,
          5643  => 20,
          5644  => 32,
          5645  => 20,

          5661  => 80,
          5662  => 32,
          5663  => 80,
          5664  => 128,
          5665  => 80,

        // Optional Internal > Research Limpet Controller
          5701  => 1.3,

        // Optional Internal > Decontamination Limpet Controller
          5801  => 1.3,

          5821  => 2,

          5841  => 20,

          5861  => 128,

        // Optional Internal > Recon Limpet Controller
          5901  => 1.3,

          5921  => 2,

          5941  => 20,

          5961  => 128,

        // Optional Internal > Meta Alloy Hull Reinforcement
          6001  => 2,
          6002  => 2,

          6011  => 4,
          6012  => 2,

          6021  => 8,
          6022  => 4,

          6031  => 16,
          6032  => 8,

          6041  => 32,
          6042  => 16,

        // Optional Internal > Guardian Hull Reinforcement
          6101  => 2,
          6102  => 1,

          6111  => 4,
          6112  => 2,

          6121  => 8,
          6122  => 4,

          6131  => 16,
          6132  => 8,

          6141  => 32,
          6142  => 16,

        // Optional Internal > Guardian Hull Reinforcement
          6201  => 2,
          6202  => 1,

          6211  => 4,
          6212  => 2,

          6221  => 8,
          6222  => 4,

          6231  => 16,
          6232  => 8,

          6241  => 32,
          6242  => 16,

        // Optional Internal > Guardian Module Reinforcement
          6301  => 2,
          6302  => 1,

          6311  => 4,
          6312  => 2,

          6321  => 8,
          6322  => 4,

          6331  => 16,
          6332  => 8,

          6341  => 32,
          6342  => 16,


        // Cargo bay door (No category, not sellable, only for ship module list)
          9990  => 0,
          9991  => 0,
    ];
}