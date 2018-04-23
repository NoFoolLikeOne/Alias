<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Commodity;
use         EDSM\Alias;

class Description extends Alias
{
    /**
     * List of description used in game
     */
    static protected $name  = [
        // Chemicals (1)
         101        => null,
         102        => null,
         103        => null,
         104        => null,
         105        => null,
         106        => null,
         107        => null,
         108        => null,
         109        => null,
         110        => null,
         111        => null,
         112        => null,
         113        => null,
         114        => null,
         115        => null,
         
        // Consumer Items (2)
         201        => null,
         202        => null,
         203        => null,
         204        => null,
         205        => null,
         206        => null,
         207        => null,
         208        => null,
         209        => null,
         210        => null,
         211        => null,
         212        => null,
         213        => null,
         214        => null,
         215        => null,
         216        => null,
         217        => null,
         218        => null,
         219        => null,
         220        => null,
         221        => null,
         222        => null,
         223        => null,
         224        => null,
         225        => null,
         226        => null,
         227        => null,
         228        => null,
         229        => null,
         230        => null,
         231        => null,
         232        => null,
         233        => null,
         
        // Legal Drugs (3)
         301        => null,
         302        => null,
         303        => null,
         304        => null,
         305        => null,
         306        => null,
         307        => null,
         308        => null,
         309        => null,
         310        => null,
         311        => null,
         312        => null,
         313        => null,
         314        => null,
         315        => null,
         316        => null,
         317        => null,
         318        => null,
         319        => null,
         320        => null,
         321        => null,
         322        => null,
         323        => null,
         324        => null,
         325        => null,
         326        => null,
         327        => null,
         328        => null,
         329        => null,
         330        => null,
         331        => null,
         332        => null,
         333        => null,
         334        => null,
         335        => null,
         
        // Foods (4)
         401        => null,
         402        => null,
         403        => null,
         404        => null,
         405        => null,
         406        => null,
         407        => null,
         408        => null,
         409        => null,
         410        => null,
         411        => null,
         412        => null,
         413        => null,
         414        => null,
         415        => null,
         416        => null,
         417        => null,
         418        => null,
         419        => null,
         420        => null,
         421        => null,
         422        => null,
         423        => null,
         424        => null,
         425        => null,
         426        => null,
         427        => null,
         428        => null,
         429        => null,
         430        => null,
         431        => null,
         432        => null,
         433        => null,
         434        => null,
         435        => null,
         436        => null,
         437        => null,
         438        => null,
         439        => null,
         440        => null,
         441        => null,
         442        => null,
         443        => null,
         444        => null,
         445        => null,
         446        => null,
         447        => null,
         448        => null,
         449        => null,
         450        => null,
         
        // Industrial Materials (5)
         501        => null,
         502        => null,
         503        => null,
         504        => null,
         505        => null,
         506        => null,
         507        => null,
         508        => null,
         509        => null,
         510        => null,
         
        // Machinery (6)
         601        => null,
         602        => null,
         603        => null,
         604        => null,
         605        => null,
         606        => null,
         607        => null,
         608        => null,
         609        => null,
         610        => null,
         611        => null,
         612        => null,
         613        => null,
         614        => null,
         615        => null,
         616        => null,
         617        => null,
         618        => null,
         619        => null,
         620        => null,
         621        => null,
         622        => null,
         623        => null,
         624        => null,
         625        => null,
         626        => null,
         627        => null,
         
        // Medicines (7)
         701        => null,
         702        => null,
         703        => null,
         704        => null,
         705        => null,
         706        => null,
         707        => null,
         708        => null,
         709        => null,
         710        => null,
         711        => null,
         712        => null,
         713        => null,
         714        => null,
         715        => null,
         716        => null,
         717        => null,
         
        // Metals (8)
         801        => null,
         802        => null,
         803        => null,
         804        => null,
         805        => null,
         806        => null,
         807        => null,
         808        => null,
         809        => null,
         810        => null,
         811        => null,
         812        => null,
         813        => null,
         814        => null,
         815        => null,
         816        => null,
         817        => null,
         818        => null,
         819        => null,
         820        => null,
         821        => null,
         822        => null,
         823        => null,
         824        => null,
         
        // Minerals (9)
         901        => null,
         902        => null,
         903        => null,
         904        => null,
         905        => null,
         906        => null,
         907        => null,
         908        => null,
         909        => null,
         910        => null,
         911        => null,
         912        => null,
         913        => null,
         914        => null,
         915        => null,
         916        => null,
         917        => null,
         918        => null,
         919        => null,
         920        => null,
         921        => null,
         922        => null,
         
        // Slavery (10)
        1001        => null,
        1002        => null,
        1003        => null,
        
        // Technology (11)
        1101        => null,
        1102        => null,
        1103        => null,
        1104        => null,
        1105        => null,
        1106        => null,
        1107        => null,
        1108        => null,
        1109        => null,
        1110        => null,
        1111        => null,
        1112        => null,
        1113        => null,
        1114        => null,
        1115        => null,
        1116        => null,
        1117        => null,
        1118        => null,
        1119        => null,
        1120        => null,
        
        // Textiles (12)
        1201        => null,
        1202        => null,
        1203        => null,
        1204        => null,
        1205        => null,
        1206        => null,
        1207        => null,
        1208        => null,
        1209        => null,
        1210        => null,
        1211        => null,
        1212        => null,
        
        // Waste (13)
        1301        => null,
        1302        => null,
        1303        => null,
        1304        => null,
        
        // Weapons (14)
        1401        => null,
        1402        => null,
        1403        => null,
        1404        => null,
        1405        => null,
        1406        => null,
        1407        => null,
        1408        => null,
        1409        => null,
        1410        => null,
        
        // Unknown (15)
        1501        => null,
        
        // Salvage (16)
        1601        => null,
        1602        => null,
        1603        => null,
        1604        => null,
        1605        => null,
        1606        => null,
        1607        => null,
        1608        => null,
        1609        => null,
        1610        => null,
        1611        => null,
        1612        => null,
        1613        => null,
        1614        => null,
        1615        => null,
        1616        => null,
        1617        => null,
        1618        => null,
        1619        => null,
        1620        => null,
        1621        => null,
        1622        => null,
        1623        => null,
        1624        => null,
        1625        => null,
        1626        => null,
        1627        => null,
        1628        => null,
        1629        => null,
        1630        => null,
        1631        => null,
        1632        => null,
        1633        => null,
        1634        => null,
        1635        => null,
        1636        => null,
        1637        => null,
        1638        => null,
        1639        => null,
        1640        => null,
        1641        => null,
        1642        => null,
        1643        => null,
        1644        => null,
        1645        => null,
        1646        => null,
        1647        => null,
        1648        => null,
        1649        => null,
        1650        => null,
        1651        => null,
        1652        => null,
        1653        => null,
        1654        => null,
        1655        => null,
        1656        => null,
        1657        => null,
        1658        => null,
        1659        => null,
        1660        => null,
        1661        => null,
        1662        => null,
        1663        => null,
        1664        => 'Chemically augmented waste that has agricultural applications. While not overly glamorous or profitable, its one redeeming feature is a virtually inexhaustible supply.',
        1665        => 'Insectoid livestock requires specialised cargo containers to safely transport. Insectoid livestock offer extremely efficient production of materials that can be harvested from them, having low overheads and farming requirements compared to larger species. The range of goods they can service is less extensive, however.',
        
        1800        => null,
        1801        => null,
        1802        => null,
        1803        => null,
        1804        => null,
        
        // Powerplay (99)
        9901        => null,
        9902        => null,
        9903        => null,
        9904        => null,
        9905        => null,
        9906        => null,
        9907        => null,
        9908        => null,
        9909        => null,
        9910        => null,
        9911        => null,
        9912        => null,
        9913        => null,
        9914        => null,
        9915        => null,
        9916        => null,
        9917        => null,
        9918        => null,
        9919        => null,
        9920        => null,
        9921        => null,
        9922        => null,
        9923        => null,
        9924        => null,
        9925        => null,
        9926        => null,
        9927        => null,
        9928        => null,
        9929        => null,
        9930        => null,
        9931        => null,
        9932        => null,
        9933        => null,
        9934        => null,
        9935        => null,
        9936        => null,
        9937        => null,
        9938        => null,
    ];
}