<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Commodity;
use         EDSM\Alias;

class Category extends Alias
{
    use \EDSM\Alias\Station\Commodity\Category;
    
    /**
     * List of names used in game, except for cargo
     */
    static protected $name  = [
         1      => 'Chemicals',
         2      => 'Consumer Items',
         3      => 'Legal Drugs',
         4      => 'Foods',
         5      => 'Industrial Materials',
         6      => 'Machinery',
         7      => 'Medicines',
         8      => 'Metals',
         9      => 'Minerals',
        10      => 'Slavery',
        11      => 'Technology',
        12      => 'Textiles',
        13      => 'Waste',
        14      => 'Weapons',
        16      => 'Salvage',
        
        // Only for cargo
        15      => 'Non marketable',
        99      => 'Powerplay',
    ];
    
    /**
     * List of commodities id in each categories
     */
    static protected $in    = [
         1      =>  [
                        101, 102, 103, 104, 105, 106, 107, 108, 109, 110,
                        111, 112, 113, 114, 115,
                    ],
         2      =>  [
                        201, 202, 203, 204, 205, 206, 207, 208, 209, 210,
                        211, 212, 213, 214, 215, 216, 217, 218, 219, 220,
                        221, 222, 223, 224, 225, 226, 227, 228, 229, 230,
                        231, 232, 233,
                    ],
         3      =>  [
                        301, 302, 303, 304, 305, 306, 307, 308, 309, 310,
                        311, 312, 313, 314, 315, 316, 317, 318, 319, 320,
                        321, 322, 323, 324, 325, 326, 327, 328, 329, 330,
                        331, 332, 333, 334,
                    ],
         4      =>  [
                        401, 402, 403, 404, 405, 406, 407, 408, 409, 410,
                        411, 412, 413, 414, 415, 416, 417, 418, 419, 420,
                        421, 422, 423, 424, 425, 426, 427, 428, 429, 430,
                        431, 432, 433, 434, 435, 436, 437, 438, 439, 440,
                        441, 442, 443, 444, 445, 446, 447, 448, 449,
                    ],
         5      =>  [
                        501, 502, 503, 504, 505, 506, 507, 508, 509, 510,
                    ],
         6      =>  [
                        601, 602, 603, 604, 605, 606, 607, 608, 609, 610,
                        611, 612, 613, 614, 615, 616, 617, 618, 619, 620,
                        621, 622, 623, 624, 625, 626, 627,
                    ],
         7      =>  [
                        701, 702, 703, 704, 705, 706, 707, 708, 709, 710,
                        711, 712, 713, 714, 715, 716, 717,
                    ],
         8      =>  [
                        801, 802, 803, 804, 805, 806, 807, 808, 809, 810,
                        811, 812, 813, 814, 815, 816, 817, 818, 819, 820,
                        821, 822, 823,
                    ],
         9      =>  [
                        901, 902, 903, 904, 905, 906, 907, 908, 909, 910,
                        911, 912, 913, 914, 915, 916, 917, 918, 919, 920,
                        921, 922,
                    ],
        10      =>  [
                        1001, 1002, 1003,
                    ],
        11      =>  [
                        1101, 1102, 1103, 1104, 1105, 1106, 1107, 1108, 1109, 1110,
                        1111, 1112, 1113, 1114, 1115, 1116, 1117, 1118, 1119, 1120,
                    ],
        12      =>  [
                        1201, 1202, 1203, 1204, 1205, 1206, 1207, 1208, 1209, 1210,
                        1211, 1212,
                    ],
        13      =>  [
                        1301, 1302, 1303, 1304,
                    ],
        14      =>  [
                        1401, 1402, 1403, 1404, 1405, 1406, 1407, 1408, 1409, 1410,
                    ],
        16      =>  [
                        1601, 1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609, 1610,
                        1611, 1612, 1613, 1614, 1615, 1616, 1617, 1618, 1619, 1620,
                        1621, 1622, 1623, 1624, 1625, 1626, 1627, 1628, 1629, 1630,
                        1631, 1632, 1633, 1634, 1635, 1636, 1637, 1638, 1639, 1640,
                        1641, 1642, 1643, 1644, 1645, 1646, 1647, 1648, 1649, 1650,
                        1651, 1652, 1653, 1654, 1655, 1656, 1657,
                        
                        1800,
                    ],
        
        // Only for cargo
        15      =>  [
                        1501,
                    ],
        99      =>  [
                        9901, 9902, 9903, 9904, 9905, 9906, 9907, 9908, 9909, 9910,
                        9911, 9912, 9913, 9914, 9915, 9916, 9917, 9918, 9919, 9920,
                        9921, 9922, 9923, 9924, 9925, 9926, 9927, 9928, 9929, 9930,
                        9931, 9932, 9933, 9934, 9935, 9936, 9937, 9938,
                    ],
    ];
}