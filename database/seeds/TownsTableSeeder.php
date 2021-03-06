<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('towns')->delete();

        $towns = array(
            // Ilocos Norte
            ['province_id' => '012800000', 'id' => '012801000', 'name' => 'Adams'],
            ['province_id' => '012800000', 'id' => '012802000', 'name' => 'Bacarra'],
            ['province_id' => '012800000', 'id' => '012803000', 'name' => 'Badoc'],
            ['province_id' => '012800000', 'id' => '012804000', 'name' => 'Bangui'],
            ['province_id' => '012800000', 'id' => '012805000', 'name' => 'City Of Batac'],
            ['province_id' => '012800000', 'id' => '012806000', 'name' => 'Burgos'],
            ['province_id' => '012800000', 'id' => '012807000', 'name' => 'Carasi'],
            ['province_id' => '012800000', 'id' => '012808000', 'name' => 'Currimao'],
            ['province_id' => '012800000', 'id' => '012809000', 'name' => 'Dingras'],
            ['province_id' => '012800000', 'id' => '012810000', 'name' => 'Dumalneg'],
            ['province_id' => '012800000', 'id' => '012811000', 'name' => 'Banna (Espiritu)'],
            ['province_id' => '012800000', 'id' => '012812000', 'name' => 'Laoag City (Capital)'],
            ['province_id' => '012800000', 'id' => '012813000', 'name' => 'Marcos'],
            ['province_id' => '012800000', 'id' => '012814000', 'name' => 'Nueva Era'],
            ['province_id' => '012800000', 'id' => '012815000', 'name' => 'Pagudpud'],
            ['province_id' => '012800000', 'id' => '012816000', 'name' => 'Paoay'],
            ['province_id' => '012800000', 'id' => '012817000', 'name' => 'Pasuquin'],
            ['province_id' => '012800000', 'id' => '012818000', 'name' => 'Piddig'],
            ['province_id' => '012800000', 'id' => '012819000', 'name' => 'Pinili'],
            ['province_id' => '012800000', 'id' => '012820000', 'name' => 'San Nicolas'],
            ['province_id' => '012800000', 'id' => '012821000', 'name' => 'Sarrat'],
            ['province_id' => '012800000', 'id' => '012822000', 'name' => 'Solsona'],
            ['province_id' => '012800000', 'id' => '012823000', 'name' => 'Vintar'],
            // Ilocos Sur
            ['province_id' => '012900000', 'id' => '012901000', 'name' => 'Alilem'],
            ['province_id' => '012900000', 'id' => '012902000', 'name' => 'Banayoyo'],
            ['province_id' => '012900000', 'id' => '012903000', 'name' => 'Bantay'],
            ['province_id' => '012900000', 'id' => '012904000', 'name' => 'Burgos'],
            ['province_id' => '012900000', 'id' => '012905000', 'name' => 'Cabugao'],
            ['province_id' => '012900000', 'id' => '012906000', 'name' => 'City Of Candon'],
            ['province_id' => '012900000', 'id' => '012907000', 'name' => 'Caoayan'],
            ['province_id' => '012900000', 'id' => '012908000', 'name' => 'Cervantes'],
            ['province_id' => '012900000', 'id' => '012909000', 'name' => 'Galimuyod'],
            ['province_id' => '012900000', 'id' => '012910000', 'name' => 'Gregorio Del Pilar (Concepcion)'],
            ['province_id' => '012900000', 'id' => '012911000', 'name' => 'Lidlidda'],
            ['province_id' => '012900000', 'id' => '012912000', 'name' => 'Magsingal'],
            ['province_id' => '012900000', 'id' => '012913000', 'name' => 'Nagbukel'],
            ['province_id' => '012900000', 'id' => '012914000', 'name' => 'Narvacan'],
            ['province_id' => '012900000', 'id' => '012915000', 'name' => 'Quirino (Angkaki)'],
            ['province_id' => '012900000', 'id' => '012916000', 'name' => 'Salcedo (Baugen)'],
            ['province_id' => '012900000', 'id' => '012917000', 'name' => 'San Emilio'],
            ['province_id' => '012900000', 'id' => '012918000', 'name' => 'San Esteban'],
            ['province_id' => '012900000', 'id' => '012919000', 'name' => 'San Ildefonso'],
            ['province_id' => '012900000', 'id' => '012920000', 'name' => 'San Juan (Lapog)'],
            ['province_id' => '012900000', 'id' => '012921000', 'name' => 'San Vicente'],
            ['province_id' => '012900000', 'id' => '012922000', 'name' => 'Santa'],
            ['province_id' => '012900000', 'id' => '012923000', 'name' => 'Santa Catalina'],
            ['province_id' => '012900000', 'id' => '012924000', 'name' => 'Santa Cruz'],
            ['province_id' => '012900000', 'id' => '012925000', 'name' => 'Santa Lucia'],
            ['province_id' => '012900000', 'id' => '012926000', 'name' => 'Santa Maria'],
            ['province_id' => '012900000', 'id' => '012927000', 'name' => 'Santiago'],
            ['province_id' => '012900000', 'id' => '012928000', 'name' => 'Santo Domingo'],
            ['province_id' => '012900000', 'id' => '012929000', 'name' => 'Sigay'],
            ['province_id' => '012900000', 'id' => '012930000', 'name' => 'Sinait'],
            ['province_id' => '012900000', 'id' => '012931000', 'name' => 'Sugpon'],
            ['province_id' => '012900000', 'id' => '012932000', 'name' => 'Suyo'],
            ['province_id' => '012900000', 'id' => '012933000', 'name' => 'Tagudin'],
            ['province_id' => '012900000', 'id' => '012934000', 'name' => 'City Of Vigan (Capital)'],
            // La Union
            ['province_id' => '013300000', 'id' => '013301000', 'name' => 'Agoo'],
            ['province_id' => '013300000', 'id' => '013302000', 'name' => 'Aringay'],
            ['province_id' => '013300000', 'id' => '013303000', 'name' => 'Bacnotan'],
            ['province_id' => '013300000', 'id' => '013304000', 'name' => 'Bagulin'],
            ['province_id' => '013300000', 'id' => '013305000', 'name' => 'Balaoan'],
            ['province_id' => '013300000', 'id' => '013306000', 'name' => 'Bangar'],
            ['province_id' => '013300000', 'id' => '013307000', 'name' => 'Bauang'],
            ['province_id' => '013300000', 'id' => '013308000', 'name' => 'Burgos'],
            ['province_id' => '013300000', 'id' => '013309000', 'name' => 'Caba'],
            ['province_id' => '013300000', 'id' => '013310000', 'name' => 'Luna'],
            ['province_id' => '013300000', 'id' => '013311000', 'name' => 'Naguilian'],
            ['province_id' => '013300000', 'id' => '013312000', 'name' => 'Pugo'],
            ['province_id' => '013300000', 'id' => '013313000', 'name' => 'Rosario'],
            ['province_id' => '013300000', 'id' => '013314000', 'name' => 'City Of San Fernando (Capital)'],
            ['province_id' => '013300000', 'id' => '013315000', 'name' => 'San Gabriel'],
            ['province_id' => '013300000', 'id' => '013316000', 'name' => 'San Juan'],
            ['province_id' => '013300000', 'id' => '013317000', 'name' => 'Santo Tomas'],
            ['province_id' => '013300000', 'id' => '013318000', 'name' => 'Santol'],
            ['province_id' => '013300000', 'id' => '013319000', 'name' => 'Sudipen'],
            ['province_id' => '013300000', 'id' => '013320000', 'name' => 'Tubao'],
            // Pangasinan
            ['province_id' => '015500000', 'id' => '015501000', 'name' => 'Agno'],
            ['province_id' => '015500000', 'id' => '015502000', 'name' => 'Aguilar'],
            ['province_id' => '015500000', 'id' => '015503000', 'name' => 'City Of Alaminos'],
            ['province_id' => '015500000', 'id' => '015504000', 'name' => 'Alcala'],
            ['province_id' => '015500000', 'id' => '015505000', 'name' => 'Anda'],
            ['province_id' => '015500000', 'id' => '015506000', 'name' => 'Asingan'],
            ['province_id' => '015500000', 'id' => '015507000', 'name' => 'Balungao'],
            ['province_id' => '015500000', 'id' => '015508000', 'name' => 'Bani'],
            ['province_id' => '015500000', 'id' => '015509000', 'name' => 'Basista'],
            ['province_id' => '015500000', 'id' => '015510000', 'name' => 'Bautista'],
            ['province_id' => '015500000', 'id' => '015511000', 'name' => 'Bayambang'],
            ['province_id' => '015500000', 'id' => '015512000', 'name' => 'Binalonan'],
            ['province_id' => '015500000', 'id' => '015513000', 'name' => 'Binmaley'],
            ['province_id' => '015500000', 'id' => '015514000', 'name' => 'Bolinao'],
            ['province_id' => '015500000', 'id' => '015515000', 'name' => 'Bugallon'],
            ['province_id' => '015500000', 'id' => '015516000', 'name' => 'Burgos'],
            ['province_id' => '015500000', 'id' => '015517000', 'name' => 'Calasiao'],
            ['province_id' => '015500000', 'id' => '015518000', 'name' => 'Dagupan City'],
            ['province_id' => '015500000', 'id' => '015519000', 'name' => 'Dasol'],
            ['province_id' => '015500000', 'id' => '015520000', 'name' => 'Infanta'],
            ['province_id' => '015500000', 'id' => '015521000', 'name' => 'Labrador'],
            ['province_id' => '015500000', 'id' => '015522000', 'name' => 'Lingayen (Capital)'],
            ['province_id' => '015500000', 'id' => '015523000', 'name' => 'Mabini'],
            ['province_id' => '015500000', 'id' => '015524000', 'name' => 'Malasiqui'],
            ['province_id' => '015500000', 'id' => '015525000', 'name' => 'Manaoag'],
            ['province_id' => '015500000', 'id' => '015526000', 'name' => 'Mangaldan'],
            ['province_id' => '015500000', 'id' => '015527000', 'name' => 'Mangatarem'],
            ['province_id' => '015500000', 'id' => '015528000', 'name' => 'Mapandan'],
            ['province_id' => '015500000', 'id' => '015529000', 'name' => 'Natividad'],
            ['province_id' => '015500000', 'id' => '015530000', 'name' => 'Pozorrubio'],
            ['province_id' => '015500000', 'id' => '015531000', 'name' => 'Rosales'],
            ['province_id' => '015500000', 'id' => '015532000', 'name' => 'San Carlos City'],
            ['province_id' => '015500000', 'id' => '015533000', 'name' => 'San Fabian'],
            ['province_id' => '015500000', 'id' => '015534000', 'name' => 'San Jacinto'],
            ['province_id' => '015500000', 'id' => '015535000', 'name' => 'San Manuel'],
            ['province_id' => '015500000', 'id' => '015536000', 'name' => 'San Nicolas'],
            ['province_id' => '015500000', 'id' => '015537000', 'name' => 'San Quintin'],
            ['province_id' => '015500000', 'id' => '015538000', 'name' => 'Santa Barbara'],
            ['province_id' => '015500000', 'id' => '015539000', 'name' => 'Santa Maria'],
            ['province_id' => '015500000', 'id' => '015540000', 'name' => 'Santo Tomas'],
            ['province_id' => '015500000', 'id' => '015541000', 'name' => 'Sison'],
            ['province_id' => '015500000', 'id' => '015542000', 'name' => 'Sual'],
            ['province_id' => '015500000', 'id' => '015543000', 'name' => 'Tayug'],
            ['province_id' => '015500000', 'id' => '015544000', 'name' => 'Umingan'],
            ['province_id' => '015500000', 'id' => '015545000', 'name' => 'Urbiztondo'],
            ['province_id' => '015500000', 'id' => '015546000', 'name' => 'City Of Urdaneta'],
            ['province_id' => '015500000', 'id' => '015547000', 'name' => 'Villasis'],
            ['province_id' => '015500000', 'id' => '015548000', 'name' => 'Laoac'],
            // Batanes
            ['province_id' => '020900000', 'id' => '020901000', 'name' => 'Basco (Capital)'],
            ['province_id' => '020900000', 'id' => '020902000', 'name' => 'Itbayat'],
            ['province_id' => '020900000', 'id' => '020903000', 'name' => 'Ivana'],
            ['province_id' => '020900000', 'id' => '020904000', 'name' => 'Mahatao'],
            ['province_id' => '020900000', 'id' => '020905000', 'name' => 'Sabtang'],
            ['province_id' => '020900000', 'id' => '020906000', 'name' => 'Uyugan'],
            // Cagayan
            ['province_id' => '021500000', 'id' => '021501000', 'name' => 'Abulug'],
            ['province_id' => '021500000', 'id' => '021502000', 'name' => 'Alcala'],
            ['province_id' => '021500000', 'id' => '021503000', 'name' => 'Allacapan'],
            ['province_id' => '021500000', 'id' => '021504000', 'name' => 'Amulung'],
            ['province_id' => '021500000', 'id' => '021505000', 'name' => 'Aparri'],
            ['province_id' => '021500000', 'id' => '021506000', 'name' => 'Baggao'],
            ['province_id' => '021500000', 'id' => '021507000', 'name' => 'Ballesteros'],
            ['province_id' => '021500000', 'id' => '021508000', 'name' => 'Buguey'],
            ['province_id' => '021500000', 'id' => '021509000', 'name' => 'Calayan'],
            ['province_id' => '021500000', 'id' => '021510000', 'name' => 'Camalaniugan'],
            ['province_id' => '021500000', 'id' => '021511000', 'name' => 'Claveria'],
            ['province_id' => '021500000', 'id' => '021512000', 'name' => 'Enrile'],
            ['province_id' => '021500000', 'id' => '021513000', 'name' => 'Gattaran'],
            ['province_id' => '021500000', 'id' => '021514000', 'name' => 'Gonzaga'],
            ['province_id' => '021500000', 'id' => '021515000', 'name' => 'Iguig'],
            ['province_id' => '021500000', 'id' => '021516000', 'name' => 'Lal-Lo'],
            ['province_id' => '021500000', 'id' => '021517000', 'name' => 'Lasam'],
            ['province_id' => '021500000', 'id' => '021518000', 'name' => 'Pamplona'],
            ['province_id' => '021500000', 'id' => '021519000', 'name' => 'Peñablanca'],
            ['province_id' => '021500000', 'id' => '021520000', 'name' => 'Piat'],
            ['province_id' => '021500000', 'id' => '021521000', 'name' => 'Rizal'],
            ['province_id' => '021500000', 'id' => '021522000', 'name' => 'Sanchez-Mira'],
            ['province_id' => '021500000', 'id' => '021523000', 'name' => 'Santa Ana'],
            ['province_id' => '021500000', 'id' => '021524000', 'name' => 'Santa Praxedes'],
            ['province_id' => '021500000', 'id' => '021525000', 'name' => 'Santa Teresita'],
            ['province_id' => '021500000', 'id' => '021526000', 'name' => 'Santo Niño (Faire)'],
            ['province_id' => '021500000', 'id' => '021527000', 'name' => 'Solana'],
            ['province_id' => '021500000', 'id' => '021528000', 'name' => 'Tuao'],
            ['province_id' => '021500000', 'id' => '021529000', 'name' => 'Tuguegarao City (Capital)'],
            // Isabela
            ['province_id' => '023100000', 'id' => '023101000', 'name' => 'Alicia'],
            ['province_id' => '023100000', 'id' => '023102000', 'name' => 'Angadanan'],
            ['province_id' => '023100000', 'id' => '023103000', 'name' => 'Aurora'],
            ['province_id' => '023100000', 'id' => '023104000', 'name' => 'Benito Soliven'],
            ['province_id' => '023100000', 'id' => '023105000', 'name' => 'Burgos'],
            ['province_id' => '023100000', 'id' => '023106000', 'name' => 'Cabagan'],
            ['province_id' => '023100000', 'id' => '023107000', 'name' => 'Cabatuan'],
            ['province_id' => '023100000', 'id' => '023108000', 'name' => 'City Of Cauayan'],
            ['province_id' => '023100000', 'id' => '023109000', 'name' => 'Cordon'],
            ['province_id' => '023100000', 'id' => '023110000', 'name' => 'Dinapigue'],
            ['province_id' => '023100000', 'id' => '023111000', 'name' => 'Divilacan'],
            ['province_id' => '023100000', 'id' => '023112000', 'name' => 'Echague'],
            ['province_id' => '023100000', 'id' => '023113000', 'name' => 'Gamu'],
            ['province_id' => '023100000', 'id' => '023114000', 'name' => 'Ilagan City(Capital)'],
            ['province_id' => '023100000', 'id' => '023115000', 'name' => 'Jones'],
            ['province_id' => '023100000', 'id' => '023116000', 'name' => 'Luna'],
            ['province_id' => '023100000', 'id' => '023117000', 'name' => 'Maconacon'],
            ['province_id' => '023100000', 'id' => '023118000', 'name' => 'Delfin Albano (Magsaysay)'],
            ['province_id' => '023100000', 'id' => '023119000', 'name' => 'Mallig'],
            ['province_id' => '023100000', 'id' => '023120000', 'name' => 'Naguilian'],
            ['province_id' => '023100000', 'id' => '023121000', 'name' => 'Palanan'],
            ['province_id' => '023100000', 'id' => '023122000', 'name' => 'Quezon'],
            ['province_id' => '023100000', 'id' => '023123000', 'name' => 'Quirino'],
            ['province_id' => '023100000', 'id' => '023124000', 'name' => 'Ramon'],
            ['province_id' => '023100000', 'id' => '023125000', 'name' => 'Reina Mercedes'],
            ['province_id' => '023100000', 'id' => '023126000', 'name' => 'Roxas'],
            ['province_id' => '023100000', 'id' => '023127000', 'name' => 'San Agustin'],
            ['province_id' => '023100000', 'id' => '023128000', 'name' => 'San Guillermo'],
            ['province_id' => '023100000', 'id' => '023129000', 'name' => 'San Isidro'],
            ['province_id' => '023100000', 'id' => '023130000', 'name' => 'San Manuel'],
            ['province_id' => '023100000', 'id' => '023131000', 'name' => 'San Mariano'],
            ['province_id' => '023100000', 'id' => '023132000', 'name' => 'San Mateo'],
            ['province_id' => '023100000', 'id' => '023133000', 'name' => 'San Pablo'],
            ['province_id' => '023100000', 'id' => '023134000', 'name' => 'Santa Maria'],
            ['province_id' => '023100000', 'id' => '023135000', 'name' => 'City Of Santiago'],
            ['province_id' => '023100000', 'id' => '023136000', 'name' => 'Santo Tomas'],
            ['province_id' => '023100000', 'id' => '023137000', 'name' => 'Tumauini'],
            // Nueva Viscaya
            ['province_id' => '025000000', 'id' => '025001000', 'name' => 'Ambaguio'],
            ['province_id' => '025000000', 'id' => '025002000', 'name' => 'Aritao'],
            ['province_id' => '025000000', 'id' => '025003000', 'name' => 'Bagabag'],
            ['province_id' => '025000000', 'id' => '025004000', 'name' => 'Bambang'],
            ['province_id' => '025000000', 'id' => '025005000', 'name' => 'Bayombong (Capital)'],
            ['province_id' => '025000000', 'id' => '025006000', 'name' => 'Diadi'],
            ['province_id' => '025000000', 'id' => '025007000', 'name' => 'Dupax Del Norte'],
            ['province_id' => '025000000', 'id' => '025008000', 'name' => 'Dupax Del Sur'],
            ['province_id' => '025000000', 'id' => '025009000', 'name' => 'Kasibu'],
            ['province_id' => '025000000', 'id' => '025010000', 'name' => 'Kayapa'],
            ['province_id' => '025000000', 'id' => '025011000', 'name' => 'Quezon'],
            ['province_id' => '025000000', 'id' => '025012000', 'name' => 'Santa Fe'],
            ['province_id' => '025000000', 'id' => '025013000', 'name' => 'Solano'],
            ['province_id' => '025000000', 'id' => '025014000', 'name' => 'Villaverde'],
            ['province_id' => '025000000', 'id' => '025015000', 'name' => 'Alfonso Castaneda'],
            // Quirino
            ['province_id' => '025700000', 'id' => '025701000', 'name' => 'Aglipay'],
            ['province_id' => '025700000', 'id' => '025702000', 'name' => 'Cabarroguis (Capital)'],
            ['province_id' => '025700000', 'id' => '025703000', 'name' => 'Diffun'],
            ['province_id' => '025700000', 'id' => '025704000', 'name' => 'Maddela'],
            ['province_id' => '025700000', 'id' => '025705000', 'name' => 'Saguday'],
            ['province_id' => '025700000', 'id' => '025706000', 'name' => 'Nagtipunan'],
            // Bataan
            ['province_id' => '030800000', 'id' => '030801000', 'name' => 'Abucay'],
            ['province_id' => '030800000', 'id' => '030802000', 'name' => 'Bagac'],
            ['province_id' => '030800000', 'id' => '030803000', 'name' => 'City Of Balanga (Capital)'],
            ['province_id' => '030800000', 'id' => '030804000', 'name' => 'Dinalupihan'],
            ['province_id' => '030800000', 'id' => '030805000', 'name' => 'Hermosa'],
            ['province_id' => '030800000', 'id' => '030806000', 'name' => 'Limay'],
            ['province_id' => '030800000', 'id' => '030807000', 'name' => 'Mariveles'],
            ['province_id' => '030800000', 'id' => '030808000', 'name' => 'Morong'],
            ['province_id' => '030800000', 'id' => '030809000', 'name' => 'Orani'],
            ['province_id' => '030800000', 'id' => '030810000', 'name' => 'Orion'],
            ['province_id' => '030800000', 'id' => '030811000', 'name' => 'Pilar'],
            ['province_id' => '030800000', 'id' => '030812000', 'name' => 'Samal'],
            // Bulacan
            ['province_id' => '031400000', 'id' => '031401000', 'name' => 'Angat'],
            ['province_id' => '031400000', 'id' => '031402000', 'name' => 'Balagtas (Bigaa)'],
            ['province_id' => '031400000', 'id' => '031403000', 'name' => 'Baliuag'],
            ['province_id' => '031400000', 'id' => '031404000', 'name' => 'Bocaue'],
            ['province_id' => '031400000', 'id' => '031405000', 'name' => 'Bulacan'],
            ['province_id' => '031400000', 'id' => '031406000', 'name' => 'Bustos'],
            ['province_id' => '031400000', 'id' => '031407000', 'name' => 'Calumpit'],
            ['province_id' => '031400000', 'id' => '031408000', 'name' => 'Guiguinto'],
            ['province_id' => '031400000', 'id' => '031409000', 'name' => 'Hagonoy'],
            ['province_id' => '031400000', 'id' => '031410000', 'name' => 'City Of Malolos (Capital)'],
            ['province_id' => '031400000', 'id' => '031411000', 'name' => 'Marilao'],
            ['province_id' => '031400000', 'id' => '031412000', 'name' => 'City Of Meycauayan'],
            ['province_id' => '031400000', 'id' => '031413000', 'name' => 'Norzagaray'],
            ['province_id' => '031400000', 'id' => '031414000', 'name' => 'Obando'],
            ['province_id' => '031400000', 'id' => '031415000', 'name' => 'Pandi'],
            ['province_id' => '031400000', 'id' => '031416000', 'name' => 'Paombong'],
            ['province_id' => '031400000', 'id' => '031417000', 'name' => 'Plaridel'],
            ['province_id' => '031400000', 'id' => '031418000', 'name' => 'Pulilan'],
            ['province_id' => '031400000', 'id' => '031419000', 'name' => 'San Ildefonso'],
            ['province_id' => '031400000', 'id' => '031420000', 'name' => 'City Of San Jose Del Monte'],
            ['province_id' => '031400000', 'id' => '031421000', 'name' => 'San Miguel'],
            ['province_id' => '031400000', 'id' => '031422000', 'name' => 'San Rafael'],
            ['province_id' => '031400000', 'id' => '031423000', 'name' => 'Santa Maria'],
            ['province_id' => '031400000', 'id' => '031424000', 'name' => 'Doña Remedios Trinidad'],
            // Nueva Ecija
            ['province_id' => '034900000', 'id' => '034901000', 'name' => 'Aliaga'],
            ['province_id' => '034900000', 'id' => '034902000', 'name' => 'Bongabon'],
            ['province_id' => '034900000', 'id' => '034903000', 'name' => 'Cabanatuan City'],
            ['province_id' => '034900000', 'id' => '034904000', 'name' => 'Cabiao'],
            ['province_id' => '034900000', 'id' => '034905000', 'name' => 'Carranglan'],
            ['province_id' => '034900000', 'id' => '034906000', 'name' => 'Cuyapo'],
            ['province_id' => '034900000', 'id' => '034907000', 'name' => 'Gabaldon (Bitulok & Sabani)'],
            ['province_id' => '034900000', 'id' => '034908000', 'name' => 'City Of Gapan'],
            ['province_id' => '034900000', 'id' => '034909000', 'name' => 'General Mamerto Natividad'],
            ['province_id' => '034900000', 'id' => '034910000', 'name' => 'General Tinio (Papaya)'],
            ['province_id' => '034900000', 'id' => '034911000', 'name' => 'Guimba'],
            ['province_id' => '034900000', 'id' => '034912000', 'name' => 'Jaen'],
            ['province_id' => '034900000', 'id' => '034913000', 'name' => 'Laur'],
            ['province_id' => '034900000', 'id' => '034914000', 'name' => 'Licab'],
            ['province_id' => '034900000', 'id' => '034915000', 'name' => 'Llanera'],
            ['province_id' => '034900000', 'id' => '034916000', 'name' => 'Lupao'],
            ['province_id' => '034900000', 'id' => '034917000', 'name' => 'Science City Of Muñoz'],
            ['province_id' => '034900000', 'id' => '034918000', 'name' => 'Nampicuan'],
            ['province_id' => '034900000', 'id' => '034919000', 'name' => 'Palayan City (Capital)'],
            ['province_id' => '034900000', 'id' => '034920000', 'name' => 'Pantabangan'],
            ['province_id' => '034900000', 'id' => '034921000', 'name' => 'Peñaranda'],
            ['province_id' => '034900000', 'id' => '034922000', 'name' => 'Quezon'],
            ['province_id' => '034900000', 'id' => '034923000', 'name' => 'Rizal'],
            ['province_id' => '034900000', 'id' => '034924000', 'name' => 'San Antonio'],
            ['province_id' => '034900000', 'id' => '034925000', 'name' => 'San Isidro'],
            ['province_id' => '034900000', 'id' => '034926000', 'name' => 'San Jose City'],
            ['province_id' => '034900000', 'id' => '034927000', 'name' => 'San Leonardo'],
            ['province_id' => '034900000', 'id' => '034928000', 'name' => 'Santa Rosa'],
            ['province_id' => '034900000', 'id' => '034929000', 'name' => 'Santo Domingo'],
            ['province_id' => '034900000', 'id' => '034930000', 'name' => 'Talavera'],
            ['province_id' => '034900000', 'id' => '034931000', 'name' => 'Talugtug'],
            ['province_id' => '034900000', 'id' => '034932000', 'name' => 'Zaragoza'],
            // Pampanga
            ['province_id' => '035400000', 'id' => '035401000', 'name' => 'Angeles City'],
            ['province_id' => '035400000', 'id' => '035402000', 'name' => 'Apalit'],
            ['province_id' => '035400000', 'id' => '035403000', 'name' => 'Arayat'],
            ['province_id' => '035400000', 'id' => '035404000', 'name' => 'Bacolor'],
            ['province_id' => '035400000', 'id' => '035405000', 'name' => 'Candaba'],
            ['province_id' => '035400000', 'id' => '035406000', 'name' => 'Floridablanca'],
            ['province_id' => '035400000', 'id' => '035407000', 'name' => 'Guagua'],
            ['province_id' => '035400000', 'id' => '035408000', 'name' => 'Lubao'],
            ['province_id' => '035400000', 'id' => '035409000', 'name' => 'Mabalacat City'],
            ['province_id' => '035400000', 'id' => '035410000', 'name' => 'Macabebe'],
            ['province_id' => '035400000', 'id' => '035411000', 'name' => 'Magalang'],
            ['province_id' => '035400000', 'id' => '035412000', 'name' => 'Masantol'],
            ['province_id' => '035400000', 'id' => '035413000', 'name' => 'Mexico'],
            ['province_id' => '035400000', 'id' => '035414000', 'name' => 'Minalin'],
            ['province_id' => '035400000', 'id' => '035415000', 'name' => 'Porac'],
            ['province_id' => '035400000', 'id' => '035416000', 'name' => 'City Of San Fernando (Capital)'],
            ['province_id' => '035400000', 'id' => '035417000', 'name' => 'San Luis'],
            ['province_id' => '035400000', 'id' => '035418000', 'name' => 'San Simon'],
            ['province_id' => '035400000', 'id' => '035419000', 'name' => 'Santa Ana'],
            ['province_id' => '035400000', 'id' => '035420000', 'name' => 'Santa Rita'],
            ['province_id' => '035400000', 'id' => '035421000', 'name' => 'Santo Tomas'],
            ['province_id' => '035400000', 'id' => '035422000', 'name' => 'Sasmuan (Sexmoan)'],
            // Tarlac
            ['province_id' => '036900000', 'id' => '036901000', 'name' => 'Anao'],
            ['province_id' => '036900000', 'id' => '036902000', 'name' => 'Bamban'],
            ['province_id' => '036900000', 'id' => '036903000', 'name' => 'Camiling'],
            ['province_id' => '036900000', 'id' => '036904000', 'name' => 'Capas'],
            ['province_id' => '036900000', 'id' => '036905000', 'name' => 'Concepcion'],
            ['province_id' => '036900000', 'id' => '036906000', 'name' => 'Gerona'],
            ['province_id' => '036900000', 'id' => '036907000', 'name' => 'La Paz'],
            ['province_id' => '036900000', 'id' => '036908000', 'name' => 'Mayantoc'],
            ['province_id' => '036900000', 'id' => '036909000', 'name' => 'Moncada'],
            ['province_id' => '036900000', 'id' => '036910000', 'name' => 'Paniqui'],
            ['province_id' => '036900000', 'id' => '036911000', 'name' => 'Pura'],
            ['province_id' => '036900000', 'id' => '036912000', 'name' => 'Ramos'],
            ['province_id' => '036900000', 'id' => '036913000', 'name' => 'San Clemente'],
            ['province_id' => '036900000', 'id' => '036914000', 'name' => 'San Manuel'],
            ['province_id' => '036900000', 'id' => '036915000', 'name' => 'Santa Ignacia'],
            ['province_id' => '036900000', 'id' => '036916000', 'name' => 'City Of Tarlac (Capital)'],
            ['province_id' => '036900000', 'id' => '036917000', 'name' => 'Victoria'],
            ['province_id' => '036900000', 'id' => '036918000', 'name' => 'San Jose'],
            // Zambales
            ['province_id' => '037100000', 'id' => '037101000', 'name' => 'Botolan'],
            ['province_id' => '037100000', 'id' => '037102000', 'name' => 'Cabangan'],
            ['province_id' => '037100000', 'id' => '037103000', 'name' => 'Candelaria'],
            ['province_id' => '037100000', 'id' => '037104000', 'name' => 'Castillejos'],
            ['province_id' => '037100000', 'id' => '037105000', 'name' => 'Iba (Capital)'],
            ['province_id' => '037100000', 'id' => '037106000', 'name' => 'Masinloc'],
            ['province_id' => '037100000', 'id' => '037107000', 'name' => 'Olongapo City'],
            ['province_id' => '037100000', 'id' => '037108000', 'name' => 'Palauig'],
            ['province_id' => '037100000', 'id' => '037109000', 'name' => 'San Antonio'],
            ['province_id' => '037100000', 'id' => '037110000', 'name' => 'San Felipe'],
            ['province_id' => '037100000', 'id' => '037111000', 'name' => 'San Marcelino'],
            ['province_id' => '037100000', 'id' => '037112000', 'name' => 'San Narciso'],
            ['province_id' => '037100000', 'id' => '037113000', 'name' => 'Santa Cruz'],
            ['province_id' => '037100000', 'id' => '037114000', 'name' => 'Subic'],
            // Aurora
            ['province_id' => '037700000', 'id' => '037701000', 'name' => 'Baler (Capital)'],
            ['province_id' => '037700000', 'id' => '037702000', 'name' => 'Casiguran'],
            ['province_id' => '037700000', 'id' => '037703000', 'name' => 'Dilasag'],
            ['province_id' => '037700000', 'id' => '037704000', 'name' => 'Dinalungan'],
            ['province_id' => '037700000', 'id' => '037705000', 'name' => 'Dingalan'],
            ['province_id' => '037700000', 'id' => '037706000', 'name' => 'Dipaculao'],
            ['province_id' => '037700000', 'id' => '037707000', 'name' => 'Maria Aurora'],
            ['province_id' => '037700000', 'id' => '037708000', 'name' => 'San Luis'],
        );

        // Uncomment the below to run the seeder
        DB::table('towns')->insert($towns);
    }
}
