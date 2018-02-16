<?php

use Illuminate\Database\Seeder;

use App\Canton;
use App\Pais;
use App\Parroquias as Parroquia;
use App\Provincias as Provincia;

class EcuadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Pais::create( [
    		'id'=>1,
    		'pais'=>'Ecuador',
    		'cod_postal'=>'070701',
    		'latitud'=>'-2.55585',
    		'longitud'=>'-79.6777'
    	] );


    	Provincia::create( [
    		'id'=>1,
    		'provincia'=>'AZUAY',
    		'cod_prov'=>'01',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>2,
    		'provincia'=>'BOLIVAR',
    		'cod_prov'=>'02',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>3,
    		'provincia'=>'CAÑAR',
    		'cod_prov'=>'03',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>4,
    		'provincia'=>'CARCHI',
    		'cod_prov'=>'04',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>5,
    		'provincia'=>'COTOPAXI',
    		'cod_prov'=>'05',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>6,
    		'provincia'=>'CHIMBORAZO',
    		'cod_prov'=>'06',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>7,
    		'provincia'=>'EL ORO',
    		'cod_prov'=>'07',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>8,
    		'provincia'=>'ESMERALDAS',
    		'cod_prov'=>'08',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>9,
    		'provincia'=>'GUAYAS',
    		'cod_prov'=>'09',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>10,
    		'provincia'=>'IMBABURA',
    		'cod_prov'=>'10',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>11,
    		'provincia'=>'LOJA',
    		'cod_prov'=>'11',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>12,
    		'provincia'=>'LOS RIOS',
    		'cod_prov'=>'12',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>13,
    		'provincia'=>'MANABI',
    		'cod_prov'=>'13',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>14,
    		'provincia'=>'MORONA SANTIAGO',
    		'cod_prov'=>14,
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>15,
    		'provincia'=>'NAPO',
    		'cod_prov'=>'15',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>16,
    		'provincia'=>'PASTAZA',
    		'cod_prov'=>'16',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>17,
    		'provincia'=>'PICHINCHA',
    		'cod_prov'=>'17',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>18,
    		'provincia'=>'TUNGURAHUA',
    		'cod_prov'=>'18',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>19,
    		'provincia'=>'ZAMORA CHINCHIPE',
    		'cod_prov'=>'19',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>20,
    		'provincia'=>'GALAPAGOS',
    		'cod_prov'=>'20',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>21,
    		'provincia'=>'SUCUMBIOS',
    		'cod_prov'=>'21',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>22,
    		'provincia'=>'ORELLANA',
    		'cod_prov'=>'22',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>23,
    		'provincia'=>'SANTO DOMINGO DE LOS TSACHILAS',
    		'cod_prov'=>'23',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>24,
    		'provincia'=>'SANTA ELENA',
    		'cod_prov'=>'24',
    		'pais_id'=>1
    	] );



    	Provincia::create( [
    		'id'=>25,
    		'provincia'=>'ZONAS NO DELIMITADAS',
    		'cod_prov'=>'90',
    		'pais_id'=>1
    	] );


    	Canton::create( [
    		'id'=>1,
    		'canton'=>'CUENCA',
    		'cod_cant'=>'0101',
    		'cod_postal'=>'010150',
    		'latitud'=>'-2.89601',
    		'longitud'=>'-79.00517',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>2,
    		'canton'=>'GIRÓN',
    		'cod_cant'=>'0102',
    		'cod_postal'=>'010250',
    		'latitud'=>'-3.15899',
    		'longitud'=>'-79.1478',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>3,
    		'canton'=>'GUALACEO',
    		'cod_cant'=>'0103',
    		'cod_postal'=>'010350',
    		'latitud'=>'-2.92194',
    		'longitud'=>'-78.77284',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>4,
    		'canton'=>'NABÓN',
    		'cod_cant'=>'0104',
    		'cod_postal'=>'010450',
    		'latitud'=>'-3.33592',
    		'longitud'=>'-79.0638',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>5,
    		'canton'=>'PAUTE',
    		'cod_cant'=>'0105',
    		'cod_postal'=>'010550',
    		'latitud'=>'-2.77997',
    		'longitud'=>'-78.76119',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>6,
    		'canton'=>'PUCARA',
    		'cod_cant'=>'0106',
    		'cod_postal'=>'010650',
    		'latitud'=>'-3.23333',
    		'longitud'=>'-79.46667',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>7,
    		'canton'=>'SAN FERNANDO',
    		'cod_cant'=>'0107',
    		'cod_postal'=>'010750',
    		'latitud'=>'-3.14723',
    		'longitud'=>'-79.25466',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>8,
    		'canton'=>'SANTA ISABEL',
    		'cod_cant'=>'0108',
    		'cod_postal'=>'010850',
    		'latitud'=>'-3.27578',
    		'longitud'=>'-79.31474',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>9,
    		'canton'=>'SIGSIG',
    		'cod_cant'=>'0109',
    		'cod_postal'=>'010950',
    		'latitud'=>'-3.09066',
    		'longitud'=>'-78.80524',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>10,
    		'canton'=>'OÑA',
    		'cod_cant'=>'0110',
    		'cod_postal'=>'011050',
    		'latitud'=>'-2.86667',
    		'longitud'=>'-78.78333',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>11,
    		'canton'=>'CHORDELEG',
    		'cod_cant'=>'0111',
    		'cod_postal'=>'011150',
    		'latitud'=>'-2.92175',
    		'longitud'=>'-78.77473',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>12,
    		'canton'=>'EL PAN',
    		'cod_cant'=>'0112',
    		'cod_postal'=>'011250',
    		'latitud'=>'-2.88708',
    		'longitud'=>'-78.9778',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>13,
    		'canton'=>'SEVILLA DE ORO',
    		'cod_cant'=>'0113',
    		'cod_postal'=>'011350',
    		'latitud'=>'-2.90085',
    		'longitud'=>'-79.01356',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>14,
    		'canton'=>'GUACHAPALA',
    		'cod_cant'=>'0114',
    		'cod_postal'=>'011450',
    		'latitud'=>'-2.77034',
    		'longitud'=>'-78.71198',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>15,
    		'canton'=>'CAMILO PONCE ENRÍQUEZ',
    		'cod_cant'=>'0115',
    		'cod_postal'=>'011550',
    		'latitud'=>'-3.0599',
    		'longitud'=>'-79.74647',
    		'provincia_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>16,
    		'canton'=>'GUARANDA',
    		'cod_cant'=>'0201',
    		'cod_postal'=>'020150',
    		'latitud'=>'-1.59167',
    		'longitud'=>'-79.00093',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>17,
    		'canton'=>'CHILLANES',
    		'cod_cant'=>'0202',
    		'cod_postal'=>'020250',
    		'latitud'=>'-1.94282',
    		'longitud'=>'-79.0668',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>18,
    		'canton'=>'CHIMBO',
    		'cod_cant'=>'0203',
    		'cod_postal'=>'020350',
    		'latitud'=>'-1.68349',
    		'longitud'=>'-79.02534',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>19,
    		'canton'=>'ECHEANDÍA',
    		'cod_cant'=>'0204',
    		'cod_postal'=>'020450',
    		'latitud'=>'-1.43218',
    		'longitud'=>'-79.28097',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>20,
    		'canton'=>'SAN MIGUEL',
    		'cod_cant'=>'0205',
    		'cod_postal'=>'020550',
    		'latitud'=>'-1.80773',
    		'longitud'=>'-79.07585',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>21,
    		'canton'=>'CALUMA',
    		'cod_cant'=>'0206',
    		'cod_postal'=>'020650',
    		'latitud'=>'-0.27792',
    		'longitud'=>'-78.52267',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>22,
    		'canton'=>'LAS NAVES',
    		'cod_cant'=>'0207',
    		'cod_postal'=>'020701',
    		'latitud'=>'-1.27086',
    		'longitud'=>'-79.32191',
    		'provincia_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>23,
    		'canton'=>'AZOGUES',
    		'cod_cant'=>'0301',
    		'cod_postal'=>'030102',
    		'latitud'=>'-2.74087',
    		'longitud'=>'-78.84747',
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>24,
    		'canton'=>'BIBLIÁN',
    		'cod_cant'=>'0302',
    		'cod_postal'=>'030250',
    		'latitud'=>'-2.71466',
    		'longitud'=>'-78.88457',
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>25,
    		'canton'=>'CAÑAR',
    		'cod_cant'=>'0303',
    		'cod_postal'=>'030350',
    		'latitud'=>'-2.48262',
    		'longitud'=>'-78.97972',
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>26,
    		'canton'=>'LA TRONCAL',
    		'cod_cant'=>'0304',
    		'cod_postal'=>'030450',
    		'latitud'=>'-2.42167',
    		'longitud'=>'-79.34233',
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>27,
    		'canton'=>'EL TAMBO',
    		'cod_cant'=>'0305',
    		'cod_postal'=>'010151',
    		'latitud'=>'-4.07316',
    		'longitud'=>'-79.30845',
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>28,
    		'canton'=>'DÉLEG',
    		'cod_cant'=>'0306',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>29,
    		'canton'=>'SUSCAL',
    		'cod_cant'=>'0307',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>30,
    		'canton'=>'TULCÁN',
    		'cod_cant'=>'0401',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>31,
    		'canton'=>'BOLÍVAR',
    		'cod_cant'=>'0402',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>32,
    		'canton'=>'ESPEJO',
    		'cod_cant'=>'0403',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>33,
    		'canton'=>'MIRA',
    		'cod_cant'=>'0404',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>34,
    		'canton'=>'MONTÚFAR',
    		'cod_cant'=>'0405',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>35,
    		'canton'=>'SAN PEDRO DE HUACA',
    		'cod_cant'=>'0406',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>36,
    		'canton'=>'LATACUNGA',
    		'cod_cant'=>'0501',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>37,
    		'canton'=>'LA MANÁ',
    		'cod_cant'=>'0502',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>38,
    		'canton'=>'PANGUA',
    		'cod_cant'=>'0503',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>39,
    		'canton'=>'PUJILI',
    		'cod_cant'=>'0504',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>40,
    		'canton'=>'SALCEDO',
    		'cod_cant'=>'0505',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>41,
    		'canton'=>'SAQUISILÍ',
    		'cod_cant'=>'0506',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>42,
    		'canton'=>'SIGCHOS',
    		'cod_cant'=>'0507',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>43,
    		'canton'=>'RIOBAMBA',
    		'cod_cant'=>'0601',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>44,
    		'canton'=>'ALAUSI',
    		'cod_cant'=>'0602',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>45,
    		'canton'=>'COLTA',
    		'cod_cant'=>'0603',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>46,
    		'canton'=>'CHAMBO',
    		'cod_cant'=>'0604',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>47,
    		'canton'=>'CHUNCHI',
    		'cod_cant'=>'0605',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>48,
    		'canton'=>'GUAMOTE',
    		'cod_cant'=>'0606',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>49,
    		'canton'=>'GUANO',
    		'cod_cant'=>'0607',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>50,
    		'canton'=>'PALLATANGA',
    		'cod_cant'=>'0608',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>51,
    		'canton'=>'PENIPE',
    		'cod_cant'=>'0609',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>52,
    		'canton'=>'CUMANDÁ',
    		'cod_cant'=>'0610',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>53,
    		'canton'=>'MACHALA',
    		'cod_cant'=>'0701',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>54,
    		'canton'=>'ARENILLAS',
    		'cod_cant'=>'0702',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>55,
    		'canton'=>'ATAHUALPA',
    		'cod_cant'=>'0703',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>56,
    		'canton'=>'BALSAS',
    		'cod_cant'=>'0704',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>57,
    		'canton'=>'CHILLA',
    		'cod_cant'=>'0705',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>58,
    		'canton'=>'EL GUABO',
    		'cod_cant'=>'0706',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>59,
    		'canton'=>'HUAQUILLAS',
    		'cod_cant'=>'0707',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>60,
    		'canton'=>'MARCABELÍ',
    		'cod_cant'=>'0708',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>61,
    		'canton'=>'PASAJE',
    		'cod_cant'=>'0709',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>62,
    		'canton'=>'PIÑAS',
    		'cod_cant'=>'0710',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>63,
    		'canton'=>'PORTOVELO',
    		'cod_cant'=>'0711',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>64,
    		'canton'=>'SANTA ROSA',
    		'cod_cant'=>'0712',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>65,
    		'canton'=>'ZARUMA',
    		'cod_cant'=>'0713',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>66,
    		'canton'=>'LAS LAJAS',
    		'cod_cant'=>'0714',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>67,
    		'canton'=>'ESMERALDAS',
    		'cod_cant'=>'0801',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>68,
    		'canton'=>'ELOY ALFARO',
    		'cod_cant'=>'0802',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>69,
    		'canton'=>'MUISNE',
    		'cod_cant'=>'0803',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>70,
    		'canton'=>'QUININDÉ',
    		'cod_cant'=>'0804',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>71,
    		'canton'=>'SAN LORENZO',
    		'cod_cant'=>'0805',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>72,
    		'canton'=>'ATACAMES',
    		'cod_cant'=>'0806',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>73,
    		'canton'=>'RIOVERDE',
    		'cod_cant'=>'0807',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>74,
    		'canton'=>'LA CONCORDIA',
    		'cod_cant'=>'0808',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>75,
    		'canton'=>'GUAYAQUIL',
    		'cod_cant'=>'0901',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>76,
    		'canton'=>'ALFREDO BAQUERIZO MORENO (JUJÁN)',
    		'cod_cant'=>'0902',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>77,
    		'canton'=>'BALAO',
    		'cod_cant'=>'0903',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>78,
    		'canton'=>'BALZAR',
    		'cod_cant'=>'0904',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>79,
    		'canton'=>'COLIMES',
    		'cod_cant'=>'0905',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>80,
    		'canton'=>'DAULE',
    		'cod_cant'=>'0906',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>81,
    		'canton'=>'DURÁN',
    		'cod_cant'=>'0907',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>82,
    		'canton'=>'EL EMPALME',
    		'cod_cant'=>'0908',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>83,
    		'canton'=>'EL TRIUNFO',
    		'cod_cant'=>'0909',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>84,
    		'canton'=>'MILAGRO',
    		'cod_cant'=>'0910',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>85,
    		'canton'=>'NARANJAL',
    		'cod_cant'=>'0911',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>86,
    		'canton'=>'NARANJITO',
    		'cod_cant'=>'0912',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>87,
    		'canton'=>'PALESTINA',
    		'cod_cant'=>'0913',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>88,
    		'canton'=>'PEDRO CARBO',
    		'cod_cant'=>'0914',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>89,
    		'canton'=>'SAMBORONDÓN',
    		'cod_cant'=>'0916',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>90,
    		'canton'=>'SANTA LUCÍA',
    		'cod_cant'=>'0918',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>91,
    		'canton'=>'SALITRE (URBINA JADO)',
    		'cod_cant'=>'0919',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>92,
    		'canton'=>'SAN JACINTO DE YAGUACHI',
    		'cod_cant'=>'0920',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>93,
    		'canton'=>'PLAYAS',
    		'cod_cant'=>'0921',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>94,
    		'canton'=>'SIMÓN BOLÍVAR',
    		'cod_cant'=>'0922',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>95,
    		'canton'=>'CORONEL MARCELINO MARIDUEÑA',
    		'cod_cant'=>'0923',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>96,
    		'canton'=>'LOMAS DE SARGENTILLO',
    		'cod_cant'=>'0924',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>97,
    		'canton'=>'NOBOL',
    		'cod_cant'=>'0925',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>98,
    		'canton'=>'GENERAL ANTONIO ELIZALDE',
    		'cod_cant'=>'0927',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>99,
    		'canton'=>'ISIDRO AYORA',
    		'cod_cant'=>'0928',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>100,
    		'canton'=>'IBARRA',
    		'cod_cant'=>'1001',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>101,
    		'canton'=>'ANTONIO ANTE',
    		'cod_cant'=>'1002',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>102,
    		'canton'=>'COTACACHI',
    		'cod_cant'=>'1003',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>103,
    		'canton'=>'OTAVALO',
    		'cod_cant'=>'1004',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>104,
    		'canton'=>'PIMAMPIRO',
    		'cod_cant'=>'1005',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>105,
    		'canton'=>'SAN MIGUEL DE URCUQUÍ',
    		'cod_cant'=>'1006',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>106,
    		'canton'=>'LOJA',
    		'cod_cant'=>'1101',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>107,
    		'canton'=>'CALVAS',
    		'cod_cant'=>'1102',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>108,
    		'canton'=>'CATAMAYO',
    		'cod_cant'=>'1103',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>109,
    		'canton'=>'CELICA',
    		'cod_cant'=>'1104',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>110,
    		'canton'=>'CHAGUARPAMBA',
    		'cod_cant'=>'1105',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>111,
    		'canton'=>'ESPÍNDOLA',
    		'cod_cant'=>'1106',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>112,
    		'canton'=>'GONZANAMÁ',
    		'cod_cant'=>'1107',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>113,
    		'canton'=>'MACARÁ',
    		'cod_cant'=>'1108',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>114,
    		'canton'=>'PALTAS',
    		'cod_cant'=>'1109',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>115,
    		'canton'=>'PUYANGO',
    		'cod_cant'=>'1110',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>116,
    		'canton'=>'SARAGURO',
    		'cod_cant'=>'1111',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>117,
    		'canton'=>'SOZORANGA',
    		'cod_cant'=>'1112',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>118,
    		'canton'=>'ZAPOTILLO',
    		'cod_cant'=>'1113',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>119,
    		'canton'=>'PINDAL',
    		'cod_cant'=>'1114',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>120,
    		'canton'=>'QUILANGA',
    		'cod_cant'=>'1115',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>121,
    		'canton'=>'OLMEDO',
    		'cod_cant'=>'1116',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>122,
    		'canton'=>'BABAHOYO',
    		'cod_cant'=>'1201',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>123,
    		'canton'=>'BABA',
    		'cod_cant'=>'1202',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>124,
    		'canton'=>'MONTALVO',
    		'cod_cant'=>'1203',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>125,
    		'canton'=>'PUEBLOVIEJO',
    		'cod_cant'=>'1204',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>126,
    		'canton'=>'QUEVEDO',
    		'cod_cant'=>'1205',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>127,
    		'canton'=>'URDANETA',
    		'cod_cant'=>'1206',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>128,
    		'canton'=>'VENTANAS',
    		'cod_cant'=>'1207',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>129,
    		'canton'=>'VÍNCES',
    		'cod_cant'=>'1208',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>130,
    		'canton'=>'PALENQUE',
    		'cod_cant'=>'1209',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>131,
    		'canton'=>'BUENA FÉ',
    		'cod_cant'=>'1210',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>132,
    		'canton'=>'VALENCIA',
    		'cod_cant'=>'1211',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>133,
    		'canton'=>'MOCACHE',
    		'cod_cant'=>'1212',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>134,
    		'canton'=>'QUINSALOMA',
    		'cod_cant'=>'1213',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>135,
    		'canton'=>'PORTOVIEJO',
    		'cod_cant'=>'1301',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>136,
    		'canton'=>'BOLÍVAR',
    		'cod_cant'=>'1302',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>137,
    		'canton'=>'CHONE',
    		'cod_cant'=>'1303',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>138,
    		'canton'=>'EL CARMEN',
    		'cod_cant'=>'1304',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>139,
    		'canton'=>'FLAVIO ALFARO',
    		'cod_cant'=>'1305',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>140,
    		'canton'=>'JIPIJAPA',
    		'cod_cant'=>'1306',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>141,
    		'canton'=>'JUNÍN',
    		'cod_cant'=>'1307',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>142,
    		'canton'=>'MANTA',
    		'cod_cant'=>'1308',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>143,
    		'canton'=>'MONTECRISTI',
    		'cod_cant'=>'1309',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>144,
    		'canton'=>'PAJÁN',
    		'cod_cant'=>'1310',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>145,
    		'canton'=>'PICHINCHA',
    		'cod_cant'=>'1311',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>146,
    		'canton'=>'ROCAFUERTE',
    		'cod_cant'=>'1312',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>147,
    		'canton'=>'SANTA ANA',
    		'cod_cant'=>'1313',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>148,
    		'canton'=>'SUCRE',
    		'cod_cant'=>'1314',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>149,
    		'canton'=>'TOSAGUA',
    		'cod_cant'=>'1315',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>150,
    		'canton'=>'24 DE MAYO',
    		'cod_cant'=>'1316',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>151,
    		'canton'=>'PEDERNALES',
    		'cod_cant'=>'1317',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>152,
    		'canton'=>'OLMEDO',
    		'cod_cant'=>'1318',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>153,
    		'canton'=>'PUERTO LÓPEZ',
    		'cod_cant'=>'1319',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>154,
    		'canton'=>'JAMA',
    		'cod_cant'=>'1320',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>155,
    		'canton'=>'JARAMIJÓ',
    		'cod_cant'=>'1321',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>156,
    		'canton'=>'SAN VICENTE',
    		'cod_cant'=>'1322',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>157,
    		'canton'=>'MORONA',
    		'cod_cant'=>'1401',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>158,
    		'canton'=>'GUALAQUIZA',
    		'cod_cant'=>'1402',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>159,
    		'canton'=>'LIMÓN INDANZA',
    		'cod_cant'=>'1403',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>160,
    		'canton'=>'PALORA',
    		'cod_cant'=>'1404',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>161,
    		'canton'=>'SANTIAGO',
    		'cod_cant'=>'1405',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>162,
    		'canton'=>'SUCÚA',
    		'cod_cant'=>'1406',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>163,
    		'canton'=>'HUAMBOYA',
    		'cod_cant'=>'1407',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>164,
    		'canton'=>'SAN JUAN BOSCO',
    		'cod_cant'=>'1408',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>165,
    		'canton'=>'TAISHA',
    		'cod_cant'=>'1409',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>166,
    		'canton'=>'LOGROÑO',
    		'cod_cant'=>'1410',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>167,
    		'canton'=>'PABLO SEXTO',
    		'cod_cant'=>'1411',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>168,
    		'canton'=>'TIWINTZA',
    		'cod_cant'=>'1412',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>169,
    		'canton'=>'TENA',
    		'cod_cant'=>'1501',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>170,
    		'canton'=>'ARCHIDONA',
    		'cod_cant'=>'1503',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>171,
    		'canton'=>'EL CHACO',
    		'cod_cant'=>'1504',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>172,
    		'canton'=>'QUIJOS',
    		'cod_cant'=>'1507',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>173,
    		'canton'=>'CARLOS JULIO AROSEMENA TOLA',
    		'cod_cant'=>'1509',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>174,
    		'canton'=>'PASTAZA',
    		'cod_cant'=>'1601',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>175,
    		'canton'=>'MERA',
    		'cod_cant'=>'1602',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>176,
    		'canton'=>'SANTA CLARA',
    		'cod_cant'=>'1603',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>177,
    		'canton'=>'ARAJUNO',
    		'cod_cant'=>'1604',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>178,
    		'canton'=>'QUITO',
    		'cod_cant'=>'1701',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>179,
    		'canton'=>'CAYAMBE',
    		'cod_cant'=>'1702',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>180,
    		'canton'=>'MEJIA',
    		'cod_cant'=>'1703',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>181,
    		'canton'=>'PEDRO MONCAYO',
    		'cod_cant'=>'1704',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>182,
    		'canton'=>'RUMIÑAHUI',
    		'cod_cant'=>'1705',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>183,
    		'canton'=>'SAN MIGUEL DE LOS BANCOS',
    		'cod_cant'=>'1707',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>184,
    		'canton'=>'PEDRO VICENTE MALDONADO',
    		'cod_cant'=>'1708',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>185,
    		'canton'=>'PUERTO QUITO',
    		'cod_cant'=>'1709',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>186,
    		'canton'=>'AMBATO',
    		'cod_cant'=>'1801',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>187,
    		'canton'=>'BAÑOS DE AGUA SANTA',
    		'cod_cant'=>'1802',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>188,
    		'canton'=>'CEVALLOS',
    		'cod_cant'=>'1803',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>189,
    		'canton'=>'MOCHA',
    		'cod_cant'=>'1804',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>190,
    		'canton'=>'PATATE',
    		'cod_cant'=>'1805',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>191,
    		'canton'=>'QUERO',
    		'cod_cant'=>'1806',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>192,
    		'canton'=>'SAN PEDRO DE PELILEO',
    		'cod_cant'=>'1807',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>193,
    		'canton'=>'SANTIAGO DE PÍLLARO',
    		'cod_cant'=>'1808',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>194,
    		'canton'=>'TISALEO',
    		'cod_cant'=>'1809',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>195,
    		'canton'=>'ZAMORA',
    		'cod_cant'=>'1901',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>196,
    		'canton'=>'CHINCHIPE',
    		'cod_cant'=>'1902',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>197,
    		'canton'=>'NANGARITZA',
    		'cod_cant'=>'1903',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>198,
    		'canton'=>'YACUAMBI',
    		'cod_cant'=>'1904',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>199,
    		'canton'=>'YANTZAZA (YANZATZA)',
    		'cod_cant'=>'1905',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>200,
    		'canton'=>'EL PANGUI',
    		'cod_cant'=>'1906',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>201,
    		'canton'=>'CENTINELA DEL CÓNDOR',
    		'cod_cant'=>'1907',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>202,
    		'canton'=>'PALANDA',
    		'cod_cant'=>'1908',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>203,
    		'canton'=>'PAQUISHA',
    		'cod_cant'=>'1909',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>204,
    		'canton'=>'SAN CRISTÓBAL',
    		'cod_cant'=>'2001',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>205,
    		'canton'=>'ISABELA',
    		'cod_cant'=>'2002',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>206,
    		'canton'=>'SANTA CRUZ',
    		'cod_cant'=>'2003',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>207,
    		'canton'=>'LAGO AGRIO',
    		'cod_cant'=>'2101',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>208,
    		'canton'=>'GONZALO PIZARRO',
    		'cod_cant'=>'2102',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>209,
    		'canton'=>'PUTUMAYO',
    		'cod_cant'=>'2103',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>210,
    		'canton'=>'SHUSHUFINDI',
    		'cod_cant'=>'2104',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>211,
    		'canton'=>'SUCUMBÍOS',
    		'cod_cant'=>'2105',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>212,
    		'canton'=>'CASCALES',
    		'cod_cant'=>'2106',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>213,
    		'canton'=>'CUYABENO',
    		'cod_cant'=>'2107',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>214,
    		'canton'=>'ORELLANA',
    		'cod_cant'=>'2201',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>215,
    		'canton'=>'AGUARICO',
    		'cod_cant'=>'2202',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>216,
    		'canton'=>'LA JOYA DE LOS SACHAS',
    		'cod_cant'=>'2203',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>217,
    		'canton'=>'LORETO',
    		'cod_cant'=>'2204',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>218,
    		'canton'=>'SANTO DOMINGO',
    		'cod_cant'=>'2301',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>219,
    		'canton'=>'SANTA ELENA',
    		'cod_cant'=>'2401',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>220,
    		'canton'=>'LA LIBERTAD',
    		'cod_cant'=>'2402',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>221,
    		'canton'=>'SALINAS',
    		'cod_cant'=>'2403',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>222,
    		'canton'=>'LAS GOLONDRINAS',
    		'cod_cant'=>'9001',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>223,
    		'canton'=>'MANGA DEL CURA',
    		'cod_cant'=>'9003',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Canton::create( [
    		'id'=>224,
    		'canton'=>'EL PIEDRERO',
    		'cod_cant'=>'9004',
    		'cod_postal'=>1,
    		'latitud'=>1,
    		'longitud'=>1,
    		'provincia_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );


    	Parroquia::create( [
    		'id'=>1,
    		'parroquia'=>'   BELLAVISTA  ',
    		'cod_parr'=>'10101',
    		'cod_postal'=>'10101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>2,
    		'parroquia'=>'   CAÑARIBAMBA ',
    		'cod_parr'=>'10102',
    		'cod_postal'=>'10102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>3,
    		'parroquia'=>'   EL BATÁN    ',
    		'cod_parr'=>'10103',
    		'cod_postal'=>'10103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>4,
    		'parroquia'=>'   EL SAGRARIO ',
    		'cod_parr'=>'10104',
    		'cod_postal'=>'10104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>5,
    		'parroquia'=>'   EL VECINO   ',
    		'cod_parr'=>'10105',
    		'cod_postal'=>'10105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>6,
    		'parroquia'=>'   GIL RAMÍREZ DÁVALOS ',
    		'cod_parr'=>'10106',
    		'cod_postal'=>'10106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>7,
    		'parroquia'=>'   HUAYNACÁPAC ',
    		'cod_parr'=>'10107',
    		'cod_postal'=>'10107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>8,
    		'parroquia'=>'   MACHÁNGARA  ',
    		'cod_parr'=>'10108',
    		'cod_postal'=>'10108',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>9,
    		'parroquia'=>'   MONAY   ',
    		'cod_parr'=>'10109',
    		'cod_postal'=>'10109',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>10,
    		'parroquia'=>'  SAN BLAS    ',
    		'cod_parr'=>'10110',
    		'cod_postal'=>'10110',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>11,
    		'parroquia'=>'  SAN SEBASTIÁN   ',
    		'cod_parr'=>'10111',
    		'cod_postal'=>'10111',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>12,
    		'parroquia'=>'  SUCRE   ',
    		'cod_parr'=>'10112',
    		'cod_postal'=>'10112',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>13,
    		'parroquia'=>'  TOTORACOCHA ',
    		'cod_parr'=>'10113',
    		'cod_postal'=>'10113',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>14,
    		'parroquia'=>'  YANUNCAY    ',
    		'cod_parr'=>'10114',
    		'cod_postal'=>'10114',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>15,
    		'parroquia'=>'  HERMANO MIGUEL  ',
    		'cod_parr'=>'10115',
    		'cod_postal'=>'10115',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>16,
    		'parroquia'=>'  CUENCA  ',
    		'cod_parr'=>'10150',
    		'cod_postal'=>'10150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>17,
    		'parroquia'=>'  BAÑOS   ',
    		'cod_parr'=>'10151',
    		'cod_postal'=>'10151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>18,
    		'parroquia'=>'  CUMBE   ',
    		'cod_parr'=>'10152',
    		'cod_postal'=>'10152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>19,
    		'parroquia'=>'  CHAUCHA ',
    		'cod_parr'=>'10153',
    		'cod_postal'=>'10153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>20,
    		'parroquia'=>'  CHECA (JIDCAY)  ',
    		'cod_parr'=>'10154',
    		'cod_postal'=>'10154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>21,
    		'parroquia'=>'  CHIQUINTAD  ',
    		'cod_parr'=>'10155',
    		'cod_postal'=>'10155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>22,
    		'parroquia'=>'  LLACAO  ',
    		'cod_parr'=>'10156',
    		'cod_postal'=>'10156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>23,
    		'parroquia'=>'  MOLLETURO   ',
    		'cod_parr'=>'10157',
    		'cod_postal'=>'10157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>24,
    		'parroquia'=>'  NULTI   ',
    		'cod_parr'=>'10158',
    		'cod_postal'=>'10158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>25,
    		'parroquia'=>'  OCTAVIO CORDERO PALACIOS (SANTA ROSA)   ',
    		'cod_parr'=>'10159',
    		'cod_postal'=>'10159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>26,
    		'parroquia'=>'  PACCHA  ',
    		'cod_parr'=>'10160',
    		'cod_postal'=>'10160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>27,
    		'parroquia'=>'  QUINGEO ',
    		'cod_parr'=>'10161',
    		'cod_postal'=>'10161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>28,
    		'parroquia'=>'  RICAURTE    ',
    		'cod_parr'=>'10162',
    		'cod_postal'=>'10162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>29,
    		'parroquia'=>'  SAN JOAQUÍN ',
    		'cod_parr'=>'10163',
    		'cod_postal'=>'10163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>30,
    		'parroquia'=>'  SANTA ANA   ',
    		'cod_parr'=>'10164',
    		'cod_postal'=>'10164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>31,
    		'parroquia'=>'  SAYAUSÍ ',
    		'cod_parr'=>'10165',
    		'cod_postal'=>'10165',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>32,
    		'parroquia'=>'  SIDCAY  ',
    		'cod_parr'=>'10166',
    		'cod_postal'=>'10166',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>33,
    		'parroquia'=>'  SININCAY    ',
    		'cod_parr'=>'10167',
    		'cod_postal'=>'10167',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>34,
    		'parroquia'=>'  TARQUI  ',
    		'cod_parr'=>'10168',
    		'cod_postal'=>'10168',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>35,
    		'parroquia'=>'  TURI    ',
    		'cod_parr'=>'10169',
    		'cod_postal'=>'10169',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>36,
    		'parroquia'=>'  VALLE   ',
    		'cod_parr'=>'10170',
    		'cod_postal'=>'10170',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>37,
    		'parroquia'=>'  VICTORIA DEL PORTETE (IRQUIS)   ',
    		'cod_parr'=>'10171',
    		'cod_postal'=>'10171',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>1,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>38,
    		'parroquia'=>'  GIRÓN   ',
    		'cod_parr'=>'10250',
    		'cod_postal'=>'10250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>39,
    		'parroquia'=>'  ASUNCIÓN    ',
    		'cod_parr'=>'10251',
    		'cod_postal'=>'10251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>40,
    		'parroquia'=>'  SAN GERARDO ',
    		'cod_parr'=>'10252',
    		'cod_postal'=>'10252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>2,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>41,
    		'parroquia'=>'  GUALACEO    ',
    		'cod_parr'=>'10350',
    		'cod_postal'=>'10350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>42,
    		'parroquia'=>'  CHORDELEG   ',
    		'cod_parr'=>'10351',
    		'cod_postal'=>'10351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>43,
    		'parroquia'=>'  DANIEL CÓRDOVA TORAL (EL ORIENTE)   ',
    		'cod_parr'=>'10352',
    		'cod_postal'=>'10352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>44,
    		'parroquia'=>'  JADÁN   ',
    		'cod_parr'=>'10353',
    		'cod_postal'=>'10353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>45,
    		'parroquia'=>'  MARIANO MORENO  ',
    		'cod_parr'=>'10354',
    		'cod_postal'=>'10354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>46,
    		'parroquia'=>'  PRINCIPAL   ',
    		'cod_parr'=>'10355',
    		'cod_postal'=>'10355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>47,
    		'parroquia'=>'  REMIGIO CRESPO TORAL (GÚLAG)    ',
    		'cod_parr'=>'10356',
    		'cod_postal'=>'10356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>48,
    		'parroquia'=>'  SAN JUAN    ',
    		'cod_parr'=>'10357',
    		'cod_postal'=>'10357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>49,
    		'parroquia'=>'  ZHIDMAD ',
    		'cod_parr'=>'10358',
    		'cod_postal'=>'10358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>50,
    		'parroquia'=>'  LUIS CORDERO VEGA   ',
    		'cod_parr'=>'10359',
    		'cod_postal'=>'10359',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>51,
    		'parroquia'=>'  SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)    ',
    		'cod_parr'=>'10360',
    		'cod_postal'=>'10360',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>3,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>52,
    		'parroquia'=>'  NABÓN   ',
    		'cod_parr'=>'10450',
    		'cod_postal'=>'10450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>53,
    		'parroquia'=>'  COCHAPATA   ',
    		'cod_parr'=>'10451',
    		'cod_postal'=>'10451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>54,
    		'parroquia'=>'  EL PROGRESO (CAB.EN ZHOTA)  ',
    		'cod_parr'=>'10452',
    		'cod_postal'=>'10452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>55,
    		'parroquia'=>'  LAS NIEVES (CHAYA)  ',
    		'cod_parr'=>'10453',
    		'cod_postal'=>'10453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>56,
    		'parroquia'=>'  OÑA ',
    		'cod_parr'=>'10454',
    		'cod_postal'=>'10454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>4,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>57,
    		'parroquia'=>'  PAUTE   ',
    		'cod_parr'=>'10550',
    		'cod_postal'=>'10550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>58,
    		'parroquia'=>'  AMALUZA ',
    		'cod_parr'=>'10551',
    		'cod_postal'=>'10551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>59,
    		'parroquia'=>'  BULÁN (JOSÉ VÍCTOR IZQUIERDO)   ',
    		'cod_parr'=>'10552',
    		'cod_postal'=>'10552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>60,
    		'parroquia'=>'  CHICÁN (GUILLERMO ORTEGA)   ',
    		'cod_parr'=>'10553',
    		'cod_postal'=>'10553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>61,
    		'parroquia'=>'  EL CABO ',
    		'cod_parr'=>'10554',
    		'cod_postal'=>'10554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>62,
    		'parroquia'=>'  GUACHAPALA  ',
    		'cod_parr'=>'10555',
    		'cod_postal'=>'10555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>63,
    		'parroquia'=>'  GUARAINAG   ',
    		'cod_parr'=>'10556',
    		'cod_postal'=>'10556',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>64,
    		'parroquia'=>'  PALMAS  ',
    		'cod_parr'=>'10557',
    		'cod_postal'=>'10557',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>65,
    		'parroquia'=>'  PAN ',
    		'cod_parr'=>'10558',
    		'cod_postal'=>'10558',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>66,
    		'parroquia'=>'  SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO) ',
    		'cod_parr'=>'10559',
    		'cod_postal'=>'10559',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>67,
    		'parroquia'=>'  SEVILLA DE ORO  ',
    		'cod_parr'=>'10560',
    		'cod_postal'=>'10560',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>68,
    		'parroquia'=>'  TOMEBAMBA   ',
    		'cod_parr'=>'10561',
    		'cod_postal'=>'10561',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>69,
    		'parroquia'=>'  DUG DUG ',
    		'cod_parr'=>'10562',
    		'cod_postal'=>'10562',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>5,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>70,
    		'parroquia'=>'  PUCARÁ  ',
    		'cod_parr'=>'10650',
    		'cod_postal'=>'10650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>71,
    		'parroquia'=>'  CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO) ',
    		'cod_parr'=>'10651',
    		'cod_postal'=>'10651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>72,
    		'parroquia'=>'  SAN RAFAEL DE SHARUG    ',
    		'cod_parr'=>'10652',
    		'cod_postal'=>'10652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>6,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>73,
    		'parroquia'=>'  SAN FERNANDO    ',
    		'cod_parr'=>'10750',
    		'cod_postal'=>'10750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>74,
    		'parroquia'=>'  CHUMBLÍN    ',
    		'cod_parr'=>'10751',
    		'cod_postal'=>'10751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>7,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>75,
    		'parroquia'=>'  SANTA ISABEL (CHAGUARURCO)  ',
    		'cod_parr'=>'10850',
    		'cod_postal'=>'10850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>76,
    		'parroquia'=>'  ABDÓN CALDERÓN (LA UNIÓN)   ',
    		'cod_parr'=>'10851',
    		'cod_postal'=>'10851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>77,
    		'parroquia'=>'  EL CARMEN DE PIJILÍ ',
    		'cod_parr'=>'10852',
    		'cod_postal'=>'10852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>78,
    		'parroquia'=>'  ZHAGLLI (SHAGLLI)   ',
    		'cod_parr'=>'10853',
    		'cod_postal'=>'10853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>79,
    		'parroquia'=>'  SAN SALVADOR DE CAÑARIBAMBA ',
    		'cod_parr'=>'10854',
    		'cod_postal'=>'10854',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>8,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>80,
    		'parroquia'=>'  SIGSIG  ',
    		'cod_parr'=>'10950',
    		'cod_postal'=>'10950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>81,
    		'parroquia'=>'  CUCHIL (CUTCHIL)    ',
    		'cod_parr'=>'10951',
    		'cod_postal'=>'10951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>82,
    		'parroquia'=>'  GIMA    ',
    		'cod_parr'=>'10952',
    		'cod_postal'=>'10952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>83,
    		'parroquia'=>'  GUEL    ',
    		'cod_parr'=>'10953',
    		'cod_postal'=>'10953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>84,
    		'parroquia'=>'  LUDO    ',
    		'cod_parr'=>'10954',
    		'cod_postal'=>'10954',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>85,
    		'parroquia'=>'  SAN BARTOLOMÉ   ',
    		'cod_parr'=>'10955',
    		'cod_postal'=>'10955',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>86,
    		'parroquia'=>'  SAN JOSÉ DE RARANGA ',
    		'cod_parr'=>'10956',
    		'cod_postal'=>'10956',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>9,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>87,
    		'parroquia'=>'  SAN FELIPE DE OÑA CABECERA CANTONAL ',
    		'cod_parr'=>'11050',
    		'cod_postal'=>'11050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>88,
    		'parroquia'=>'  SUSUDEL ',
    		'cod_parr'=>'11051',
    		'cod_postal'=>'11051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>10,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>89,
    		'parroquia'=>'  CHORDELEG   ',
    		'cod_parr'=>'11150',
    		'cod_postal'=>'11150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>90,
    		'parroquia'=>'  PRINCIPAL   ',
    		'cod_parr'=>'11151',
    		'cod_postal'=>'11151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>91,
    		'parroquia'=>'  LA UNIÓN    ',
    		'cod_parr'=>'11152',
    		'cod_postal'=>'11152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>92,
    		'parroquia'=>'  LUIS GALARZA ORELLANA (CAB.EN DELEGSOL) ',
    		'cod_parr'=>'11153',
    		'cod_postal'=>'11153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>93,
    		'parroquia'=>'  SAN MARTÍN DE PUZHIO    ',
    		'cod_parr'=>'11154',
    		'cod_postal'=>'11154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>11,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>94,
    		'parroquia'=>'  EL PAN  ',
    		'cod_parr'=>'11250',
    		'cod_postal'=>'11250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>95,
    		'parroquia'=>'  AMALUZA ',
    		'cod_parr'=>'11251',
    		'cod_postal'=>'11251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>96,
    		'parroquia'=>'  PALMAS  ',
    		'cod_parr'=>'11252',
    		'cod_postal'=>'11252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>97,
    		'parroquia'=>'  SAN VICENTE ',
    		'cod_parr'=>'11253',
    		'cod_postal'=>'11253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>12,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>98,
    		'parroquia'=>'  SEVILLA DE ORO  ',
    		'cod_parr'=>'11350',
    		'cod_postal'=>'11350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>99,
    		'parroquia'=>'  AMALUZA ',
    		'cod_parr'=>'11351',
    		'cod_postal'=>'11351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>100,
    		'parroquia'=>' PALMAS  ',
    		'cod_parr'=>'11352',
    		'cod_postal'=>'11352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>13,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>101,
    		'parroquia'=>' GUACHAPALA  ',
    		'cod_parr'=>'11450',
    		'cod_postal'=>'11450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>14,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>102,
    		'parroquia'=>' CAMILO PONCE ENRÍQUEZ   ',
    		'cod_parr'=>'11550',
    		'cod_postal'=>'11550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>15,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>103,
    		'parroquia'=>' EL CARMEN DE PIJILÍ ',
    		'cod_parr'=>'11551',
    		'cod_postal'=>'11551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>15,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>104,
    		'parroquia'=>' ÁNGEL POLIBIO CHÁVES    ',
    		'cod_parr'=>'20101',
    		'cod_postal'=>'20101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>105,
    		'parroquia'=>' GABRIEL IGNACIO VEINTIMILLA ',
    		'cod_parr'=>'20102',
    		'cod_postal'=>'20102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>106,
    		'parroquia'=>' GUANUJO ',
    		'cod_parr'=>'20103',
    		'cod_postal'=>'20103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>107,
    		'parroquia'=>' GUARANDA    ',
    		'cod_parr'=>'20150',
    		'cod_postal'=>'20150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>108,
    		'parroquia'=>' FACUNDO VELA    ',
    		'cod_parr'=>'20151',
    		'cod_postal'=>'20151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>109,
    		'parroquia'=>' GUANUJO ',
    		'cod_parr'=>'20152',
    		'cod_postal'=>'20152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>110,
    		'parroquia'=>' JULIO E. MORENO (CATANAHUÁN GRANDE) ',
    		'cod_parr'=>'20153',
    		'cod_postal'=>'20153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>111,
    		'parroquia'=>' LAS NAVES   ',
    		'cod_parr'=>'20154',
    		'cod_postal'=>'20154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>112,
    		'parroquia'=>' SALINAS ',
    		'cod_parr'=>'20155',
    		'cod_postal'=>'20155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>113,
    		'parroquia'=>' SAN LORENZO ',
    		'cod_parr'=>'20156',
    		'cod_postal'=>'20156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>114,
    		'parroquia'=>' SAN SIMÓN (YACOTO)  ',
    		'cod_parr'=>'20157',
    		'cod_postal'=>'20157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>115,
    		'parroquia'=>' SANTA FÉ (SANTA FÉ) ',
    		'cod_parr'=>'20158',
    		'cod_postal'=>'20158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>116,
    		'parroquia'=>' SIMIÁTUG    ',
    		'cod_parr'=>'20159',
    		'cod_postal'=>'20159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>117,
    		'parroquia'=>' SAN LUIS DE PAMBIL  ',
    		'cod_parr'=>'20160',
    		'cod_postal'=>'20160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>16,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>118,
    		'parroquia'=>' CHILLANES   ',
    		'cod_parr'=>'20250',
    		'cod_postal'=>'20250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>119,
    		'parroquia'=>' SAN JOSÉ DEL TAMBO (TAMBOPAMBA) ',
    		'cod_parr'=>'20251',
    		'cod_postal'=>'20251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>17,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>120,
    		'parroquia'=>' SAN JOSÉ DE CHIMBO  ',
    		'cod_parr'=>'20350',
    		'cod_postal'=>'20350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>121,
    		'parroquia'=>' ASUNCIÓN (ASANCOTO) ',
    		'cod_parr'=>'20351',
    		'cod_postal'=>'20351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>122,
    		'parroquia'=>' CALUMA  ',
    		'cod_parr'=>'20352',
    		'cod_postal'=>'20352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>123,
    		'parroquia'=>' MAGDALENA (CHAPACOTO)   ',
    		'cod_parr'=>'20353',
    		'cod_postal'=>'20353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>124,
    		'parroquia'=>' SAN SEBASTIÁN   ',
    		'cod_parr'=>'20354',
    		'cod_postal'=>'20354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>125,
    		'parroquia'=>' TELIMBELA   ',
    		'cod_parr'=>'20355',
    		'cod_postal'=>'20355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>18,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>126,
    		'parroquia'=>' ECHEANDÍA   ',
    		'cod_parr'=>'20450',
    		'cod_postal'=>'20450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>19,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>127,
    		'parroquia'=>' SAN MIGUEL  ',
    		'cod_parr'=>'20550',
    		'cod_postal'=>'20550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>128,
    		'parroquia'=>' BALSAPAMBA  ',
    		'cod_parr'=>'20551',
    		'cod_postal'=>'20551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>129,
    		'parroquia'=>' BILOVÁN ',
    		'cod_parr'=>'20552',
    		'cod_postal'=>'20552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>130,
    		'parroquia'=>' RÉGULO DE MORA  ',
    		'cod_parr'=>'20553',
    		'cod_postal'=>'20553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>131,
    		'parroquia'=>' SAN PABLO (SAN PABLO DE ATENAS) ',
    		'cod_parr'=>'20554',
    		'cod_postal'=>'20554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>132,
    		'parroquia'=>' SANTIAGO    ',
    		'cod_parr'=>'20555',
    		'cod_postal'=>'20555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>133,
    		'parroquia'=>' SAN VICENTE ',
    		'cod_parr'=>'20556',
    		'cod_postal'=>'20556',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>20,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>134,
    		'parroquia'=>' CALUMA  ',
    		'cod_parr'=>'20650',
    		'cod_postal'=>'20650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>21,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>135,
    		'parroquia'=>' LAS MERCEDES    ',
    		'cod_parr'=>'20701',
    		'cod_postal'=>'20701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>136,
    		'parroquia'=>' LAS NAVES   ',
    		'cod_parr'=>'20702',
    		'cod_postal'=>'20702',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>137,
    		'parroquia'=>' LAS NAVES   ',
    		'cod_parr'=>'20750',
    		'cod_postal'=>'20750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>22,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>138,
    		'parroquia'=>' AURELIO BAYAS MARTÍNEZ  ',
    		'cod_parr'=>'30101',
    		'cod_postal'=>'30101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>139,
    		'parroquia'=>' AZOGUES ',
    		'cod_parr'=>'30102',
    		'cod_postal'=>'30102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>140,
    		'parroquia'=>' BORRERO ',
    		'cod_parr'=>'30103',
    		'cod_postal'=>'30103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>141,
    		'parroquia'=>' SAN FRANCISCO   ',
    		'cod_parr'=>'30104',
    		'cod_postal'=>'30104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>142,
    		'parroquia'=>' AZOGUES ',
    		'cod_parr'=>'30150',
    		'cod_postal'=>'30150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>143,
    		'parroquia'=>' COJITAMBO   ',
    		'cod_parr'=>'30151',
    		'cod_postal'=>'30151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>144,
    		'parroquia'=>' DÉLEG   ',
    		'cod_parr'=>'30152',
    		'cod_postal'=>'30152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>145,
    		'parroquia'=>' GUAPÁN  ',
    		'cod_parr'=>'30153',
    		'cod_postal'=>'30153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>146,
    		'parroquia'=>' JAVIER LOYOLA (CHUQUIPATA)  ',
    		'cod_parr'=>'30154',
    		'cod_postal'=>'30154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>147,
    		'parroquia'=>' LUIS CORDERO    ',
    		'cod_parr'=>'30155',
    		'cod_postal'=>'30155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>148,
    		'parroquia'=>' PINDILIG    ',
    		'cod_parr'=>'30156',
    		'cod_postal'=>'30156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>149,
    		'parroquia'=>' RIVERA  ',
    		'cod_parr'=>'30157',
    		'cod_postal'=>'30157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>150,
    		'parroquia'=>' SAN MIGUEL  ',
    		'cod_parr'=>'30158',
    		'cod_postal'=>'30158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>151,
    		'parroquia'=>' SOLANO  ',
    		'cod_parr'=>'30159',
    		'cod_postal'=>'30159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>152,
    		'parroquia'=>' TADAY   ',
    		'cod_parr'=>'30160',
    		'cod_postal'=>'30160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>23,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>153,
    		'parroquia'=>' BIBLIÁN ',
    		'cod_parr'=>'30250',
    		'cod_postal'=>'30250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>154,
    		'parroquia'=>' NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)  ',
    		'cod_parr'=>'30251',
    		'cod_postal'=>'30251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>155,
    		'parroquia'=>' SAN FRANCISCO DE SAGEO  ',
    		'cod_parr'=>'30252',
    		'cod_postal'=>'30252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>156,
    		'parroquia'=>' TURUPAMBA   ',
    		'cod_parr'=>'30253',
    		'cod_postal'=>'30253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>157,
    		'parroquia'=>' JERUSALÉN   ',
    		'cod_parr'=>'30254',
    		'cod_postal'=>'30254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>24,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>158,
    		'parroquia'=>' CAÑAR   ',
    		'cod_parr'=>'30350',
    		'cod_postal'=>'30350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>159,
    		'parroquia'=>' CHONTAMARCA ',
    		'cod_parr'=>'30351',
    		'cod_postal'=>'30351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>160,
    		'parroquia'=>' CHOROCOPTE  ',
    		'cod_parr'=>'30352',
    		'cod_postal'=>'30352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>161,
    		'parroquia'=>' GENERAL MORALES (SOCARTE)   ',
    		'cod_parr'=>'30353',
    		'cod_postal'=>'30353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>162,
    		'parroquia'=>' GUALLETURO  ',
    		'cod_parr'=>'30354',
    		'cod_postal'=>'30354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>163,
    		'parroquia'=>' HONORATO VÁSQUEZ (TAMBO VIEJO)  ',
    		'cod_parr'=>'30355',
    		'cod_postal'=>'30355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>164,
    		'parroquia'=>' INGAPIRCA   ',
    		'cod_parr'=>'30356',
    		'cod_postal'=>'30356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>165,
    		'parroquia'=>' JUNCAL  ',
    		'cod_parr'=>'30357',
    		'cod_postal'=>'30357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>166,
    		'parroquia'=>' SAN ANTONIO ',
    		'cod_parr'=>'30358',
    		'cod_postal'=>'30358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>167,
    		'parroquia'=>' SUSCAL  ',
    		'cod_parr'=>'30359',
    		'cod_postal'=>'30359',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>168,
    		'parroquia'=>' TAMBO   ',
    		'cod_parr'=>'30360',
    		'cod_postal'=>'30360',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>169,
    		'parroquia'=>' ZHUD    ',
    		'cod_parr'=>'30361',
    		'cod_postal'=>'30361',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>170,
    		'parroquia'=>' VENTURA ',
    		'cod_parr'=>'30362',
    		'cod_postal'=>'30362',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>171,
    		'parroquia'=>' DUCUR   ',
    		'cod_parr'=>'30363',
    		'cod_postal'=>'30363',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>25,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>172,
    		'parroquia'=>' LA TRONCAL  ',
    		'cod_parr'=>'30450',
    		'cod_postal'=>'30450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>26,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>173,
    		'parroquia'=>' MANUEL J. CALLE ',
    		'cod_parr'=>'30451',
    		'cod_postal'=>'30451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>26,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>174,
    		'parroquia'=>' PANCHO NEGRO    ',
    		'cod_parr'=>'30452',
    		'cod_postal'=>'30452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>26,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>175,
    		'parroquia'=>' EL TAMBO    ',
    		'cod_parr'=>'30550',
    		'cod_postal'=>'30550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>27,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>176,
    		'parroquia'=>' DÉLEG   ',
    		'cod_parr'=>'30650',
    		'cod_postal'=>'30650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>28,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>177,
    		'parroquia'=>' SOLANO  ',
    		'cod_parr'=>'30651',
    		'cod_postal'=>'30651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>28,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>178,
    		'parroquia'=>' SUSCAL  ',
    		'cod_parr'=>'30750',
    		'cod_postal'=>'30750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>29,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>179,
    		'parroquia'=>' GONZÁLEZ SUÁREZ ',
    		'cod_parr'=>'40101',
    		'cod_postal'=>'40101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>180,
    		'parroquia'=>' TULCÁN  ',
    		'cod_parr'=>'40102',
    		'cod_postal'=>'40102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>181,
    		'parroquia'=>' TULCÁN  ',
    		'cod_parr'=>'40150',
    		'cod_postal'=>'40150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>182,
    		'parroquia'=>' EL CARMELO (EL PUN) ',
    		'cod_parr'=>'40151',
    		'cod_postal'=>'40151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>183,
    		'parroquia'=>' HUACA   ',
    		'cod_parr'=>'40152',
    		'cod_postal'=>'40152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>184,
    		'parroquia'=>' JULIO ANDRADE (OREJUELA)    ',
    		'cod_parr'=>'40153',
    		'cod_postal'=>'40153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>185,
    		'parroquia'=>' MALDONADO   ',
    		'cod_parr'=>'40154',
    		'cod_postal'=>'40154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>186,
    		'parroquia'=>' PIOTER  ',
    		'cod_parr'=>'40155',
    		'cod_postal'=>'40155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>187,
    		'parroquia'=>' TOBAR DONOSO (LA BOCANA DE CAMUMBÍ) ',
    		'cod_parr'=>'40156',
    		'cod_postal'=>'40156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>188,
    		'parroquia'=>' TUFIÑO  ',
    		'cod_parr'=>'40157',
    		'cod_postal'=>'40157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>189,
    		'parroquia'=>' URBINA (TAYA)   ',
    		'cod_parr'=>'40158',
    		'cod_postal'=>'40158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>190,
    		'parroquia'=>' EL CHICAL   ',
    		'cod_parr'=>'40159',
    		'cod_postal'=>'40159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>191,
    		'parroquia'=>' MARISCAL SUCRE  ',
    		'cod_parr'=>'40160',
    		'cod_postal'=>'40160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>192,
    		'parroquia'=>' SANTA MARTHA DE CUBA    ',
    		'cod_parr'=>'40161',
    		'cod_postal'=>'40161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>30,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>193,
    		'parroquia'=>' BOLÍVAR ',
    		'cod_parr'=>'40250',
    		'cod_postal'=>'40250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>194,
    		'parroquia'=>' GARCÍA MORENO   ',
    		'cod_parr'=>'40251',
    		'cod_postal'=>'40251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>195,
    		'parroquia'=>' LOS ANDES   ',
    		'cod_parr'=>'40252',
    		'cod_postal'=>'40252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>196,
    		'parroquia'=>' MONTE OLIVO ',
    		'cod_parr'=>'40253',
    		'cod_postal'=>'40253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>197,
    		'parroquia'=>' SAN VICENTE DE PUSIR    ',
    		'cod_parr'=>'40254',
    		'cod_postal'=>'40254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>198,
    		'parroquia'=>' SAN RAFAEL  ',
    		'cod_parr'=>'40255',
    		'cod_postal'=>'40255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>31,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>199,
    		'parroquia'=>' EL ÁNGEL    ',
    		'cod_parr'=>'40301',
    		'cod_postal'=>'40301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>200,
    		'parroquia'=>' 27 DE SEPTIEMBRE    ',
    		'cod_parr'=>'40302',
    		'cod_postal'=>'40302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>201,
    		'parroquia'=>' EL ANGEL    ',
    		'cod_parr'=>'40350',
    		'cod_postal'=>'40350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>202,
    		'parroquia'=>' EL GOALTAL  ',
    		'cod_parr'=>'40351',
    		'cod_postal'=>'40351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>203,
    		'parroquia'=>' LA LIBERTAD (ALIZO) ',
    		'cod_parr'=>'40352',
    		'cod_postal'=>'40352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>204,
    		'parroquia'=>' SAN ISIDRO  ',
    		'cod_parr'=>'40353',
    		'cod_postal'=>'40353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>32,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>205,
    		'parroquia'=>' MIRA (CHONTAHUASI)  ',
    		'cod_parr'=>'40450',
    		'cod_postal'=>'40450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>33,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>206,
    		'parroquia'=>' CONCEPCIÓN  ',
    		'cod_parr'=>'40451',
    		'cod_postal'=>'40451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>33,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>207,
    		'parroquia'=>' JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)    ',
    		'cod_parr'=>'40452',
    		'cod_postal'=>'40452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>33,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>208,
    		'parroquia'=>' JUAN MONTALVO (SAN IGNACIO DE QUIL) ',
    		'cod_parr'=>'40453',
    		'cod_postal'=>'40453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>33,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>209,
    		'parroquia'=>' GONZÁLEZ SUÁREZ ',
    		'cod_parr'=>'40501',
    		'cod_postal'=>'40501',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>210,
    		'parroquia'=>' SAN JOSÉ    ',
    		'cod_parr'=>'40502',
    		'cod_postal'=>'40502',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>211,
    		'parroquia'=>' SAN GABRIEL ',
    		'cod_parr'=>'40550',
    		'cod_postal'=>'40550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>212,
    		'parroquia'=>' CRISTÓBAL COLÓN ',
    		'cod_parr'=>'40551',
    		'cod_postal'=>'40551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>213,
    		'parroquia'=>' CHITÁN DE NAVARRETE ',
    		'cod_parr'=>'40552',
    		'cod_postal'=>'40552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>214,
    		'parroquia'=>' FERNÁNDEZ SALVADOR  ',
    		'cod_parr'=>'40553',
    		'cod_postal'=>'40553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>215,
    		'parroquia'=>' LA PAZ  ',
    		'cod_parr'=>'40554',
    		'cod_postal'=>'40554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>216,
    		'parroquia'=>' PIARTAL ',
    		'cod_parr'=>'40555',
    		'cod_postal'=>'40555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>34,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>217,
    		'parroquia'=>' HUACA   ',
    		'cod_parr'=>'40650',
    		'cod_postal'=>'40650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>35,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>218,
    		'parroquia'=>' MARISCAL SUCRE  ',
    		'cod_parr'=>'40651',
    		'cod_postal'=>'40651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>35,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>219,
    		'parroquia'=>' ELOY ALFARO (SAN FELIPE)    ',
    		'cod_parr'=>'50101',
    		'cod_postal'=>'50101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>220,
    		'parroquia'=>' IGNACIO FLORES (PARQUE FLORES)  ',
    		'cod_parr'=>'50102',
    		'cod_postal'=>'50102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>221,
    		'parroquia'=>' JUAN MONTALVO (SAN SEBASTIÁN)   ',
    		'cod_parr'=>'50103',
    		'cod_postal'=>'50103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>222,
    		'parroquia'=>' LA MATRIZ   ',
    		'cod_parr'=>'50104',
    		'cod_postal'=>'50104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>223,
    		'parroquia'=>' SAN BUENAVENTURA    ',
    		'cod_parr'=>'50105',
    		'cod_postal'=>'50105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>224,
    		'parroquia'=>' LATACUNGA   ',
    		'cod_parr'=>'50150',
    		'cod_postal'=>'50150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>225,
    		'parroquia'=>' ALAQUES (ALÁQUEZ)   ',
    		'cod_parr'=>'50151',
    		'cod_postal'=>'50151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>226,
    		'parroquia'=>' BELISARIO QUEVEDO (GUANAILÍN)   ',
    		'cod_parr'=>'50152',
    		'cod_postal'=>'50152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>227,
    		'parroquia'=>' GUAITACAMA (GUAYTACAMA) ',
    		'cod_parr'=>'50153',
    		'cod_postal'=>'50153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>228,
    		'parroquia'=>' JOSEGUANGO BAJO ',
    		'cod_parr'=>'50154',
    		'cod_postal'=>'50154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>229,
    		'parroquia'=>' LAS PAMPAS  ',
    		'cod_parr'=>'50155',
    		'cod_postal'=>'50155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>230,
    		'parroquia'=>' MULALÓ  ',
    		'cod_parr'=>'50156',
    		'cod_postal'=>'50156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>231,
    		'parroquia'=>' 11 DE NOVIEMBRE (ILINCHISI) ',
    		'cod_parr'=>'50157',
    		'cod_postal'=>'50157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>232,
    		'parroquia'=>' POALÓ   ',
    		'cod_parr'=>'50158',
    		'cod_postal'=>'50158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>233,
    		'parroquia'=>' SAN JUAN DE PASTOCALLE  ',
    		'cod_parr'=>'50159',
    		'cod_postal'=>'50159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>234,
    		'parroquia'=>' SIGCHOS ',
    		'cod_parr'=>'50160',
    		'cod_postal'=>'50160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>235,
    		'parroquia'=>' TANICUCHÍ   ',
    		'cod_parr'=>'50161',
    		'cod_postal'=>'50161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>236,
    		'parroquia'=>' TOACASO ',
    		'cod_parr'=>'50162',
    		'cod_postal'=>'50162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>237,
    		'parroquia'=>' PALO QUEMADO    ',
    		'cod_parr'=>'50163',
    		'cod_postal'=>'50163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>36,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>238,
    		'parroquia'=>' EL CARMEN   ',
    		'cod_parr'=>'50201',
    		'cod_postal'=>'50201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>239,
    		'parroquia'=>' LA MANÁ ',
    		'cod_parr'=>'50202',
    		'cod_postal'=>'50202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>240,
    		'parroquia'=>' EL TRIUNFO  ',
    		'cod_parr'=>'50203',
    		'cod_postal'=>'50203',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>241,
    		'parroquia'=>' LA MANÁ ',
    		'cod_parr'=>'50250',
    		'cod_postal'=>'50250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>242,
    		'parroquia'=>' GUASAGANDA (CAB.EN GUASAGANDA   ',
    		'cod_parr'=>'50251',
    		'cod_postal'=>'50251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>243,
    		'parroquia'=>' PUCAYACU    ',
    		'cod_parr'=>'50252',
    		'cod_postal'=>'50252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>37,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>244,
    		'parroquia'=>' EL CORAZÓN  ',
    		'cod_parr'=>'50350',
    		'cod_postal'=>'50350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>38,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>245,
    		'parroquia'=>' MORASPUNGO  ',
    		'cod_parr'=>'50351',
    		'cod_postal'=>'50351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>38,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>246,
    		'parroquia'=>' PINLLOPATA  ',
    		'cod_parr'=>'50352',
    		'cod_postal'=>'50352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>38,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>247,
    		'parroquia'=>' RAMÓN CAMPAÑA   ',
    		'cod_parr'=>'50353',
    		'cod_postal'=>'50353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>38,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>248,
    		'parroquia'=>' PUJILÍ  ',
    		'cod_parr'=>'50450',
    		'cod_postal'=>'50450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>249,
    		'parroquia'=>' ANGAMARCA   ',
    		'cod_parr'=>'50451',
    		'cod_postal'=>'50451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>250,
    		'parroquia'=>' CHUCCHILÁN (CHUGCHILÁN) ',
    		'cod_parr'=>'50452',
    		'cod_postal'=>'50452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>251,
    		'parroquia'=>' GUANGAJE    ',
    		'cod_parr'=>'50453',
    		'cod_postal'=>'50453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>252,
    		'parroquia'=>' ISINLIBÍ (ISINLIVÍ) ',
    		'cod_parr'=>'50454',
    		'cod_postal'=>'50454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>253,
    		'parroquia'=>' LA VICTORIA ',
    		'cod_parr'=>'50455',
    		'cod_postal'=>'50455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>254,
    		'parroquia'=>' PILALÓ  ',
    		'cod_parr'=>'50456',
    		'cod_postal'=>'50456',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>255,
    		'parroquia'=>' TINGO   ',
    		'cod_parr'=>'50457',
    		'cod_postal'=>'50457',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>256,
    		'parroquia'=>' ZUMBAHUA    ',
    		'cod_parr'=>'50458',
    		'cod_postal'=>'50458',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>39,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>257,
    		'parroquia'=>' SAN MIGUEL  ',
    		'cod_parr'=>'50550',
    		'cod_postal'=>'50550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>258,
    		'parroquia'=>' ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)  ',
    		'cod_parr'=>'50551',
    		'cod_postal'=>'50551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>259,
    		'parroquia'=>' CUSUBAMBA   ',
    		'cod_parr'=>'50552',
    		'cod_postal'=>'50552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>260,
    		'parroquia'=>' MULALILLO   ',
    		'cod_parr'=>'50553',
    		'cod_postal'=>'50553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>261,
    		'parroquia'=>' MULLIQUINDIL (SANTA ANA)    ',
    		'cod_parr'=>'50554',
    		'cod_postal'=>'50554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>262,
    		'parroquia'=>' PANSALEO    ',
    		'cod_parr'=>'50555',
    		'cod_postal'=>'50555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>40,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>263,
    		'parroquia'=>' SAQUISILÍ   ',
    		'cod_parr'=>'50650',
    		'cod_postal'=>'50650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>41,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>264,
    		'parroquia'=>' CANCHAGUA   ',
    		'cod_parr'=>'50651',
    		'cod_postal'=>'50651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>41,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>265,
    		'parroquia'=>' CHANTILÍN   ',
    		'cod_parr'=>'50652',
    		'cod_postal'=>'50652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>41,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>266,
    		'parroquia'=>' COCHAPAMBA  ',
    		'cod_parr'=>'50653',
    		'cod_postal'=>'50653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>41,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>267,
    		'parroquia'=>' SIGCHOS ',
    		'cod_parr'=>'50750',
    		'cod_postal'=>'50750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>42,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>268,
    		'parroquia'=>' CHUGCHILLÁN ',
    		'cod_parr'=>'50751',
    		'cod_postal'=>'50751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>42,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>269,
    		'parroquia'=>' ISINLIVÍ    ',
    		'cod_parr'=>'50752',
    		'cod_postal'=>'50752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>42,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>270,
    		'parroquia'=>' LAS PAMPAS  ',
    		'cod_parr'=>'50753',
    		'cod_postal'=>'50753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>42,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>271,
    		'parroquia'=>' PALO QUEMADO    ',
    		'cod_parr'=>'50754',
    		'cod_postal'=>'50754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>42,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>272,
    		'parroquia'=>' LIZARZABURU ',
    		'cod_parr'=>'60101',
    		'cod_postal'=>'60101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>273,
    		'parroquia'=>' MALDONADO   ',
    		'cod_parr'=>'60102',
    		'cod_postal'=>'60102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>274,
    		'parroquia'=>' VELASCO ',
    		'cod_parr'=>'60103',
    		'cod_postal'=>'60103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>275,
    		'parroquia'=>' VELOZ   ',
    		'cod_parr'=>'60104',
    		'cod_postal'=>'60104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>276,
    		'parroquia'=>' YARUQUÍES   ',
    		'cod_parr'=>'60105',
    		'cod_postal'=>'60105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>277,
    		'parroquia'=>' RIOBAMBA    ',
    		'cod_parr'=>'60150',
    		'cod_postal'=>'60150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>278,
    		'parroquia'=>' CACHA (CAB. EN MACHÁNGARA)  ',
    		'cod_parr'=>'60151',
    		'cod_postal'=>'60151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>279,
    		'parroquia'=>' CALPI   ',
    		'cod_parr'=>'60152',
    		'cod_postal'=>'60152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>280,
    		'parroquia'=>' CUBIJÍES    ',
    		'cod_parr'=>'60153',
    		'cod_postal'=>'60153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>281,
    		'parroquia'=>' FLORES  ',
    		'cod_parr'=>'60154',
    		'cod_postal'=>'60154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>282,
    		'parroquia'=>' LICÁN   ',
    		'cod_parr'=>'60155',
    		'cod_postal'=>'60155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>283,
    		'parroquia'=>' LICTO   ',
    		'cod_parr'=>'60156',
    		'cod_postal'=>'60156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>284,
    		'parroquia'=>' PUNGALÁ ',
    		'cod_parr'=>'60157',
    		'cod_postal'=>'60157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>285,
    		'parroquia'=>' PUNÍN   ',
    		'cod_parr'=>'60158',
    		'cod_postal'=>'60158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>286,
    		'parroquia'=>' QUIMIAG ',
    		'cod_parr'=>'60159',
    		'cod_postal'=>'60159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>287,
    		'parroquia'=>' SAN JUAN    ',
    		'cod_parr'=>'60160',
    		'cod_postal'=>'60160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>288,
    		'parroquia'=>' SAN LUIS    ',
    		'cod_parr'=>'60161',
    		'cod_postal'=>'60161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>43,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>289,
    		'parroquia'=>' ALAUSÍ  ',
    		'cod_parr'=>'60250',
    		'cod_postal'=>'60250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>290,
    		'parroquia'=>' ACHUPALLAS  ',
    		'cod_parr'=>'60251',
    		'cod_postal'=>'60251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>291,
    		'parroquia'=>' CUMANDÁ ',
    		'cod_parr'=>'60252',
    		'cod_postal'=>'60252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>292,
    		'parroquia'=>' GUASUNTOS   ',
    		'cod_parr'=>'60253',
    		'cod_postal'=>'60253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>293,
    		'parroquia'=>' HUIGRA  ',
    		'cod_parr'=>'60254',
    		'cod_postal'=>'60254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>294,
    		'parroquia'=>' MULTITUD    ',
    		'cod_parr'=>'60255',
    		'cod_postal'=>'60255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>295,
    		'parroquia'=>' PISTISHÍ (NARIZ DEL DIABLO) ',
    		'cod_parr'=>'60256',
    		'cod_postal'=>'60256',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>296,
    		'parroquia'=>' PUMALLACTA  ',
    		'cod_parr'=>'60257',
    		'cod_postal'=>'60257',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>297,
    		'parroquia'=>' SEVILLA ',
    		'cod_parr'=>'60258',
    		'cod_postal'=>'60258',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>298,
    		'parroquia'=>' SIBAMBE ',
    		'cod_parr'=>'60259',
    		'cod_postal'=>'60259',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>299,
    		'parroquia'=>' TIXÁN   ',
    		'cod_parr'=>'60260',
    		'cod_postal'=>'60260',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>44,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>300,
    		'parroquia'=>' CAJABAMBA   ',
    		'cod_parr'=>'60301',
    		'cod_postal'=>'60301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>301,
    		'parroquia'=>' SICALPA ',
    		'cod_parr'=>'60302',
    		'cod_postal'=>'60302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>302,
    		'parroquia'=>' VILLA LA UNIÓN (CAJABAMBA)  ',
    		'cod_parr'=>'60350',
    		'cod_postal'=>'60350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>303,
    		'parroquia'=>' CAÑI    ',
    		'cod_parr'=>'60351',
    		'cod_postal'=>'60351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>304,
    		'parroquia'=>' COLUMBE ',
    		'cod_parr'=>'60352',
    		'cod_postal'=>'60352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>305,
    		'parroquia'=>' JUAN DE VELASCO (PANGOR)    ',
    		'cod_parr'=>'60353',
    		'cod_postal'=>'60353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>306,
    		'parroquia'=>' SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)    ',
    		'cod_parr'=>'60354',
    		'cod_postal'=>'60354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>45,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>307,
    		'parroquia'=>' CHAMBO  ',
    		'cod_parr'=>'60450',
    		'cod_postal'=>'60450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>46,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>308,
    		'parroquia'=>' CHUNCHI ',
    		'cod_parr'=>'60550',
    		'cod_postal'=>'60550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>47,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>309,
    		'parroquia'=>' CAPZOL  ',
    		'cod_parr'=>'60551',
    		'cod_postal'=>'60551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>47,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>310,
    		'parroquia'=>' COMPUD  ',
    		'cod_parr'=>'60552',
    		'cod_postal'=>'60552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>47,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>311,
    		'parroquia'=>' GONZOL  ',
    		'cod_parr'=>'60553',
    		'cod_postal'=>'60553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>47,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>312,
    		'parroquia'=>' LLAGOS  ',
    		'cod_parr'=>'60554',
    		'cod_postal'=>'60554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>47,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>313,
    		'parroquia'=>' GUAMOTE ',
    		'cod_parr'=>'60650',
    		'cod_postal'=>'60650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>48,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>314,
    		'parroquia'=>' CEBADAS ',
    		'cod_parr'=>'60651',
    		'cod_postal'=>'60651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>48,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>315,
    		'parroquia'=>' PALMIRA ',
    		'cod_parr'=>'60652',
    		'cod_postal'=>'60652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>48,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>316,
    		'parroquia'=>' EL ROSARIO  ',
    		'cod_parr'=>'60701',
    		'cod_postal'=>'60701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>317,
    		'parroquia'=>' LA MATRIZ   ',
    		'cod_parr'=>'60702',
    		'cod_postal'=>'60702',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>318,
    		'parroquia'=>' GUANO   ',
    		'cod_parr'=>'60750',
    		'cod_postal'=>'60750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>319,
    		'parroquia'=>' GUANANDO    ',
    		'cod_parr'=>'60751',
    		'cod_postal'=>'60751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>320,
    		'parroquia'=>' ILAPO   ',
    		'cod_parr'=>'60752',
    		'cod_postal'=>'60752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>321,
    		'parroquia'=>' LA PROVIDENCIA  ',
    		'cod_parr'=>'60753',
    		'cod_postal'=>'60753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>322,
    		'parroquia'=>' SAN ANDRÉS  ',
    		'cod_parr'=>'60754',
    		'cod_postal'=>'60754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>323,
    		'parroquia'=>' SAN GERARDO DE PACAICAGUÁN  ',
    		'cod_parr'=>'60755',
    		'cod_postal'=>'60755',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>324,
    		'parroquia'=>' SAN ISIDRO DE PATULÚ    ',
    		'cod_parr'=>'60756',
    		'cod_postal'=>'60756',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>325,
    		'parroquia'=>' SAN JOSÉ DEL CHAZO  ',
    		'cod_parr'=>'60757',
    		'cod_postal'=>'60757',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>326,
    		'parroquia'=>' SANTA FÉ DE GALÁN   ',
    		'cod_parr'=>'60758',
    		'cod_postal'=>'60758',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>327,
    		'parroquia'=>' VALPARAÍSO  ',
    		'cod_parr'=>'60759',
    		'cod_postal'=>'60759',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>49,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>328,
    		'parroquia'=>' PALLATANGA  ',
    		'cod_parr'=>'60850',
    		'cod_postal'=>'60850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>50,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>329,
    		'parroquia'=>' PENIPE  ',
    		'cod_parr'=>'60950',
    		'cod_postal'=>'60950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>330,
    		'parroquia'=>' EL ALTAR    ',
    		'cod_parr'=>'60951',
    		'cod_postal'=>'60951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>331,
    		'parroquia'=>' MATUS   ',
    		'cod_parr'=>'60952',
    		'cod_postal'=>'60952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>332,
    		'parroquia'=>' PUELA   ',
    		'cod_parr'=>'60953',
    		'cod_postal'=>'60953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>333,
    		'parroquia'=>' SAN ANTONIO DE BAYUSHIG ',
    		'cod_parr'=>'60954',
    		'cod_postal'=>'60954',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>334,
    		'parroquia'=>' LA CANDELARIA   ',
    		'cod_parr'=>'60955',
    		'cod_postal'=>'60955',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>335,
    		'parroquia'=>' BILBAO (CAB.EN QUILLUYACU)  ',
    		'cod_parr'=>'60956',
    		'cod_postal'=>'60956',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>51,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>336,
    		'parroquia'=>' CUMANDÁ ',
    		'cod_parr'=>'61050',
    		'cod_postal'=>'61050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>52,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>337,
    		'parroquia'=>' LA PROVIDENCIA  ',
    		'cod_parr'=>'70101',
    		'cod_postal'=>'70101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>338,
    		'parroquia'=>' MACHALA ',
    		'cod_parr'=>'70102',
    		'cod_postal'=>'70102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>339,
    		'parroquia'=>' PUERTO BOLÍVAR  ',
    		'cod_parr'=>'70103',
    		'cod_postal'=>'70103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>340,
    		'parroquia'=>' NUEVE DE MAYO   ',
    		'cod_parr'=>'70104',
    		'cod_postal'=>'70104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>341,
    		'parroquia'=>' EL CAMBIO   ',
    		'cod_parr'=>'70105',
    		'cod_postal'=>'70105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>342,
    		'parroquia'=>' MACHALA ',
    		'cod_parr'=>'70150',
    		'cod_postal'=>'70150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>343,
    		'parroquia'=>' EL CAMBIO   ',
    		'cod_parr'=>'70151',
    		'cod_postal'=>'70151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>344,
    		'parroquia'=>' EL RETIRO   ',
    		'cod_parr'=>'70152',
    		'cod_postal'=>'70152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>53,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>345,
    		'parroquia'=>' ARENILLAS   ',
    		'cod_parr'=>'70250',
    		'cod_postal'=>'70250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>346,
    		'parroquia'=>' CHACRAS ',
    		'cod_parr'=>'70251',
    		'cod_postal'=>'70251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>347,
    		'parroquia'=>' LA LIBERTAD ',
    		'cod_parr'=>'70252',
    		'cod_postal'=>'70252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>348,
    		'parroquia'=>' LAS LAJAS (CAB. EN LA VICTORIA) ',
    		'cod_parr'=>'70253',
    		'cod_postal'=>'70253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>349,
    		'parroquia'=>' PALMALES    ',
    		'cod_parr'=>'70254',
    		'cod_postal'=>'70254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>350,
    		'parroquia'=>' CARCABÓN    ',
    		'cod_parr'=>'70255',
    		'cod_postal'=>'70255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>54,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>351,
    		'parroquia'=>' PACCHA  ',
    		'cod_parr'=>'70350',
    		'cod_postal'=>'70350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>352,
    		'parroquia'=>' AYAPAMBA    ',
    		'cod_parr'=>'70351',
    		'cod_postal'=>'70351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>353,
    		'parroquia'=>' CORDONCILLO ',
    		'cod_parr'=>'70352',
    		'cod_postal'=>'70352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>354,
    		'parroquia'=>' MILAGRO ',
    		'cod_parr'=>'70353',
    		'cod_postal'=>'70353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>355,
    		'parroquia'=>' SAN JOSÉ    ',
    		'cod_parr'=>'70354',
    		'cod_postal'=>'70354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>356,
    		'parroquia'=>' SAN JUAN DE CERRO AZUL  ',
    		'cod_parr'=>'70355',
    		'cod_postal'=>'70355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>55,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>357,
    		'parroquia'=>' BALSAS  ',
    		'cod_parr'=>'70450',
    		'cod_postal'=>'70450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>56,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>358,
    		'parroquia'=>' BELLAMARÍA  ',
    		'cod_parr'=>'70451',
    		'cod_postal'=>'70451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>56,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>359,
    		'parroquia'=>' CHILLA  ',
    		'cod_parr'=>'70550',
    		'cod_postal'=>'70550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>57,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>360,
    		'parroquia'=>' EL GUABO    ',
    		'cod_parr'=>'70650',
    		'cod_postal'=>'70650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>58,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>361,
    		'parroquia'=>' BARBONES (SUCRE)    ',
    		'cod_parr'=>'70651',
    		'cod_postal'=>'70651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>58,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>362,
    		'parroquia'=>' LA IBERIA   ',
    		'cod_parr'=>'70652',
    		'cod_postal'=>'70652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>58,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>363,
    		'parroquia'=>' TENDALES (CAB.EN PUERTO TENDALES)   ',
    		'cod_parr'=>'70653',
    		'cod_postal'=>'70653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>58,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>364,
    		'parroquia'=>' RÍO BONITO  ',
    		'cod_parr'=>'70654',
    		'cod_postal'=>'70654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>58,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>365,
    		'parroquia'=>' ECUADOR ',
    		'cod_parr'=>'70701',
    		'cod_postal'=>'70701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>366,
    		'parroquia'=>' EL PARAÍSO  ',
    		'cod_parr'=>'70702',
    		'cod_postal'=>'70702',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>367,
    		'parroquia'=>' HUALTACO    ',
    		'cod_parr'=>'70703',
    		'cod_postal'=>'70703',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>368,
    		'parroquia'=>' MILTON REYES    ',
    		'cod_parr'=>'70704',
    		'cod_postal'=>'70704',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>369,
    		'parroquia'=>' UNIÓN LOJANA    ',
    		'cod_parr'=>'70705',
    		'cod_postal'=>'70705',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>370,
    		'parroquia'=>' HUAQUILLAS  ',
    		'cod_parr'=>'70750',
    		'cod_postal'=>'70750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>59,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>371,
    		'parroquia'=>' MARCABELÍ   ',
    		'cod_parr'=>'70850',
    		'cod_postal'=>'70850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>60,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>372,
    		'parroquia'=>' EL INGENIO  ',
    		'cod_parr'=>'70851',
    		'cod_postal'=>'70851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>60,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>373,
    		'parroquia'=>' BOLÍVAR ',
    		'cod_parr'=>'70901',
    		'cod_postal'=>'70901',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>374,
    		'parroquia'=>' LOMA DE FRANCO  ',
    		'cod_parr'=>'70902',
    		'cod_postal'=>'70902',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>375,
    		'parroquia'=>' OCHOA LEÓN (MATRIZ) ',
    		'cod_parr'=>'70903',
    		'cod_postal'=>'70903',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>376,
    		'parroquia'=>' TRES CERRITOS   ',
    		'cod_parr'=>'70904',
    		'cod_postal'=>'70904',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>377,
    		'parroquia'=>' PASAJE  ',
    		'cod_parr'=>'70950',
    		'cod_postal'=>'70950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>378,
    		'parroquia'=>' BUENAVISTA  ',
    		'cod_parr'=>'70951',
    		'cod_postal'=>'70951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>379,
    		'parroquia'=>' CASACAY ',
    		'cod_parr'=>'70952',
    		'cod_postal'=>'70952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>380,
    		'parroquia'=>' LA PEAÑA    ',
    		'cod_parr'=>'70953',
    		'cod_postal'=>'70953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>381,
    		'parroquia'=>' PROGRESO    ',
    		'cod_parr'=>'70954',
    		'cod_postal'=>'70954',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>382,
    		'parroquia'=>' UZHCURRUMI  ',
    		'cod_parr'=>'70955',
    		'cod_postal'=>'70955',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>383,
    		'parroquia'=>' CAÑAQUEMADA ',
    		'cod_parr'=>'70956',
    		'cod_postal'=>'70956',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>61,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>384,
    		'parroquia'=>' LA MATRIZ   ',
    		'cod_parr'=>'71001',
    		'cod_postal'=>'71001',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>385,
    		'parroquia'=>' LA SUSAYA   ',
    		'cod_parr'=>'71002',
    		'cod_postal'=>'71002',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>386,
    		'parroquia'=>' PIÑAS GRANDE    ',
    		'cod_parr'=>'71003',
    		'cod_postal'=>'71003',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>387,
    		'parroquia'=>' PIÑAS   ',
    		'cod_parr'=>'71050',
    		'cod_postal'=>'71050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>388,
    		'parroquia'=>' CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)   ',
    		'cod_parr'=>'71051',
    		'cod_postal'=>'71051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>389,
    		'parroquia'=>' LA BOCANA   ',
    		'cod_parr'=>'71052',
    		'cod_postal'=>'71052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>390,
    		'parroquia'=>' MOROMORO (CAB. EN EL VADO)  ',
    		'cod_parr'=>'71053',
    		'cod_postal'=>'71053',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>391,
    		'parroquia'=>' PIEDRAS ',
    		'cod_parr'=>'71054',
    		'cod_postal'=>'71054',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>392,
    		'parroquia'=>' SAN ROQUE (AMBROSIO MALDONADO)  ',
    		'cod_parr'=>'71055',
    		'cod_postal'=>'71055',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>393,
    		'parroquia'=>' SARACAY ',
    		'cod_parr'=>'71056',
    		'cod_postal'=>'71056',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>62,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>394,
    		'parroquia'=>' PORTOVELO   ',
    		'cod_parr'=>'71150',
    		'cod_postal'=>'71150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>63,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>395,
    		'parroquia'=>' CURTINCAPA  ',
    		'cod_parr'=>'71151',
    		'cod_postal'=>'71151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>63,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>396,
    		'parroquia'=>' MORALES ',
    		'cod_parr'=>'71152',
    		'cod_postal'=>'71152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>63,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>397,
    		'parroquia'=>' SALATÍ  ',
    		'cod_parr'=>'71153',
    		'cod_postal'=>'71153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>63,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>398,
    		'parroquia'=>' SANTA ROSA  ',
    		'cod_parr'=>'71201',
    		'cod_postal'=>'71201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>399,
    		'parroquia'=>' PUERTO JELÍ ',
    		'cod_parr'=>'71202',
    		'cod_postal'=>'71202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>400,
    		'parroquia'=>' BALNEARIO JAMBELÍ (SATÉLITE)    ',
    		'cod_parr'=>'71203',
    		'cod_postal'=>'71203',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>401,
    		'parroquia'=>' JUMÓN (SATÉLITE)    ',
    		'cod_parr'=>'71204',
    		'cod_postal'=>'71204',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>402,
    		'parroquia'=>' NUEVO SANTA ROSA    ',
    		'cod_parr'=>'71205',
    		'cod_postal'=>'71205',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>403,
    		'parroquia'=>' SANTA ROSA  ',
    		'cod_parr'=>'71250',
    		'cod_postal'=>'71250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>404,
    		'parroquia'=>' BELLAVISTA  ',
    		'cod_parr'=>'71251',
    		'cod_postal'=>'71251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>405,
    		'parroquia'=>' JAMBELÍ ',
    		'cod_parr'=>'71252',
    		'cod_postal'=>'71252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>406,
    		'parroquia'=>' LA AVANZADA ',
    		'cod_parr'=>'71253',
    		'cod_postal'=>'71253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>407,
    		'parroquia'=>' SAN ANTONIO ',
    		'cod_parr'=>'71254',
    		'cod_postal'=>'71254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>408,
    		'parroquia'=>' TORATA  ',
    		'cod_parr'=>'71255',
    		'cod_postal'=>'71255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>409,
    		'parroquia'=>' VICTORIA    ',
    		'cod_parr'=>'71256',
    		'cod_postal'=>'71256',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>410,
    		'parroquia'=>' BELLAMARÍA  ',
    		'cod_parr'=>'71257',
    		'cod_postal'=>'71257',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>64,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>411,
    		'parroquia'=>' ZARUMA  ',
    		'cod_parr'=>'71350',
    		'cod_postal'=>'71350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>412,
    		'parroquia'=>' ABAÑÍN  ',
    		'cod_parr'=>'71351',
    		'cod_postal'=>'71351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>413,
    		'parroquia'=>' ARCAPAMBA   ',
    		'cod_parr'=>'71352',
    		'cod_postal'=>'71352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>414,
    		'parroquia'=>' GUANAZÁN    ',
    		'cod_parr'=>'71353',
    		'cod_postal'=>'71353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>415,
    		'parroquia'=>' GUIZHAGUIÑA ',
    		'cod_parr'=>'71354',
    		'cod_postal'=>'71354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>416,
    		'parroquia'=>' HUERTAS ',
    		'cod_parr'=>'71355',
    		'cod_postal'=>'71355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>417,
    		'parroquia'=>' MALVAS  ',
    		'cod_parr'=>'71356',
    		'cod_postal'=>'71356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>418,
    		'parroquia'=>' MULUNCAY GRANDE ',
    		'cod_parr'=>'71357',
    		'cod_postal'=>'71357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>419,
    		'parroquia'=>' SINSAO  ',
    		'cod_parr'=>'71358',
    		'cod_postal'=>'71358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>420,
    		'parroquia'=>' SALVIAS ',
    		'cod_parr'=>'71359',
    		'cod_postal'=>'71359',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>65,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>421,
    		'parroquia'=>' LA VICTORIA ',
    		'cod_parr'=>'71401',
    		'cod_postal'=>'71401',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>422,
    		'parroquia'=>' PLATANILLOS ',
    		'cod_parr'=>'71402',
    		'cod_postal'=>'71402',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>423,
    		'parroquia'=>' VALLE HERMOSO   ',
    		'cod_parr'=>'71403',
    		'cod_postal'=>'71403',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>424,
    		'parroquia'=>' LA VICTORIA ',
    		'cod_parr'=>'71450',
    		'cod_postal'=>'71450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>425,
    		'parroquia'=>' LA LIBERTAD ',
    		'cod_parr'=>'71451',
    		'cod_postal'=>'71451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>426,
    		'parroquia'=>' EL PARAÍSO  ',
    		'cod_parr'=>'71452',
    		'cod_postal'=>'71452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>427,
    		'parroquia'=>' SAN ISIDRO  ',
    		'cod_parr'=>'71453',
    		'cod_postal'=>'71453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>66,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>428,
    		'parroquia'=>' BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)   ',
    		'cod_parr'=>'80101',
    		'cod_postal'=>'80101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>429,
    		'parroquia'=>' 5 DE AGOSTO ',
    		'cod_parr'=>'80102',
    		'cod_postal'=>'80102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>430,
    		'parroquia'=>' ESMERALDAS  ',
    		'cod_parr'=>'80103',
    		'cod_postal'=>'80103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>431,
    		'parroquia'=>' LUIS TELLO (LAS PALMAS) ',
    		'cod_parr'=>'80104',
    		'cod_postal'=>'80104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>432,
    		'parroquia'=>' SIMÓN PLATA TORRES  ',
    		'cod_parr'=>'80105',
    		'cod_postal'=>'80105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>433,
    		'parroquia'=>' ESMERALDAS  ',
    		'cod_parr'=>'80150',
    		'cod_postal'=>'80150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>434,
    		'parroquia'=>' ATACAMES    ',
    		'cod_parr'=>'80151',
    		'cod_postal'=>'80151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>435,
    		'parroquia'=>' CAMARONES (CAB. EN SAN VICENTE) ',
    		'cod_parr'=>'80152',
    		'cod_postal'=>'80152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>436,
    		'parroquia'=>' CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)  ',
    		'cod_parr'=>'80153',
    		'cod_postal'=>'80153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>437,
    		'parroquia'=>' CHINCA  ',
    		'cod_parr'=>'80154',
    		'cod_postal'=>'80154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>438,
    		'parroquia'=>' CHONTADURO  ',
    		'cod_parr'=>'80155',
    		'cod_postal'=>'80155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>439,
    		'parroquia'=>' CHUMUNDÉ    ',
    		'cod_parr'=>'80156',
    		'cod_postal'=>'80156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>440,
    		'parroquia'=>' LAGARTO ',
    		'cod_parr'=>'80157',
    		'cod_postal'=>'80157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>441,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'80158',
    		'cod_postal'=>'80158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>442,
    		'parroquia'=>' MAJUA   ',
    		'cod_parr'=>'80159',
    		'cod_postal'=>'80159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>443,
    		'parroquia'=>' MONTALVO (CAB. EN HORQUETA) ',
    		'cod_parr'=>'80160',
    		'cod_postal'=>'80160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>444,
    		'parroquia'=>' RÍO VERDE   ',
    		'cod_parr'=>'80161',
    		'cod_postal'=>'80161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>445,
    		'parroquia'=>' ROCAFUERTE  ',
    		'cod_parr'=>'80162',
    		'cod_postal'=>'80162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>446,
    		'parroquia'=>' SAN MATEO   ',
    		'cod_parr'=>'80163',
    		'cod_postal'=>'80163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>447,
    		'parroquia'=>' SÚA (CAB. EN LA BOCANA) ',
    		'cod_parr'=>'80164',
    		'cod_postal'=>'80164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>448,
    		'parroquia'=>' TABIAZO ',
    		'cod_parr'=>'80165',
    		'cod_postal'=>'80165',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>449,
    		'parroquia'=>' TACHINA ',
    		'cod_parr'=>'80166',
    		'cod_postal'=>'80166',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>450,
    		'parroquia'=>' TONCHIGÜE   ',
    		'cod_parr'=>'80167',
    		'cod_postal'=>'80167',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>451,
    		'parroquia'=>' VUELTA LARGA    ',
    		'cod_parr'=>'80168',
    		'cod_postal'=>'80168',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>67,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>452,
    		'parroquia'=>' VALDEZ (LIMONES)    ',
    		'cod_parr'=>'80250',
    		'cod_postal'=>'80250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>453,
    		'parroquia'=>' ANCHAYACU   ',
    		'cod_parr'=>'80251',
    		'cod_postal'=>'80251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>454,
    		'parroquia'=>' ATAHUALPA (CAB. EN CAMARONES)   ',
    		'cod_parr'=>'80252',
    		'cod_postal'=>'80252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>455,
    		'parroquia'=>' BORBÓN  ',
    		'cod_parr'=>'80253',
    		'cod_postal'=>'80253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>456,
    		'parroquia'=>' LA TOLA ',
    		'cod_parr'=>'80254',
    		'cod_postal'=>'80254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>457,
    		'parroquia'=>' LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)   ',
    		'cod_parr'=>'80255',
    		'cod_postal'=>'80255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>458,
    		'parroquia'=>' MALDONADO   ',
    		'cod_parr'=>'80256',
    		'cod_postal'=>'80256',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>459,
    		'parroquia'=>' PAMPANAL DE BOLÍVAR ',
    		'cod_parr'=>'80257',
    		'cod_postal'=>'80257',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>460,
    		'parroquia'=>' SAN FRANCISCO DE ONZOLE ',
    		'cod_parr'=>'80258',
    		'cod_postal'=>'80258',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>461,
    		'parroquia'=>' SANTO DOMINGO DE ONZOLE ',
    		'cod_parr'=>'80259',
    		'cod_postal'=>'80259',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>462,
    		'parroquia'=>' SELVA ALEGRE    ',
    		'cod_parr'=>'80260',
    		'cod_postal'=>'80260',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>463,
    		'parroquia'=>' TELEMBÍ ',
    		'cod_parr'=>'80261',
    		'cod_postal'=>'80261',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>464,
    		'parroquia'=>' COLÓN ELOY DEL MARÍA    ',
    		'cod_parr'=>'80262',
    		'cod_postal'=>'80262',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>465,
    		'parroquia'=>' SAN JOSÉ DE CAYAPAS ',
    		'cod_parr'=>'80263',
    		'cod_postal'=>'80263',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>466,
    		'parroquia'=>' TIMBIRÉ ',
    		'cod_parr'=>'80264',
    		'cod_postal'=>'80264',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>68,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>467,
    		'parroquia'=>' MUISNE  ',
    		'cod_parr'=>'80350',
    		'cod_postal'=>'80350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>468,
    		'parroquia'=>' BOLÍVAR ',
    		'cod_parr'=>'80351',
    		'cod_postal'=>'80351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>469,
    		'parroquia'=>' DAULE   ',
    		'cod_parr'=>'80352',
    		'cod_postal'=>'80352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>470,
    		'parroquia'=>' GALERA  ',
    		'cod_parr'=>'80353',
    		'cod_postal'=>'80353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>471,
    		'parroquia'=>' QUINGUE (OLMEDO PERDOMO FRANCO) ',
    		'cod_parr'=>'80354',
    		'cod_postal'=>'80354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>472,
    		'parroquia'=>' SALIMA  ',
    		'cod_parr'=>'80355',
    		'cod_postal'=>'80355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>473,
    		'parroquia'=>' SAN FRANCISCO   ',
    		'cod_parr'=>'80356',
    		'cod_postal'=>'80356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>474,
    		'parroquia'=>' SAN GREGORIO    ',
    		'cod_parr'=>'80357',
    		'cod_postal'=>'80357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>475,
    		'parroquia'=>' SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)  ',
    		'cod_parr'=>'80358',
    		'cod_postal'=>'80358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>69,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>476,
    		'parroquia'=>' ROSA ZÁRATE (QUININDÉ)  ',
    		'cod_parr'=>'80450',
    		'cod_postal'=>'80450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>477,
    		'parroquia'=>' CUBE    ',
    		'cod_parr'=>'80451',
    		'cod_postal'=>'80451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>478,
    		'parroquia'=>' CHURA (CHANCAMA) (CAB. EN EL YERBERO)   ',
    		'cod_parr'=>'80452',
    		'cod_postal'=>'80452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>479,
    		'parroquia'=>' MALIMPIA    ',
    		'cod_parr'=>'80453',
    		'cod_postal'=>'80453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>480,
    		'parroquia'=>' VICHE   ',
    		'cod_parr'=>'80454',
    		'cod_postal'=>'80454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>481,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'80455',
    		'cod_postal'=>'80455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>70,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>482,
    		'parroquia'=>' SAN LORENZO ',
    		'cod_parr'=>'80550',
    		'cod_postal'=>'80550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>483,
    		'parroquia'=>' ALTO TAMBO (CAB. EN GUADUAL)    ',
    		'cod_parr'=>'80551',
    		'cod_postal'=>'80551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>484,
    		'parroquia'=>' ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)  ',
    		'cod_parr'=>'80552',
    		'cod_postal'=>'80552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>485,
    		'parroquia'=>' CALDERÓN    ',
    		'cod_parr'=>'80553',
    		'cod_postal'=>'80553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>486,
    		'parroquia'=>' CARONDELET  ',
    		'cod_parr'=>'80554',
    		'cod_postal'=>'80554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>487,
    		'parroquia'=>' 5 DE JUNIO (CAB. EN UIMBI)  ',
    		'cod_parr'=>'80555',
    		'cod_postal'=>'80555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>488,
    		'parroquia'=>' CONCEPCIÓN  ',
    		'cod_parr'=>'80556',
    		'cod_postal'=>'80556',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>489,
    		'parroquia'=>' MATAJE (CAB. EN SANTANDER)  ',
    		'cod_parr'=>'80557',
    		'cod_postal'=>'80557',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>490,
    		'parroquia'=>' SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)  ',
    		'cod_parr'=>'80558',
    		'cod_postal'=>'80558',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>491,
    		'parroquia'=>' SANTA RITA  ',
    		'cod_parr'=>'80559',
    		'cod_postal'=>'80559',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>492,
    		'parroquia'=>' TAMBILLO    ',
    		'cod_parr'=>'80560',
    		'cod_postal'=>'80560',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>493,
    		'parroquia'=>' TULULBÍ (CAB. EN RICAURTE)  ',
    		'cod_parr'=>'80561',
    		'cod_postal'=>'80561',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>494,
    		'parroquia'=>' URBINA  ',
    		'cod_parr'=>'80562',
    		'cod_postal'=>'80562',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>71,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>495,
    		'parroquia'=>' ATACAMES    ',
    		'cod_parr'=>'80650',
    		'cod_postal'=>'80650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>72,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>496,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'80651',
    		'cod_postal'=>'80651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>72,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>497,
    		'parroquia'=>' SÚA (CAB. EN LA BOCANA) ',
    		'cod_parr'=>'80652',
    		'cod_postal'=>'80652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>72,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>498,
    		'parroquia'=>' TONCHIGÜE   ',
    		'cod_parr'=>'80653',
    		'cod_postal'=>'80653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>72,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>499,
    		'parroquia'=>' TONSUPA ',
    		'cod_parr'=>'80654',
    		'cod_postal'=>'80654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>72,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>500,
    		'parroquia'=>' RIOVERDE    ',
    		'cod_parr'=>'80750',
    		'cod_postal'=>'80750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );


    	Parroquia::create( [
    		'id'=>501,
    		'parroquia'=>' CHONTADURO  ',
    		'cod_parr'=>'80751',
    		'cod_postal'=>'80751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>502,
    		'parroquia'=>' CHUMUNDÉ    ',
    		'cod_parr'=>'80752',
    		'cod_postal'=>'80752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>503,
    		'parroquia'=>' LAGARTO ',
    		'cod_parr'=>'80753',
    		'cod_postal'=>'80753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>504,
    		'parroquia'=>' MONTALVO (CAB. EN HORQUETA) ',
    		'cod_parr'=>'80754',
    		'cod_postal'=>'80754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>505,
    		'parroquia'=>' ROCAFUERTE  ',
    		'cod_parr'=>'80755',
    		'cod_postal'=>'80755',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>73,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>506,
    		'parroquia'=>' LA CONCORDIA    ',
    		'cod_parr'=>'80850',
    		'cod_postal'=>'80850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>74,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>507,
    		'parroquia'=>' MONTERREY   ',
    		'cod_parr'=>'80851',
    		'cod_postal'=>'80851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>74,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>508,
    		'parroquia'=>' LA VILLEGAS ',
    		'cod_parr'=>'80852',
    		'cod_postal'=>'80852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>74,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>509,
    		'parroquia'=>' PLAN PILOTO ',
    		'cod_parr'=>'80853',
    		'cod_postal'=>'80853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>74,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>510,
    		'parroquia'=>' AYACUCHO    ',
    		'cod_parr'=>'90101',
    		'cod_postal'=>'90101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>511,
    		'parroquia'=>' BOLÍVAR (SAGRARIO)  ',
    		'cod_parr'=>'90102',
    		'cod_postal'=>'90102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>512,
    		'parroquia'=>' CARBO (CONCEPCIÓN)  ',
    		'cod_parr'=>'90103',
    		'cod_postal'=>'90103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>513,
    		'parroquia'=>' FEBRES CORDERO  ',
    		'cod_parr'=>'90104',
    		'cod_postal'=>'90104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>514,
    		'parroquia'=>' GARCÍA MORENO   ',
    		'cod_parr'=>'90105',
    		'cod_postal'=>'90105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>515,
    		'parroquia'=>' LETAMENDI   ',
    		'cod_parr'=>'90106',
    		'cod_postal'=>'90106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>516,
    		'parroquia'=>' NUEVE DE OCTUBRE    ',
    		'cod_parr'=>'90107',
    		'cod_postal'=>'90107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>517,
    		'parroquia'=>' OLMEDO (SAN ALEJO)  ',
    		'cod_parr'=>'90108',
    		'cod_postal'=>'90108',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>518,
    		'parroquia'=>' ROCA    ',
    		'cod_parr'=>'90109',
    		'cod_postal'=>'90109',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>519,
    		'parroquia'=>' ROCAFUERTE  ',
    		'cod_parr'=>'90110',
    		'cod_postal'=>'90110',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>520,
    		'parroquia'=>' SUCRE   ',
    		'cod_parr'=>'90111',
    		'cod_postal'=>'90111',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>521,
    		'parroquia'=>' TARQUI  ',
    		'cod_parr'=>'90112',
    		'cod_postal'=>'90112',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>522,
    		'parroquia'=>' URDANETA    ',
    		'cod_parr'=>'90113',
    		'cod_postal'=>'90113',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>523,
    		'parroquia'=>' XIMENA  ',
    		'cod_parr'=>'90114',
    		'cod_postal'=>'90114',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>524,
    		'parroquia'=>' PASCUALES   ',
    		'cod_parr'=>'90115',
    		'cod_postal'=>'90115',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>525,
    		'parroquia'=>' GUAYAQUIL   ',
    		'cod_parr'=>'90150',
    		'cod_postal'=>'90150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>526,
    		'parroquia'=>' CHONGÓN ',
    		'cod_parr'=>'90151',
    		'cod_postal'=>'90151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>527,
    		'parroquia'=>' JUAN GÓMEZ RENDÓN (PROGRESO)    ',
    		'cod_parr'=>'90152',
    		'cod_postal'=>'90152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>528,
    		'parroquia'=>' MORRO   ',
    		'cod_parr'=>'90153',
    		'cod_postal'=>'90153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>529,
    		'parroquia'=>' PASCUALES   ',
    		'cod_parr'=>'90154',
    		'cod_postal'=>'90154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>530,
    		'parroquia'=>' PLAYAS (GRAL. VILLAMIL) ',
    		'cod_parr'=>'90155',
    		'cod_postal'=>'90155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>531,
    		'parroquia'=>' POSORJA ',
    		'cod_parr'=>'90156',
    		'cod_postal'=>'90156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>532,
    		'parroquia'=>' PUNÁ    ',
    		'cod_parr'=>'90157',
    		'cod_postal'=>'90157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>533,
    		'parroquia'=>' TENGUEL ',
    		'cod_parr'=>'90158',
    		'cod_postal'=>'90158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>75,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>534,
    		'parroquia'=>' ALFREDO BAQUERIZO MORENO (JUJÁN)    ',
    		'cod_parr'=>'90250',
    		'cod_postal'=>'90250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>76,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>535,
    		'parroquia'=>' BALAO   ',
    		'cod_parr'=>'90350',
    		'cod_postal'=>'90350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>77,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>536,
    		'parroquia'=>' BALZAR  ',
    		'cod_parr'=>'90450',
    		'cod_postal'=>'90450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>78,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>537,
    		'parroquia'=>' COLIMES ',
    		'cod_parr'=>'90550',
    		'cod_postal'=>'90550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>79,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>538,
    		'parroquia'=>' SAN JACINTO ',
    		'cod_parr'=>'90551',
    		'cod_postal'=>'90551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>79,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>539,
    		'parroquia'=>' DAULE   ',
    		'cod_parr'=>'90601',
    		'cod_postal'=>'90601',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>540,
    		'parroquia'=>' LA AURORA (SATÉLITE)    ',
    		'cod_parr'=>'90602',
    		'cod_postal'=>'90602',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>541,
    		'parroquia'=>' BANIFE  ',
    		'cod_parr'=>'90603',
    		'cod_postal'=>'90603',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>542,
    		'parroquia'=>' EMILIANO CAICEDO MARCOS ',
    		'cod_parr'=>'90604',
    		'cod_postal'=>'90604',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>543,
    		'parroquia'=>' MAGRO   ',
    		'cod_parr'=>'90605',
    		'cod_postal'=>'90605',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>544,
    		'parroquia'=>' PADRE JUAN BAUTISTA AGUIRRE ',
    		'cod_parr'=>'90606',
    		'cod_postal'=>'90606',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>545,
    		'parroquia'=>' SANTA CLARA ',
    		'cod_parr'=>'90607',
    		'cod_postal'=>'90607',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>546,
    		'parroquia'=>' VICENTE PIEDRAHITA  ',
    		'cod_parr'=>'90608',
    		'cod_postal'=>'90608',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>547,
    		'parroquia'=>' DAULE   ',
    		'cod_parr'=>'90650',
    		'cod_postal'=>'90650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>548,
    		'parroquia'=>' ISIDRO AYORA (SOLEDAD)  ',
    		'cod_parr'=>'90651',
    		'cod_postal'=>'90651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>549,
    		'parroquia'=>' JUAN BAUTISTA AGUIRRE (LOS TINTOS)  ',
    		'cod_parr'=>'90652',
    		'cod_postal'=>'90652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>550,
    		'parroquia'=>' LAUREL  ',
    		'cod_parr'=>'90653',
    		'cod_postal'=>'90653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>551,
    		'parroquia'=>' LIMONAL ',
    		'cod_parr'=>'90654',
    		'cod_postal'=>'90654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>552,
    		'parroquia'=>' LOMAS DE SARGENTILLO    ',
    		'cod_parr'=>'90655',
    		'cod_postal'=>'90655',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>553,
    		'parroquia'=>' LOS LOJAS (ENRIQUE BAQUERIZO MORENO)    ',
    		'cod_parr'=>'90656',
    		'cod_postal'=>'90656',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>554,
    		'parroquia'=>' PIEDRAHITA (NOBOL)  ',
    		'cod_parr'=>'90657',
    		'cod_postal'=>'90657',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>80,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>555,
    		'parroquia'=>' ELOY ALFARO (DURÁN) ',
    		'cod_parr'=>'90701',
    		'cod_postal'=>'90701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>81,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>556,
    		'parroquia'=>' EL RECREO   ',
    		'cod_parr'=>'90702',
    		'cod_postal'=>'90702',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>81,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>557,
    		'parroquia'=>' ELOY ALFARO (DURÁN) ',
    		'cod_parr'=>'90750',
    		'cod_postal'=>'90750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>81,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>558,
    		'parroquia'=>' VELASCO IBARRA (EL EMPALME) ',
    		'cod_parr'=>'90850',
    		'cod_postal'=>'90850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>82,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>559,
    		'parroquia'=>' GUAYAS (PUEBLO NUEVO)   ',
    		'cod_parr'=>'90851',
    		'cod_postal'=>'90851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>82,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>560,
    		'parroquia'=>' EL ROSARIO  ',
    		'cod_parr'=>'90852',
    		'cod_postal'=>'90852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>82,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>561,
    		'parroquia'=>' EL TRIUNFO  ',
    		'cod_parr'=>'90950',
    		'cod_postal'=>'90950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>83,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>562,
    		'parroquia'=>' MILAGRO ',
    		'cod_parr'=>'91050',
    		'cod_postal'=>'91050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>84,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>563,
    		'parroquia'=>' CHOBO   ',
    		'cod_parr'=>'91051',
    		'cod_postal'=>'91051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>84,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>564,
    		'parroquia'=>' GENERAL ELIZALDE (BUCAY)    ',
    		'cod_parr'=>'91052',
    		'cod_postal'=>'91052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>84,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>565,
    		'parroquia'=>' MARISCAL SUCRE (HUAQUES)    ',
    		'cod_parr'=>'91053',
    		'cod_postal'=>'91053',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>84,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>566,
    		'parroquia'=>' ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)    ',
    		'cod_parr'=>'91054',
    		'cod_postal'=>'91054',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>84,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>567,
    		'parroquia'=>' NARANJAL    ',
    		'cod_parr'=>'91150',
    		'cod_postal'=>'91150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>85,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>568,
    		'parroquia'=>' JESÚS MARÍA ',
    		'cod_parr'=>'91151',
    		'cod_postal'=>'91151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>85,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>569,
    		'parroquia'=>' SAN CARLOS  ',
    		'cod_parr'=>'91152',
    		'cod_postal'=>'91152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>85,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>570,
    		'parroquia'=>' SANTA ROSA DE FLANDES   ',
    		'cod_parr'=>'91153',
    		'cod_postal'=>'91153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>85,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>571,
    		'parroquia'=>' TAURA   ',
    		'cod_parr'=>'91154',
    		'cod_postal'=>'91154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>85,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>572,
    		'parroquia'=>' NARANJITO   ',
    		'cod_parr'=>'91250',
    		'cod_postal'=>'91250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>86,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>573,
    		'parroquia'=>' PALESTINA   ',
    		'cod_parr'=>'91350',
    		'cod_postal'=>'91350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>87,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>574,
    		'parroquia'=>' PEDRO CARBO ',
    		'cod_parr'=>'91450',
    		'cod_postal'=>'91450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>88,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>575,
    		'parroquia'=>' VALLE DE LA VIRGEN  ',
    		'cod_parr'=>'91451',
    		'cod_postal'=>'91451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>88,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>576,
    		'parroquia'=>' SABANILLA   ',
    		'cod_parr'=>'91452',
    		'cod_postal'=>'91452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>88,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>577,
    		'parroquia'=>' SAMBORONDÓN ',
    		'cod_parr'=>'91601',
    		'cod_postal'=>'91601',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>89,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>578,
    		'parroquia'=>' LA PUNTILLA (SATÉLITE)  ',
    		'cod_parr'=>'91602',
    		'cod_postal'=>'91602',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>89,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>579,
    		'parroquia'=>' SAMBORONDÓN ',
    		'cod_parr'=>'91650',
    		'cod_postal'=>'91650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>89,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>580,
    		'parroquia'=>' TARIFA  ',
    		'cod_parr'=>'91651',
    		'cod_postal'=>'91651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>89,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>581,
    		'parroquia'=>' SANTA LUCÍA ',
    		'cod_parr'=>'91850',
    		'cod_postal'=>'91850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>90,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>582,
    		'parroquia'=>' BOCANA  ',
    		'cod_parr'=>'91901',
    		'cod_postal'=>'91901',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>583,
    		'parroquia'=>' CANDILEJOS  ',
    		'cod_parr'=>'91902',
    		'cod_postal'=>'91902',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>584,
    		'parroquia'=>' CENTRAL ',
    		'cod_parr'=>'91903',
    		'cod_postal'=>'91903',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>585,
    		'parroquia'=>' PARAÍSO ',
    		'cod_parr'=>'91904',
    		'cod_postal'=>'91904',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>586,
    		'parroquia'=>' SAN MATEO   ',
    		'cod_parr'=>'91905',
    		'cod_postal'=>'91905',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>587,
    		'parroquia'=>' EL SALITRE (LAS RAMAS)  ',
    		'cod_parr'=>'91950',
    		'cod_postal'=>'91950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>588,
    		'parroquia'=>' GRAL. VERNAZA (DOS ESTEROS) ',
    		'cod_parr'=>'91951',
    		'cod_postal'=>'91951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>589,
    		'parroquia'=>' LA VICTORIA (ÑAUZA) ',
    		'cod_parr'=>'91952',
    		'cod_postal'=>'91952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>590,
    		'parroquia'=>' JUNQUILLAL  ',
    		'cod_parr'=>'91953',
    		'cod_postal'=>'91953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>91,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>591,
    		'parroquia'=>' SAN JACINTO DE YAGUACHI ',
    		'cod_parr'=>'92050',
    		'cod_postal'=>'92050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>592,
    		'parroquia'=>' CRNEL. LORENZO DE GARAICOA (PEDREGAL)   ',
    		'cod_parr'=>'92051',
    		'cod_postal'=>'92051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>593,
    		'parroquia'=>' CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS) ',
    		'cod_parr'=>'92052',
    		'cod_postal'=>'92052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>594,
    		'parroquia'=>' GRAL. PEDRO J. MONTERO (BOLICHE)    ',
    		'cod_parr'=>'92053',
    		'cod_postal'=>'92053',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>595,
    		'parroquia'=>' SIMÓN BOLÍVAR   ',
    		'cod_parr'=>'92054',
    		'cod_postal'=>'92054',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>596,
    		'parroquia'=>' YAGUACHI VIEJO (CONE)   ',
    		'cod_parr'=>'92055',
    		'cod_postal'=>'92055',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>597,
    		'parroquia'=>' VIRGEN DE FÁTIMA    ',
    		'cod_parr'=>'92056',
    		'cod_postal'=>'92056',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>92,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>598,
    		'parroquia'=>' GENERAL VILLAMIL (PLAYAS)   ',
    		'cod_parr'=>'92150',
    		'cod_postal'=>'92150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>93,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>599,
    		'parroquia'=>' SIMÓN BOLÍVAR   ',
    		'cod_parr'=>'92250',
    		'cod_postal'=>'92250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>94,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>600,
    		'parroquia'=>' CRNEL.LORENZO DE GARAICOA (PEDREGAL)    ',
    		'cod_parr'=>'92251',
    		'cod_postal'=>'92251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>94,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>601,
    		'parroquia'=>' CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)    ',
    		'cod_parr'=>'92350',
    		'cod_postal'=>'92350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>95,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>602,
    		'parroquia'=>' LOMAS DE SARGENTILLO    ',
    		'cod_parr'=>'92450',
    		'cod_postal'=>'92450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>96,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>603,
    		'parroquia'=>' ISIDRO AYORA (SOLEDAD)  ',
    		'cod_parr'=>'92451',
    		'cod_postal'=>'92451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>96,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>604,
    		'parroquia'=>' NARCISA DE JESÚS    ',
    		'cod_parr'=>'92550',
    		'cod_postal'=>'92550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>97,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>605,
    		'parroquia'=>' GENERAL ANTONIO ELIZALDE (BUCAY)    ',
    		'cod_parr'=>'92750',
    		'cod_postal'=>'92750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>98,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>606,
    		'parroquia'=>' ISIDRO AYORA    ',
    		'cod_parr'=>'92850',
    		'cod_postal'=>'92850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>99,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>607,
    		'parroquia'=>' CARANQUI    ',
    		'cod_parr'=>'100101',
    		'cod_postal'=>'100101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>608,
    		'parroquia'=>' GUAYAQUIL DE ALPACHACA  ',
    		'cod_parr'=>'100102',
    		'cod_postal'=>'100102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>609,
    		'parroquia'=>' SAGRARIO    ',
    		'cod_parr'=>'100103',
    		'cod_postal'=>'100103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>610,
    		'parroquia'=>' SAN FRANCISCO   ',
    		'cod_parr'=>'100104',
    		'cod_postal'=>'100104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>611,
    		'parroquia'=>' LA DOLOROSA DEL PRIORATO    ',
    		'cod_parr'=>'100105',
    		'cod_postal'=>'100105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>612,
    		'parroquia'=>' SAN MIGUEL DE IBARRA    ',
    		'cod_parr'=>'100150',
    		'cod_postal'=>'100150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>613,
    		'parroquia'=>' AMBUQUÍ ',
    		'cod_parr'=>'100151',
    		'cod_postal'=>'100151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>614,
    		'parroquia'=>' ANGOCHAGUA  ',
    		'cod_parr'=>'100152',
    		'cod_postal'=>'100152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>615,
    		'parroquia'=>' CAROLINA    ',
    		'cod_parr'=>'100153',
    		'cod_postal'=>'100153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>616,
    		'parroquia'=>' LA ESPERANZA    ',
    		'cod_parr'=>'100154',
    		'cod_postal'=>'100154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>617,
    		'parroquia'=>' LITA    ',
    		'cod_parr'=>'100155',
    		'cod_postal'=>'100155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>618,
    		'parroquia'=>' SALINAS ',
    		'cod_parr'=>'100156',
    		'cod_postal'=>'100156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>619,
    		'parroquia'=>' SAN ANTONIO ',
    		'cod_parr'=>'100157',
    		'cod_postal'=>'100157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>100,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>620,
    		'parroquia'=>' ANDRADE MARÍN (LOURDES) ',
    		'cod_parr'=>'100201',
    		'cod_postal'=>'100201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>621,
    		'parroquia'=>' ATUNTAQUI   ',
    		'cod_parr'=>'100202',
    		'cod_postal'=>'100202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>622,
    		'parroquia'=>' ATUNTAQUI   ',
    		'cod_parr'=>'100250',
    		'cod_postal'=>'100250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>623,
    		'parroquia'=>' IMBAYA (SAN LUIS DE COBUENDO)   ',
    		'cod_parr'=>'100251',
    		'cod_postal'=>'100251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>624,
    		'parroquia'=>' SAN FRANCISCO DE NATABUELA  ',
    		'cod_parr'=>'100252',
    		'cod_postal'=>'100252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>625,
    		'parroquia'=>' SAN JOSÉ DE CHALTURA    ',
    		'cod_parr'=>'100253',
    		'cod_postal'=>'100253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>626,
    		'parroquia'=>' SAN ROQUE   ',
    		'cod_parr'=>'100254',
    		'cod_postal'=>'100254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>101,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>627,
    		'parroquia'=>' SAGRARIO    ',
    		'cod_parr'=>'100301',
    		'cod_postal'=>'100301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>628,
    		'parroquia'=>' SAN FRANCISCO   ',
    		'cod_parr'=>'100302',
    		'cod_postal'=>'100302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>629,
    		'parroquia'=>' COTACACHI   ',
    		'cod_parr'=>'100350',
    		'cod_postal'=>'100350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>630,
    		'parroquia'=>' APUELA  ',
    		'cod_parr'=>'100351',
    		'cod_postal'=>'100351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>631,
    		'parroquia'=>' GARCÍA MORENO (LLURIMAGUA)  ',
    		'cod_parr'=>'100352',
    		'cod_postal'=>'100352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>632,
    		'parroquia'=>' IMANTAG ',
    		'cod_parr'=>'100353',
    		'cod_postal'=>'100353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>633,
    		'parroquia'=>' PEÑAHERRERA ',
    		'cod_parr'=>'100354',
    		'cod_postal'=>'100354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>634,
    		'parroquia'=>' PLAZA GUTIÉRREZ (CALVARIO)  ',
    		'cod_parr'=>'100355',
    		'cod_postal'=>'100355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>635,
    		'parroquia'=>' QUIROGA ',
    		'cod_parr'=>'100356',
    		'cod_postal'=>'100356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>636,
    		'parroquia'=>' 6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)   ',
    		'cod_parr'=>'100357',
    		'cod_postal'=>'100357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>637,
    		'parroquia'=>' VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO    ',
    		'cod_parr'=>'100358',
    		'cod_postal'=>'100358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>102,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>638,
    		'parroquia'=>' JORDÁN  ',
    		'cod_parr'=>'100401',
    		'cod_postal'=>'100401',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>639,
    		'parroquia'=>' SAN LUIS    ',
    		'cod_parr'=>'100402',
    		'cod_postal'=>'100402',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>640,
    		'parroquia'=>' OTAVALO ',
    		'cod_parr'=>'100450',
    		'cod_postal'=>'100450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>641,
    		'parroquia'=>' DR. MIGUEL EGAS CABEZAS (PEGUCHE)   ',
    		'cod_parr'=>'100451',
    		'cod_postal'=>'100451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>642,
    		'parroquia'=>' EUGENIO ESPEJO (CALPAQUÍ)   ',
    		'cod_parr'=>'100452',
    		'cod_postal'=>'100452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>643,
    		'parroquia'=>' GONZÁLEZ SUÁREZ ',
    		'cod_parr'=>'100453',
    		'cod_postal'=>'100453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>644,
    		'parroquia'=>' PATAQUÍ ',
    		'cod_parr'=>'100454',
    		'cod_postal'=>'100454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>645,
    		'parroquia'=>' SAN JOSÉ DE QUICHINCHE  ',
    		'cod_parr'=>'100455',
    		'cod_postal'=>'100455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>646,
    		'parroquia'=>' SAN JUAN DE ILUMÁN  ',
    		'cod_parr'=>'100456',
    		'cod_postal'=>'100456',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>647,
    		'parroquia'=>' SAN PABLO   ',
    		'cod_parr'=>'100457',
    		'cod_postal'=>'100457',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>648,
    		'parroquia'=>' SAN RAFAEL  ',
    		'cod_parr'=>'100458',
    		'cod_postal'=>'100458',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>649,
    		'parroquia'=>' SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)    ',
    		'cod_parr'=>'100459',
    		'cod_postal'=>'100459',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>103,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>650,
    		'parroquia'=>' PIMAMPIRO   ',
    		'cod_parr'=>'100550',
    		'cod_postal'=>'100550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>104,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>651,
    		'parroquia'=>' CHUGÁ   ',
    		'cod_parr'=>'100551',
    		'cod_postal'=>'100551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>104,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>652,
    		'parroquia'=>' MARIANO ACOSTA  ',
    		'cod_parr'=>'100552',
    		'cod_postal'=>'100552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>104,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>653,
    		'parroquia'=>' SAN FRANCISCO DE SIGSIPAMBA ',
    		'cod_parr'=>'100553',
    		'cod_postal'=>'100553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>104,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>654,
    		'parroquia'=>' URCUQUÍ CABECERA CANTONAL   ',
    		'cod_parr'=>'100650',
    		'cod_postal'=>'100650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>655,
    		'parroquia'=>' CAHUASQUÍ   ',
    		'cod_parr'=>'100651',
    		'cod_postal'=>'100651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>656,
    		'parroquia'=>' LA MERCED DE BUENOS AIRES   ',
    		'cod_parr'=>'100652',
    		'cod_postal'=>'100652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>657,
    		'parroquia'=>' PABLO ARENAS    ',
    		'cod_parr'=>'100653',
    		'cod_postal'=>'100653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>658,
    		'parroquia'=>' SAN BLAS    ',
    		'cod_parr'=>'100654',
    		'cod_postal'=>'100654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>659,
    		'parroquia'=>' TUMBABIRO   ',
    		'cod_parr'=>'100655',
    		'cod_postal'=>'100655',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>105,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>660,
    		'parroquia'=>' EL SAGRARIO ',
    		'cod_parr'=>'110101',
    		'cod_postal'=>'110101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>661,
    		'parroquia'=>' SAN SEBASTIÁN   ',
    		'cod_parr'=>'110102',
    		'cod_postal'=>'110102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>662,
    		'parroquia'=>' SUCRE   ',
    		'cod_parr'=>'110103',
    		'cod_postal'=>'110103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>663,
    		'parroquia'=>' VALLE   ',
    		'cod_parr'=>'110104',
    		'cod_postal'=>'110104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>664,
    		'parroquia'=>' LOJA    ',
    		'cod_parr'=>'110150',
    		'cod_postal'=>'110150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>665,
    		'parroquia'=>' CHANTACO    ',
    		'cod_parr'=>'110151',
    		'cod_postal'=>'110151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>666,
    		'parroquia'=>' CHUQUIRIBAMBA   ',
    		'cod_parr'=>'110152',
    		'cod_postal'=>'110152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>667,
    		'parroquia'=>' EL CISNE    ',
    		'cod_parr'=>'110153',
    		'cod_postal'=>'110153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>668,
    		'parroquia'=>' GUALEL  ',
    		'cod_parr'=>'110154',
    		'cod_postal'=>'110154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>669,
    		'parroquia'=>' JIMBILLA    ',
    		'cod_parr'=>'110155',
    		'cod_postal'=>'110155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>670,
    		'parroquia'=>' MALACATOS (VALLADOLID)  ',
    		'cod_parr'=>'110156',
    		'cod_postal'=>'110156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>671,
    		'parroquia'=>' SAN LUCAS   ',
    		'cod_parr'=>'110157',
    		'cod_postal'=>'110157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>672,
    		'parroquia'=>' SAN PEDRO DE VILCABAMBA ',
    		'cod_parr'=>'110158',
    		'cod_postal'=>'110158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>673,
    		'parroquia'=>' SANTIAGO    ',
    		'cod_parr'=>'110159',
    		'cod_postal'=>'110159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>674,
    		'parroquia'=>' TAQUIL (MIGUEL RIOFRÍO) ',
    		'cod_parr'=>'110160',
    		'cod_postal'=>'110160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>675,
    		'parroquia'=>' VILCABAMBA (VICTORIA)   ',
    		'cod_parr'=>'110161',
    		'cod_postal'=>'110161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>676,
    		'parroquia'=>' YANGANA (ARSENIO CASTILLO)  ',
    		'cod_parr'=>'110162',
    		'cod_postal'=>'110162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>677,
    		'parroquia'=>' QUINARA ',
    		'cod_parr'=>'110163',
    		'cod_postal'=>'110163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>106,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>678,
    		'parroquia'=>' CARIAMANGA  ',
    		'cod_parr'=>'110201',
    		'cod_postal'=>'110201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>679,
    		'parroquia'=>' CHILE   ',
    		'cod_parr'=>'110202',
    		'cod_postal'=>'110202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>680,
    		'parroquia'=>' SAN VICENTE ',
    		'cod_parr'=>'110203',
    		'cod_postal'=>'110203',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>681,
    		'parroquia'=>' CARIAMANGA  ',
    		'cod_parr'=>'110250',
    		'cod_postal'=>'110250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>682,
    		'parroquia'=>' COLAISACA   ',
    		'cod_parr'=>'110251',
    		'cod_postal'=>'110251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>683,
    		'parroquia'=>' EL LUCERO   ',
    		'cod_parr'=>'110252',
    		'cod_postal'=>'110252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>684,
    		'parroquia'=>' UTUANA  ',
    		'cod_parr'=>'110253',
    		'cod_postal'=>'110253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>685,
    		'parroquia'=>' SANGUILLÍN  ',
    		'cod_parr'=>'110254',
    		'cod_postal'=>'110254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>107,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>686,
    		'parroquia'=>' CATAMAYO    ',
    		'cod_parr'=>'110301',
    		'cod_postal'=>'110301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>687,
    		'parroquia'=>' SAN JOSÉ    ',
    		'cod_parr'=>'110302',
    		'cod_postal'=>'110302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>688,
    		'parroquia'=>' CATAMAYO (LA TOMA)  ',
    		'cod_parr'=>'110350',
    		'cod_postal'=>'110350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>689,
    		'parroquia'=>' EL TAMBO    ',
    		'cod_parr'=>'110351',
    		'cod_postal'=>'110351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>690,
    		'parroquia'=>' GUAYQUICHUMA    ',
    		'cod_parr'=>'110352',
    		'cod_postal'=>'110352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>691,
    		'parroquia'=>' SAN PEDRO DE LA BENDITA ',
    		'cod_parr'=>'110353',
    		'cod_postal'=>'110353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>692,
    		'parroquia'=>' ZAMBI   ',
    		'cod_parr'=>'110354',
    		'cod_postal'=>'110354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>108,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>693,
    		'parroquia'=>' CELICA  ',
    		'cod_parr'=>'110450',
    		'cod_postal'=>'110450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>694,
    		'parroquia'=>' CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)   ',
    		'cod_parr'=>'110451',
    		'cod_postal'=>'110451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>695,
    		'parroquia'=>' CHAQUINAL   ',
    		'cod_parr'=>'110452',
    		'cod_postal'=>'110452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>696,
    		'parroquia'=>' 12 DE DICIEMBRE (CAB. EN ACHIOTES)  ',
    		'cod_parr'=>'110453',
    		'cod_postal'=>'110453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>697,
    		'parroquia'=>' PINDAL (FEDERICO PÁEZ)  ',
    		'cod_parr'=>'110454',
    		'cod_postal'=>'110454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>698,
    		'parroquia'=>' POZUL (SAN JUAN DE POZUL)   ',
    		'cod_parr'=>'110455',
    		'cod_postal'=>'110455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>699,
    		'parroquia'=>' SABANILLA   ',
    		'cod_parr'=>'110456',
    		'cod_postal'=>'110456',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>700,
    		'parroquia'=>' TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA  ',
    		'cod_parr'=>'110457',
    		'cod_postal'=>'110457',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>109,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>701,
    		'parroquia'=>' CHAGUARPAMBA    ',
    		'cod_parr'=>'110550',
    		'cod_postal'=>'110550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>110,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>702,
    		'parroquia'=>' BUENAVISTA  ',
    		'cod_parr'=>'110551',
    		'cod_postal'=>'110551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>110,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>703,
    		'parroquia'=>' EL ROSARIO  ',
    		'cod_parr'=>'110552',
    		'cod_postal'=>'110552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>110,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>704,
    		'parroquia'=>' SANTA RUFINA    ',
    		'cod_parr'=>'110553',
    		'cod_postal'=>'110553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>110,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>705,
    		'parroquia'=>' AMARILLOS   ',
    		'cod_parr'=>'110554',
    		'cod_postal'=>'110554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>110,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>706,
    		'parroquia'=>' AMALUZA ',
    		'cod_parr'=>'110650',
    		'cod_postal'=>'110650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>707,
    		'parroquia'=>' BELLAVISTA  ',
    		'cod_parr'=>'110651',
    		'cod_postal'=>'110651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>708,
    		'parroquia'=>' JIMBURA ',
    		'cod_parr'=>'110652',
    		'cod_postal'=>'110652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>709,
    		'parroquia'=>' SANTA TERESITA  ',
    		'cod_parr'=>'110653',
    		'cod_postal'=>'110653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>710,
    		'parroquia'=>' 27 DE ABRIL (CAB. EN LA NARANJA)    ',
    		'cod_parr'=>'110654',
    		'cod_postal'=>'110654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>711,
    		'parroquia'=>' EL INGENIO  ',
    		'cod_parr'=>'110655',
    		'cod_postal'=>'110655',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>712,
    		'parroquia'=>' EL AIRO ',
    		'cod_parr'=>'110656',
    		'cod_postal'=>'110656',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>111,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>713,
    		'parroquia'=>' GONZANAMÁ   ',
    		'cod_parr'=>'110750',
    		'cod_postal'=>'110750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>714,
    		'parroquia'=>' CHANGAIMINA (LA LIBERTAD)   ',
    		'cod_parr'=>'110751',
    		'cod_postal'=>'110751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>715,
    		'parroquia'=>' FUNDOCHAMBA ',
    		'cod_parr'=>'110752',
    		'cod_postal'=>'110752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>716,
    		'parroquia'=>' NAMBACOLA   ',
    		'cod_parr'=>'110753',
    		'cod_postal'=>'110753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>717,
    		'parroquia'=>' PURUNUMA (EGUIGUREN)    ',
    		'cod_parr'=>'110754',
    		'cod_postal'=>'110754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>718,
    		'parroquia'=>' QUILANGA (LA PAZ)   ',
    		'cod_parr'=>'110755',
    		'cod_postal'=>'110755',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>719,
    		'parroquia'=>' SACAPALCA   ',
    		'cod_parr'=>'110756',
    		'cod_postal'=>'110756',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>720,
    		'parroquia'=>' SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)  ',
    		'cod_parr'=>'110757',
    		'cod_postal'=>'110757',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>112,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>721,
    		'parroquia'=>' GENERAL ELOY ALFARO (SAN SEBASTIÁN) ',
    		'cod_parr'=>'110801',
    		'cod_postal'=>'110801',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>722,
    		'parroquia'=>' MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)   ',
    		'cod_parr'=>'110802',
    		'cod_postal'=>'110802',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>723,
    		'parroquia'=>' MACARÁ  ',
    		'cod_parr'=>'110850',
    		'cod_postal'=>'110850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>724,
    		'parroquia'=>' LARAMA  ',
    		'cod_parr'=>'110851',
    		'cod_postal'=>'110851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>725,
    		'parroquia'=>' LA VICTORIA ',
    		'cod_parr'=>'110852',
    		'cod_postal'=>'110852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>726,
    		'parroquia'=>' SABIANGO (LA CAPILLA)   ',
    		'cod_parr'=>'110853',
    		'cod_postal'=>'110853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>113,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>727,
    		'parroquia'=>' CATACOCHA   ',
    		'cod_parr'=>'110901',
    		'cod_postal'=>'110901',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>728,
    		'parroquia'=>' LOURDES ',
    		'cod_parr'=>'110902',
    		'cod_postal'=>'110902',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>729,
    		'parroquia'=>' CATACOCHA   ',
    		'cod_parr'=>'110950',
    		'cod_postal'=>'110950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>730,
    		'parroquia'=>' CANGONAMÁ   ',
    		'cod_parr'=>'110951',
    		'cod_postal'=>'110951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>731,
    		'parroquia'=>' GUACHANAMÁ  ',
    		'cod_parr'=>'110952',
    		'cod_postal'=>'110952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>732,
    		'parroquia'=>' LA TINGUE   ',
    		'cod_parr'=>'110953',
    		'cod_postal'=>'110953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>733,
    		'parroquia'=>' LAURO GUERRERO  ',
    		'cod_parr'=>'110954',
    		'cod_postal'=>'110954',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>734,
    		'parroquia'=>' OLMEDO (SANTA BÁRBARA)  ',
    		'cod_parr'=>'110955',
    		'cod_postal'=>'110955',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>735,
    		'parroquia'=>' ORIANGA ',
    		'cod_parr'=>'110956',
    		'cod_postal'=>'110956',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>736,
    		'parroquia'=>' SAN ANTONIO ',
    		'cod_parr'=>'110957',
    		'cod_postal'=>'110957',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>737,
    		'parroquia'=>' CASANGA ',
    		'cod_parr'=>'110958',
    		'cod_postal'=>'110958',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>738,
    		'parroquia'=>' YAMANA  ',
    		'cod_parr'=>'110959',
    		'cod_postal'=>'110959',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>114,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>739,
    		'parroquia'=>' ALAMOR  ',
    		'cod_parr'=>'111050',
    		'cod_postal'=>'111050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>740,
    		'parroquia'=>' CIANO   ',
    		'cod_parr'=>'111051',
    		'cod_postal'=>'111051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>741,
    		'parroquia'=>' EL ARENAL   ',
    		'cod_parr'=>'111052',
    		'cod_postal'=>'111052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>742,
    		'parroquia'=>' EL LIMO (MARIANA DE JESÚS)  ',
    		'cod_parr'=>'111053',
    		'cod_postal'=>'111053',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>743,
    		'parroquia'=>' MERCADILLO  ',
    		'cod_parr'=>'111054',
    		'cod_postal'=>'111054',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>744,
    		'parroquia'=>' VICENTINO   ',
    		'cod_parr'=>'111055',
    		'cod_postal'=>'111055',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>115,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>745,
    		'parroquia'=>' SARAGURO    ',
    		'cod_parr'=>'111150',
    		'cod_postal'=>'111150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>746,
    		'parroquia'=>' EL PARAÍSO DE CELÉN ',
    		'cod_parr'=>'111151',
    		'cod_postal'=>'111151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>747,
    		'parroquia'=>' EL TABLÓN   ',
    		'cod_parr'=>'111152',
    		'cod_postal'=>'111152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>748,
    		'parroquia'=>' LLUZHAPA    ',
    		'cod_parr'=>'111153',
    		'cod_postal'=>'111153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>749,
    		'parroquia'=>' MANÚ    ',
    		'cod_parr'=>'111154',
    		'cod_postal'=>'111154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>750,
    		'parroquia'=>' SAN ANTONIO DE QUMBE (CUMBE)    ',
    		'cod_parr'=>'111155',
    		'cod_postal'=>'111155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>751,
    		'parroquia'=>' SAN PABLO DE TENTA  ',
    		'cod_parr'=>'111156',
    		'cod_postal'=>'111156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>752,
    		'parroquia'=>' SAN SEBASTIÁN DE YÚLUC  ',
    		'cod_parr'=>'111157',
    		'cod_postal'=>'111157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>753,
    		'parroquia'=>' SELVA ALEGRE    ',
    		'cod_parr'=>'111158',
    		'cod_postal'=>'111158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>754,
    		'parroquia'=>' URDANETA (PAQUISHAPA)   ',
    		'cod_parr'=>'111159',
    		'cod_postal'=>'111159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>755,
    		'parroquia'=>' SUMAYPAMBA  ',
    		'cod_parr'=>'111160',
    		'cod_postal'=>'111160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>116,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>756,
    		'parroquia'=>' SOZORANGA   ',
    		'cod_parr'=>'111250',
    		'cod_postal'=>'111250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>117,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>757,
    		'parroquia'=>' NUEVA FÁTIMA    ',
    		'cod_parr'=>'111251',
    		'cod_postal'=>'111251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>117,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>758,
    		'parroquia'=>' TACAMOROS   ',
    		'cod_parr'=>'111252',
    		'cod_postal'=>'111252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>117,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>759,
    		'parroquia'=>' ZAPOTILLO   ',
    		'cod_parr'=>'111350',
    		'cod_postal'=>'111350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>760,
    		'parroquia'=>' MANGAHURCO (CAZADEROS)  ',
    		'cod_parr'=>'111351',
    		'cod_postal'=>'111351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>761,
    		'parroquia'=>' GARZAREAL   ',
    		'cod_parr'=>'111352',
    		'cod_postal'=>'111352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>762,
    		'parroquia'=>' LIMONES ',
    		'cod_parr'=>'111353',
    		'cod_postal'=>'111353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>763,
    		'parroquia'=>' PALETILLAS  ',
    		'cod_parr'=>'111354',
    		'cod_postal'=>'111354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>764,
    		'parroquia'=>' BOLASPAMBA  ',
    		'cod_parr'=>'111355',
    		'cod_postal'=>'111355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>118,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>765,
    		'parroquia'=>' PINDAL  ',
    		'cod_parr'=>'111450',
    		'cod_postal'=>'111450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>119,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>766,
    		'parroquia'=>' CHAQUINAL   ',
    		'cod_parr'=>'111451',
    		'cod_postal'=>'111451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>119,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>767,
    		'parroquia'=>' 12 DE DICIEMBRE (CAB.EN ACHIOTES)   ',
    		'cod_parr'=>'111452',
    		'cod_postal'=>'111452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>119,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>768,
    		'parroquia'=>' MILAGROS    ',
    		'cod_parr'=>'111453',
    		'cod_postal'=>'111453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>119,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>769,
    		'parroquia'=>' QUILANGA    ',
    		'cod_parr'=>'111550',
    		'cod_postal'=>'111550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>120,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>770,
    		'parroquia'=>' FUNDOCHAMBA ',
    		'cod_parr'=>'111551',
    		'cod_postal'=>'111551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>120,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>771,
    		'parroquia'=>' SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)  ',
    		'cod_parr'=>'111552',
    		'cod_postal'=>'111552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>120,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>772,
    		'parroquia'=>' OLMEDO  ',
    		'cod_parr'=>'111650',
    		'cod_postal'=>'111650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>121,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>773,
    		'parroquia'=>' LA TINGUE   ',
    		'cod_parr'=>'111651',
    		'cod_postal'=>'111651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>121,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>774,
    		'parroquia'=>' CLEMENTE BAQUERIZO  ',
    		'cod_parr'=>'120101',
    		'cod_postal'=>'120101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>775,
    		'parroquia'=>' DR. CAMILO PONCE    ',
    		'cod_parr'=>'120102',
    		'cod_postal'=>'120102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>776,
    		'parroquia'=>' BARREIRO    ',
    		'cod_parr'=>'120103',
    		'cod_postal'=>'120103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>777,
    		'parroquia'=>' EL SALTO    ',
    		'cod_parr'=>'120104',
    		'cod_postal'=>'120104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>778,
    		'parroquia'=>' BABAHOYO    ',
    		'cod_parr'=>'120150',
    		'cod_postal'=>'120150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>779,
    		'parroquia'=>' BARREIRO (SANTA RITA)   ',
    		'cod_parr'=>'120151',
    		'cod_postal'=>'120151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>780,
    		'parroquia'=>' CARACOL ',
    		'cod_parr'=>'120152',
    		'cod_postal'=>'120152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>781,
    		'parroquia'=>' FEBRES CORDERO (LAS JUNTAS) ',
    		'cod_parr'=>'120153',
    		'cod_postal'=>'120153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>782,
    		'parroquia'=>' PIMOCHA ',
    		'cod_parr'=>'120154',
    		'cod_postal'=>'120154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>783,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'120155',
    		'cod_postal'=>'120155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>122,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>784,
    		'parroquia'=>' BABA    ',
    		'cod_parr'=>'120250',
    		'cod_postal'=>'120250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>123,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>785,
    		'parroquia'=>' GUARE   ',
    		'cod_parr'=>'120251',
    		'cod_postal'=>'120251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>123,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>786,
    		'parroquia'=>' ISLA DE BEJUCAL ',
    		'cod_parr'=>'120252',
    		'cod_postal'=>'120252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>123,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>787,
    		'parroquia'=>' MONTALVO    ',
    		'cod_parr'=>'120350',
    		'cod_postal'=>'120350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>124,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>788,
    		'parroquia'=>' PUEBLOVIEJO ',
    		'cod_parr'=>'120450',
    		'cod_postal'=>'120450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>125,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>789,
    		'parroquia'=>' PUERTO PECHICHE ',
    		'cod_parr'=>'120451',
    		'cod_postal'=>'120451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>125,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>790,
    		'parroquia'=>' SAN JUAN    ',
    		'cod_parr'=>'120452',
    		'cod_postal'=>'120452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>125,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>791,
    		'parroquia'=>' QUEVEDO ',
    		'cod_parr'=>'120501',
    		'cod_postal'=>'120501',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>792,
    		'parroquia'=>' SAN CAMILO  ',
    		'cod_parr'=>'120502',
    		'cod_postal'=>'120502',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>793,
    		'parroquia'=>' SAN JOSÉ    ',
    		'cod_parr'=>'120503',
    		'cod_postal'=>'120503',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>794,
    		'parroquia'=>' GUAYACÁN    ',
    		'cod_parr'=>'120504',
    		'cod_postal'=>'120504',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>795,
    		'parroquia'=>' NICOLÁS INFANTE DÍAZ    ',
    		'cod_parr'=>'120505',
    		'cod_postal'=>'120505',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>796,
    		'parroquia'=>' SAN CRISTÓBAL   ',
    		'cod_parr'=>'120506',
    		'cod_postal'=>'120506',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>797,
    		'parroquia'=>' SIETE DE OCTUBRE    ',
    		'cod_parr'=>'120507',
    		'cod_postal'=>'120507',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>798,
    		'parroquia'=>' 24 DE MAYO  ',
    		'cod_parr'=>'120508',
    		'cod_postal'=>'120508',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>799,
    		'parroquia'=>' VENUS DEL RÍO QUEVEDO   ',
    		'cod_parr'=>'120509',
    		'cod_postal'=>'120509',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>800,
    		'parroquia'=>' VIVA ALFARO ',
    		'cod_parr'=>'120510',
    		'cod_postal'=>'120510',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>801,
    		'parroquia'=>' QUEVEDO ',
    		'cod_parr'=>'120550',
    		'cod_postal'=>'120550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>802,
    		'parroquia'=>' BUENA FÉ    ',
    		'cod_parr'=>'120551',
    		'cod_postal'=>'120551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>803,
    		'parroquia'=>' MOCACHE ',
    		'cod_parr'=>'120552',
    		'cod_postal'=>'120552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>804,
    		'parroquia'=>' SAN CARLOS  ',
    		'cod_parr'=>'120553',
    		'cod_postal'=>'120553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>805,
    		'parroquia'=>' VALENCIA    ',
    		'cod_parr'=>'120554',
    		'cod_postal'=>'120554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>806,
    		'parroquia'=>' LA ESPERANZA    ',
    		'cod_parr'=>'120555',
    		'cod_postal'=>'120555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>126,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>807,
    		'parroquia'=>' CATARAMA    ',
    		'cod_parr'=>'120650',
    		'cod_postal'=>'120650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>127,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>808,
    		'parroquia'=>' RICAURTE    ',
    		'cod_parr'=>'120651',
    		'cod_postal'=>'120651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>127,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>809,
    		'parroquia'=>' 10 DE NOVIEMBRE ',
    		'cod_parr'=>'120701',
    		'cod_postal'=>'120701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>810,
    		'parroquia'=>' VENTANAS    ',
    		'cod_parr'=>'120750',
    		'cod_postal'=>'120750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>811,
    		'parroquia'=>' QUINSALOMA  ',
    		'cod_parr'=>'120751',
    		'cod_postal'=>'120751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>812,
    		'parroquia'=>' ZAPOTAL ',
    		'cod_parr'=>'120752',
    		'cod_postal'=>'120752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>813,
    		'parroquia'=>' CHACARITA   ',
    		'cod_parr'=>'120753',
    		'cod_postal'=>'120753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>814,
    		'parroquia'=>' LOS ÁNGELES ',
    		'cod_parr'=>'120754',
    		'cod_postal'=>'120754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>128,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>815,
    		'parroquia'=>' VINCES  ',
    		'cod_parr'=>'120850',
    		'cod_postal'=>'120850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>129,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>816,
    		'parroquia'=>' ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)    ',
    		'cod_parr'=>'120851',
    		'cod_postal'=>'120851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>129,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>817,
    		'parroquia'=>' PALENQUE    ',
    		'cod_parr'=>'120852',
    		'cod_postal'=>'120852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>129,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>818,
    		'parroquia'=>' PALENQUE    ',
    		'cod_parr'=>'120950',
    		'cod_postal'=>'120950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>130,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>819,
    		'parroquia'=>' SAN JACINTO DE BUENA FÉ ',
    		'cod_parr'=>'121001',
    		'cod_postal'=>'121001',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>131,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>820,
    		'parroquia'=>' 7 DE AGOSTO ',
    		'cod_parr'=>'121002',
    		'cod_postal'=>'121002',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>131,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>821,
    		'parroquia'=>' 11 DE OCTUBRE   ',
    		'cod_parr'=>'121003',
    		'cod_postal'=>'121003',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>131,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>822,
    		'parroquia'=>' SAN JACINTO DE BUENA FÉ ',
    		'cod_parr'=>'121050',
    		'cod_postal'=>'121050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>131,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>823,
    		'parroquia'=>' PATRICIA PILAR  ',
    		'cod_parr'=>'121051',
    		'cod_postal'=>'121051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>131,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>824,
    		'parroquia'=>' VALENCIA    ',
    		'cod_parr'=>'121150',
    		'cod_postal'=>'121150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>132,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>825,
    		'parroquia'=>' MOCACHE ',
    		'cod_parr'=>'121250',
    		'cod_postal'=>'121250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>133,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>826,
    		'parroquia'=>' QUINSALOMA  ',
    		'cod_parr'=>'121350',
    		'cod_postal'=>'121350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>134,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>827,
    		'parroquia'=>' PORTOVIEJO  ',
    		'cod_parr'=>'130101',
    		'cod_postal'=>'130101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>828,
    		'parroquia'=>' 12 DE MARZO ',
    		'cod_parr'=>'130102',
    		'cod_postal'=>'130102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>829,
    		'parroquia'=>' COLÓN   ',
    		'cod_parr'=>'130103',
    		'cod_postal'=>'130103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>830,
    		'parroquia'=>' PICOAZÁ ',
    		'cod_parr'=>'130104',
    		'cod_postal'=>'130104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>831,
    		'parroquia'=>' SAN PABLO   ',
    		'cod_parr'=>'130105',
    		'cod_postal'=>'130105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>832,
    		'parroquia'=>' ANDRÉS DE VERA  ',
    		'cod_parr'=>'130106',
    		'cod_postal'=>'130106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>833,
    		'parroquia'=>' FRANCISCO PACHECO   ',
    		'cod_parr'=>'130107',
    		'cod_postal'=>'130107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>834,
    		'parroquia'=>' 18 DE OCTUBRE   ',
    		'cod_parr'=>'130108',
    		'cod_postal'=>'130108',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>835,
    		'parroquia'=>' SIMÓN BOLÍVAR   ',
    		'cod_parr'=>'130109',
    		'cod_postal'=>'130109',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>836,
    		'parroquia'=>' PORTOVIEJO  ',
    		'cod_parr'=>'130150',
    		'cod_postal'=>'130150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>837,
    		'parroquia'=>' ABDÓN CALDERÓN (SAN FRANCISCO)  ',
    		'cod_parr'=>'130151',
    		'cod_postal'=>'130151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>838,
    		'parroquia'=>' ALHAJUELA (BAJO GRANDE) ',
    		'cod_parr'=>'130152',
    		'cod_postal'=>'130152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>839,
    		'parroquia'=>' CRUCITA ',
    		'cod_parr'=>'130153',
    		'cod_postal'=>'130153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>840,
    		'parroquia'=>' PUEBLO NUEVO    ',
    		'cod_parr'=>'130154',
    		'cod_postal'=>'130154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>841,
    		'parroquia'=>' RIOCHICO (RÍO CHICO)    ',
    		'cod_parr'=>'130155',
    		'cod_postal'=>'130155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>842,
    		'parroquia'=>' SAN PLÁCIDO ',
    		'cod_parr'=>'130156',
    		'cod_postal'=>'130156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>843,
    		'parroquia'=>' CHIRIJOS    ',
    		'cod_parr'=>'130157',
    		'cod_postal'=>'130157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>135,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>844,
    		'parroquia'=>' CALCETA ',
    		'cod_parr'=>'130250',
    		'cod_postal'=>'130250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>136,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>845,
    		'parroquia'=>' MEMBRILLO   ',
    		'cod_parr'=>'130251',
    		'cod_postal'=>'130251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>136,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>846,
    		'parroquia'=>' QUIROGA ',
    		'cod_parr'=>'130252',
    		'cod_postal'=>'130252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>136,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>847,
    		'parroquia'=>' CHONE   ',
    		'cod_parr'=>'130301',
    		'cod_postal'=>'130301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>848,
    		'parroquia'=>' SANTA RITA  ',
    		'cod_parr'=>'130302',
    		'cod_postal'=>'130302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>849,
    		'parroquia'=>' CHONE   ',
    		'cod_parr'=>'130350',
    		'cod_postal'=>'130350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>850,
    		'parroquia'=>' BOYACÁ  ',
    		'cod_parr'=>'130351',
    		'cod_postal'=>'130351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>851,
    		'parroquia'=>' CANUTO  ',
    		'cod_parr'=>'130352',
    		'cod_postal'=>'130352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>852,
    		'parroquia'=>' CONVENTO    ',
    		'cod_parr'=>'130353',
    		'cod_postal'=>'130353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>853,
    		'parroquia'=>' CHIBUNGA    ',
    		'cod_parr'=>'130354',
    		'cod_postal'=>'130354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>854,
    		'parroquia'=>' ELOY ALFARO ',
    		'cod_parr'=>'130355',
    		'cod_postal'=>'130355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>855,
    		'parroquia'=>' RICAURTE    ',
    		'cod_parr'=>'130356',
    		'cod_postal'=>'130356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>856,
    		'parroquia'=>' SAN ANTONIO ',
    		'cod_parr'=>'130357',
    		'cod_postal'=>'130357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>137,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>857,
    		'parroquia'=>' EL CARMEN   ',
    		'cod_parr'=>'130401',
    		'cod_postal'=>'130401',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>138,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>858,
    		'parroquia'=>' 4 DE DICIEMBRE  ',
    		'cod_parr'=>'130402',
    		'cod_postal'=>'130402',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>138,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>859,
    		'parroquia'=>' EL CARMEN   ',
    		'cod_parr'=>'130450',
    		'cod_postal'=>'130450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>138,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>860,
    		'parroquia'=>' WILFRIDO LOOR MOREIRA (MAICITO) ',
    		'cod_parr'=>'130451',
    		'cod_postal'=>'130451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>138,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>861,
    		'parroquia'=>' SAN PEDRO DE SUMA   ',
    		'cod_parr'=>'130452',
    		'cod_postal'=>'130452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>138,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>862,
    		'parroquia'=>' FLAVIO ALFARO   ',
    		'cod_parr'=>'130550',
    		'cod_postal'=>'130550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>139,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>863,
    		'parroquia'=>' SAN FRANCISCO DE NOVILLO (CAB. EN   ',
    		'cod_parr'=>'130551',
    		'cod_postal'=>'130551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>139,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>864,
    		'parroquia'=>' ZAPALLO ',
    		'cod_parr'=>'130552',
    		'cod_postal'=>'130552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>139,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>865,
    		'parroquia'=>' DR. MIGUEL MORÁN LUCIO  ',
    		'cod_parr'=>'130601',
    		'cod_postal'=>'130601',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>866,
    		'parroquia'=>' MANUEL INOCENCIO PARRALES Y GUALE   ',
    		'cod_parr'=>'130602',
    		'cod_postal'=>'130602',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>867,
    		'parroquia'=>' SAN LORENZO DE JIPIJAPA ',
    		'cod_parr'=>'130603',
    		'cod_postal'=>'130603',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>868,
    		'parroquia'=>' JIPIJAPA    ',
    		'cod_parr'=>'130650',
    		'cod_postal'=>'130650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>869,
    		'parroquia'=>' AMÉRICA ',
    		'cod_parr'=>'130651',
    		'cod_postal'=>'130651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>870,
    		'parroquia'=>' EL ANEGADO (CAB. EN ELOY ALFARO)    ',
    		'cod_parr'=>'130652',
    		'cod_postal'=>'130652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>871,
    		'parroquia'=>' JULCUY  ',
    		'cod_parr'=>'130653',
    		'cod_postal'=>'130653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>872,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'130654',
    		'cod_postal'=>'130654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>873,
    		'parroquia'=>' MACHALILLA  ',
    		'cod_parr'=>'130655',
    		'cod_postal'=>'130655',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>874,
    		'parroquia'=>' MEMBRILLAL  ',
    		'cod_parr'=>'130656',
    		'cod_postal'=>'130656',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>875,
    		'parroquia'=>' PEDRO PABLO GÓMEZ   ',
    		'cod_parr'=>'130657',
    		'cod_postal'=>'130657',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>876,
    		'parroquia'=>' PUERTO DE CAYO  ',
    		'cod_parr'=>'130658',
    		'cod_postal'=>'130658',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>877,
    		'parroquia'=>' PUERTO LÓPEZ    ',
    		'cod_parr'=>'130659',
    		'cod_postal'=>'130659',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>140,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>878,
    		'parroquia'=>' JUNÍN   ',
    		'cod_parr'=>'130750',
    		'cod_postal'=>'130750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>141,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>879,
    		'parroquia'=>' LOS ESTEROS ',
    		'cod_parr'=>'130801',
    		'cod_postal'=>'130801',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>880,
    		'parroquia'=>' MANTA   ',
    		'cod_parr'=>'130802',
    		'cod_postal'=>'130802',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>881,
    		'parroquia'=>' SAN MATEO   ',
    		'cod_parr'=>'130803',
    		'cod_postal'=>'130803',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>882,
    		'parroquia'=>' TARQUI  ',
    		'cod_parr'=>'130804',
    		'cod_postal'=>'130804',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>883,
    		'parroquia'=>' ELOY ALFARO ',
    		'cod_parr'=>'130805',
    		'cod_postal'=>'130805',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>884,
    		'parroquia'=>' MANTA   ',
    		'cod_parr'=>'130850',
    		'cod_postal'=>'130850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>885,
    		'parroquia'=>' SAN LORENZO ',
    		'cod_parr'=>'130851',
    		'cod_postal'=>'130851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>886,
    		'parroquia'=>' SANTA MARIANITA (BOCA DE PACOCHE)   ',
    		'cod_parr'=>'130852',
    		'cod_postal'=>'130852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>142,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>887,
    		'parroquia'=>' ANIBAL SAN ANDRÉS   ',
    		'cod_parr'=>'130901',
    		'cod_postal'=>'130901',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>888,
    		'parroquia'=>' MONTECRISTI ',
    		'cod_parr'=>'130902',
    		'cod_postal'=>'130902',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>889,
    		'parroquia'=>' EL COLORADO ',
    		'cod_parr'=>'130903',
    		'cod_postal'=>'130903',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>890,
    		'parroquia'=>' GENERAL ELOY ALFARO ',
    		'cod_parr'=>'130904',
    		'cod_postal'=>'130904',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>891,
    		'parroquia'=>' LEONIDAS PROAÑO ',
    		'cod_parr'=>'130905',
    		'cod_postal'=>'130905',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>892,
    		'parroquia'=>' MONTECRISTI ',
    		'cod_parr'=>'130950',
    		'cod_postal'=>'130950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>893,
    		'parroquia'=>' JARAMIJÓ    ',
    		'cod_parr'=>'130951',
    		'cod_postal'=>'130951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>894,
    		'parroquia'=>' LA PILA ',
    		'cod_parr'=>'130952',
    		'cod_postal'=>'130952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>143,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>895,
    		'parroquia'=>' PAJÁN   ',
    		'cod_parr'=>'131050',
    		'cod_postal'=>'131050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>144,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>896,
    		'parroquia'=>' CAMPOZANO (LA PALMA DE PAJÁN)   ',
    		'cod_parr'=>'131051',
    		'cod_postal'=>'131051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>144,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>897,
    		'parroquia'=>' CASCOL  ',
    		'cod_parr'=>'131052',
    		'cod_postal'=>'131052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>144,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>898,
    		'parroquia'=>' GUALE   ',
    		'cod_parr'=>'131053',
    		'cod_postal'=>'131053',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>144,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>899,
    		'parroquia'=>' LASCANO ',
    		'cod_parr'=>'131054',
    		'cod_postal'=>'131054',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>144,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>900,
    		'parroquia'=>' PICHINCHA   ',
    		'cod_parr'=>'131150',
    		'cod_postal'=>'131150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>145,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>901,
    		'parroquia'=>' BARRAGANETE ',
    		'cod_parr'=>'131151',
    		'cod_postal'=>'131151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>145,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>902,
    		'parroquia'=>' SAN SEBASTIÁN   ',
    		'cod_parr'=>'131152',
    		'cod_postal'=>'131152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>145,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>903,
    		'parroquia'=>' ROCAFUERTE  ',
    		'cod_parr'=>'131250',
    		'cod_postal'=>'131250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>146,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>904,
    		'parroquia'=>' SANTA ANA   ',
    		'cod_parr'=>'131301',
    		'cod_postal'=>'131301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>905,
    		'parroquia'=>' LODANA  ',
    		'cod_parr'=>'131302',
    		'cod_postal'=>'131302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>906,
    		'parroquia'=>' SANTA ANA DE VUELTA LARGA   ',
    		'cod_parr'=>'131350',
    		'cod_postal'=>'131350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>907,
    		'parroquia'=>' AYACUCHO    ',
    		'cod_parr'=>'131351',
    		'cod_postal'=>'131351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>908,
    		'parroquia'=>' HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)  ',
    		'cod_parr'=>'131352',
    		'cod_postal'=>'131352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>909,
    		'parroquia'=>' LA UNIÓN    ',
    		'cod_parr'=>'131353',
    		'cod_postal'=>'131353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>910,
    		'parroquia'=>' OLMEDO  ',
    		'cod_parr'=>'131354',
    		'cod_postal'=>'131354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>911,
    		'parroquia'=>' SAN PABLO (CAB. EN PUEBLO NUEVO)    ',
    		'cod_parr'=>'131355',
    		'cod_postal'=>'131355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>147,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>912,
    		'parroquia'=>' BAHÍA DE CARÁQUEZ   ',
    		'cod_parr'=>'131401',
    		'cod_postal'=>'131401',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>913,
    		'parroquia'=>' LEONIDAS PLAZA GUTIÉRREZ    ',
    		'cod_parr'=>'131402',
    		'cod_postal'=>'131402',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>914,
    		'parroquia'=>' BAHÍA DE CARÁQUEZ   ',
    		'cod_parr'=>'131450',
    		'cod_postal'=>'131450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>915,
    		'parroquia'=>' CANOA   ',
    		'cod_parr'=>'131451',
    		'cod_postal'=>'131451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>916,
    		'parroquia'=>' COJIMÍES    ',
    		'cod_parr'=>'131452',
    		'cod_postal'=>'131452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>917,
    		'parroquia'=>' CHARAPOTÓ   ',
    		'cod_parr'=>'131453',
    		'cod_postal'=>'131453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>918,
    		'parroquia'=>' 10 DE AGOSTO    ',
    		'cod_parr'=>'131454',
    		'cod_postal'=>'131454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>919,
    		'parroquia'=>' JAMA    ',
    		'cod_parr'=>'131455',
    		'cod_postal'=>'131455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>920,
    		'parroquia'=>' PEDERNALES  ',
    		'cod_parr'=>'131456',
    		'cod_postal'=>'131456',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>921,
    		'parroquia'=>' SAN ISIDRO  ',
    		'cod_parr'=>'131457',
    		'cod_postal'=>'131457',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>922,
    		'parroquia'=>' SAN VICENTE ',
    		'cod_parr'=>'131458',
    		'cod_postal'=>'131458',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>148,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>923,
    		'parroquia'=>' TOSAGUA ',
    		'cod_parr'=>'131550',
    		'cod_postal'=>'131550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>149,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>924,
    		'parroquia'=>' BACHILLERO  ',
    		'cod_parr'=>'131551',
    		'cod_postal'=>'131551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>149,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>925,
    		'parroquia'=>' ANGEL PEDRO GILER (LA ESTANCILLA)   ',
    		'cod_parr'=>'131552',
    		'cod_postal'=>'131552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>149,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>926,
    		'parroquia'=>' SUCRE   ',
    		'cod_parr'=>'131650',
    		'cod_postal'=>'131650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>150,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>927,
    		'parroquia'=>' BELLAVISTA  ',
    		'cod_parr'=>'131651',
    		'cod_postal'=>'131651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>150,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>928,
    		'parroquia'=>' NOBOA   ',
    		'cod_parr'=>'131652',
    		'cod_postal'=>'131652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>150,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>929,
    		'parroquia'=>' ARQ. SIXTO DURÁN BALLÉN ',
    		'cod_parr'=>'131653',
    		'cod_postal'=>'131653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>150,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>930,
    		'parroquia'=>' PEDERNALES  ',
    		'cod_parr'=>'131750',
    		'cod_postal'=>'131750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>151,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>931,
    		'parroquia'=>' COJIMÍES    ',
    		'cod_parr'=>'131751',
    		'cod_postal'=>'131751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>151,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>932,
    		'parroquia'=>' 10 DE AGOSTO    ',
    		'cod_parr'=>'131752',
    		'cod_postal'=>'131752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>151,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>933,
    		'parroquia'=>' ATAHUALPA   ',
    		'cod_parr'=>'131753',
    		'cod_postal'=>'131753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>151,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>934,
    		'parroquia'=>' OLMEDO  ',
    		'cod_parr'=>'131850',
    		'cod_postal'=>'131850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>152,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>935,
    		'parroquia'=>' PUERTO LÓPEZ    ',
    		'cod_parr'=>'131950',
    		'cod_postal'=>'131950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>153,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>936,
    		'parroquia'=>' MACHALILLA  ',
    		'cod_parr'=>'131951',
    		'cod_postal'=>'131951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>153,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>937,
    		'parroquia'=>' SALANGO ',
    		'cod_parr'=>'131952',
    		'cod_postal'=>'131952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>153,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>938,
    		'parroquia'=>' JAMA    ',
    		'cod_parr'=>'132050',
    		'cod_postal'=>'132050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>154,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>939,
    		'parroquia'=>' JARAMIJÓ    ',
    		'cod_parr'=>'132150',
    		'cod_postal'=>'132150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>155,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>940,
    		'parroquia'=>' SAN VICENTE ',
    		'cod_parr'=>'132250',
    		'cod_postal'=>'132250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>156,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>941,
    		'parroquia'=>' CANOA   ',
    		'cod_parr'=>'132251',
    		'cod_postal'=>'132251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>156,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>942,
    		'parroquia'=>' MACAS   ',
    		'cod_parr'=>'140150',
    		'cod_postal'=>'140150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>943,
    		'parroquia'=>' ALSHI (CAB. EN 9 DE OCTUBRE)    ',
    		'cod_parr'=>'140151',
    		'cod_postal'=>'140151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>944,
    		'parroquia'=>' CHIGUAZA    ',
    		'cod_parr'=>'140152',
    		'cod_postal'=>'140152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>945,
    		'parroquia'=>' GENERAL PROAÑO  ',
    		'cod_parr'=>'140153',
    		'cod_postal'=>'140153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>946,
    		'parroquia'=>' HUASAGA (CAB.EN WAMPUIK)    ',
    		'cod_parr'=>'140154',
    		'cod_postal'=>'140154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>947,
    		'parroquia'=>' MACUMA  ',
    		'cod_parr'=>'140155',
    		'cod_postal'=>'140155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>948,
    		'parroquia'=>' SAN ISIDRO  ',
    		'cod_parr'=>'140156',
    		'cod_postal'=>'140156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>949,
    		'parroquia'=>' SEVILLA DON BOSCO   ',
    		'cod_parr'=>'140157',
    		'cod_postal'=>'140157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>950,
    		'parroquia'=>' SINAÍ   ',
    		'cod_parr'=>'140158',
    		'cod_postal'=>'140158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>951,
    		'parroquia'=>' TAISHA  ',
    		'cod_parr'=>'140159',
    		'cod_postal'=>'140159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>952,
    		'parroquia'=>' ZUÑA (ZÚÑAC)    ',
    		'cod_parr'=>'140160',
    		'cod_postal'=>'140160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>953,
    		'parroquia'=>' TUUTINENTZA ',
    		'cod_parr'=>'140161',
    		'cod_postal'=>'140161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>954,
    		'parroquia'=>' CUCHAENTZA  ',
    		'cod_parr'=>'140162',
    		'cod_postal'=>'140162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>955,
    		'parroquia'=>' SAN JOSÉ DE MORONA  ',
    		'cod_parr'=>'140163',
    		'cod_postal'=>'140163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>956,
    		'parroquia'=>' RÍO BLANCO  ',
    		'cod_parr'=>'140164',
    		'cod_postal'=>'140164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>157,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>957,
    		'parroquia'=>' GUALAQUIZA  ',
    		'cod_parr'=>'140201',
    		'cod_postal'=>'140201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>958,
    		'parroquia'=>' MERCEDES MOLINA ',
    		'cod_parr'=>'140202',
    		'cod_postal'=>'140202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>959,
    		'parroquia'=>' GUALAQUIZA  ',
    		'cod_parr'=>'140250',
    		'cod_postal'=>'140250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>960,
    		'parroquia'=>' AMAZONAS (ROSARIO DE CUYES) ',
    		'cod_parr'=>'140251',
    		'cod_postal'=>'140251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>961,
    		'parroquia'=>' BERMEJOS    ',
    		'cod_parr'=>'140252',
    		'cod_postal'=>'140252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>962,
    		'parroquia'=>' BOMBOIZA    ',
    		'cod_parr'=>'140253',
    		'cod_postal'=>'140253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>963,
    		'parroquia'=>' CHIGÜINDA   ',
    		'cod_parr'=>'140254',
    		'cod_postal'=>'140254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>964,
    		'parroquia'=>' EL ROSARIO  ',
    		'cod_parr'=>'140255',
    		'cod_postal'=>'140255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>965,
    		'parroquia'=>' NUEVA TARQUI    ',
    		'cod_parr'=>'140256',
    		'cod_postal'=>'140256',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>966,
    		'parroquia'=>' SAN MIGUEL DE CUYES ',
    		'cod_parr'=>'140257',
    		'cod_postal'=>'140257',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>967,
    		'parroquia'=>' EL IDEAL    ',
    		'cod_parr'=>'140258',
    		'cod_postal'=>'140258',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>158,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>968,
    		'parroquia'=>' GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)    ',
    		'cod_parr'=>'140350',
    		'cod_postal'=>'140350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>969,
    		'parroquia'=>' INDANZA ',
    		'cod_parr'=>'140351',
    		'cod_postal'=>'140351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>970,
    		'parroquia'=>' PAN DE AZÚCAR   ',
    		'cod_parr'=>'140352',
    		'cod_postal'=>'140352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>971,
    		'parroquia'=>' SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO ',
    		'cod_parr'=>'140353',
    		'cod_postal'=>'140353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>972,
    		'parroquia'=>' SAN CARLOS DE LIMÓN (SAN CARLOS DEL ',
    		'cod_parr'=>'140354',
    		'cod_postal'=>'140354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>973,
    		'parroquia'=>' SAN JUAN BOSCO  ',
    		'cod_parr'=>'140355',
    		'cod_postal'=>'140355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>974,
    		'parroquia'=>' SAN MIGUEL DE CONCHAY   ',
    		'cod_parr'=>'140356',
    		'cod_postal'=>'140356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>975,
    		'parroquia'=>' SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA) ',
    		'cod_parr'=>'140357',
    		'cod_postal'=>'140357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>976,
    		'parroquia'=>' YUNGANZA (CAB. EN EL ROSARIO)   ',
    		'cod_parr'=>'140358',
    		'cod_postal'=>'140358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>159,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>977,
    		'parroquia'=>' PALORA (METZERA)    ',
    		'cod_parr'=>'140450',
    		'cod_postal'=>'140450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>160,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>978,
    		'parroquia'=>' ARAPICOS    ',
    		'cod_parr'=>'140451',
    		'cod_postal'=>'140451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>160,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>979,
    		'parroquia'=>' CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)  ',
    		'cod_parr'=>'140452',
    		'cod_postal'=>'140452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>160,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>980,
    		'parroquia'=>' HUAMBOYA    ',
    		'cod_parr'=>'140453',
    		'cod_postal'=>'140453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>160,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>981,
    		'parroquia'=>' SANGAY (CAB. EN NAYAMANACA) ',
    		'cod_parr'=>'140454',
    		'cod_postal'=>'140454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>160,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>982,
    		'parroquia'=>' SANTIAGO DE MÉNDEZ  ',
    		'cod_parr'=>'140550',
    		'cod_postal'=>'140550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>983,
    		'parroquia'=>' COPAL   ',
    		'cod_parr'=>'140551',
    		'cod_postal'=>'140551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>984,
    		'parroquia'=>' CHUPIANZA   ',
    		'cod_parr'=>'140552',
    		'cod_postal'=>'140552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>985,
    		'parroquia'=>' PATUCA  ',
    		'cod_parr'=>'140553',
    		'cod_postal'=>'140553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>986,
    		'parroquia'=>' SAN LUIS DE EL ACHO (CAB. EN EL ACHO)   ',
    		'cod_parr'=>'140554',
    		'cod_postal'=>'140554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>987,
    		'parroquia'=>' SANTIAGO    ',
    		'cod_parr'=>'140555',
    		'cod_postal'=>'140555',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>988,
    		'parroquia'=>' TAYUZA  ',
    		'cod_parr'=>'140556',
    		'cod_postal'=>'140556',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>989,
    		'parroquia'=>' SAN FRANCISCO DE CHINIMBIMI ',
    		'cod_parr'=>'140557',
    		'cod_postal'=>'140557',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>161,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>990,
    		'parroquia'=>' SUCÚA   ',
    		'cod_parr'=>'140650',
    		'cod_postal'=>'140650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>991,
    		'parroquia'=>' ASUNCIÓN    ',
    		'cod_parr'=>'140651',
    		'cod_postal'=>'140651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>992,
    		'parroquia'=>' HUAMBI  ',
    		'cod_parr'=>'140652',
    		'cod_postal'=>'140652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>993,
    		'parroquia'=>' LOGROÑO ',
    		'cod_parr'=>'140653',
    		'cod_postal'=>'140653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>994,
    		'parroquia'=>' YAUPI   ',
    		'cod_parr'=>'140654',
    		'cod_postal'=>'140654',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>995,
    		'parroquia'=>' SANTA MARIANITA DE JESÚS    ',
    		'cod_parr'=>'140655',
    		'cod_postal'=>'140655',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>162,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>996,
    		'parroquia'=>' HUAMBOYA    ',
    		'cod_parr'=>'140750',
    		'cod_postal'=>'140750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>163,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>997,
    		'parroquia'=>' CHIGUAZA    ',
    		'cod_parr'=>'140751',
    		'cod_postal'=>'140751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>163,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>998,
    		'parroquia'=>' PABLO SEXTO ',
    		'cod_parr'=>'140752',
    		'cod_postal'=>'140752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>163,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>999,
    		'parroquia'=>' SAN JUAN BOSCO  ',
    		'cod_parr'=>'140850',
    		'cod_postal'=>'140850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>164,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1000,
    		'parroquia'=>'    PAN DE AZÚCAR   ',
    		'cod_parr'=>'140851',
    		'cod_postal'=>'140851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>164,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1001,
    		'parroquia'=>'    SAN CARLOS DE LIMÓN ',
    		'cod_parr'=>'140852',
    		'cod_postal'=>'140852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>164,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1002,
    		'parroquia'=>'    SAN JACINTO DE WAKAMBEIS    ',
    		'cod_parr'=>'140853',
    		'cod_postal'=>'140853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>164,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1003,
    		'parroquia'=>'    SANTIAGO DE PANANZA ',
    		'cod_parr'=>'140854',
    		'cod_postal'=>'140854',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>164,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1004,
    		'parroquia'=>'    TAISHA  ',
    		'cod_parr'=>'140950',
    		'cod_postal'=>'140950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>165,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1005,
    		'parroquia'=>'    HUASAGA (CAB. EN WAMPUIK)   ',
    		'cod_parr'=>'140951',
    		'cod_postal'=>'140951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>165,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1006,
    		'parroquia'=>'    MACUMA  ',
    		'cod_parr'=>'140952',
    		'cod_postal'=>'140952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>165,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1007,
    		'parroquia'=>'    TUUTINENTZA ',
    		'cod_parr'=>'140953',
    		'cod_postal'=>'140953',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>165,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1008,
    		'parroquia'=>'    PUMPUENTSA  ',
    		'cod_parr'=>'140954',
    		'cod_postal'=>'140954',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>165,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1009,
    		'parroquia'=>'    LOGROÑO ',
    		'cod_parr'=>'141050',
    		'cod_postal'=>'141050',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>166,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1010,
    		'parroquia'=>'    YAUPI   ',
    		'cod_parr'=>'141051',
    		'cod_postal'=>'141051',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>166,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1011,
    		'parroquia'=>'    SHIMPIS ',
    		'cod_parr'=>'141052',
    		'cod_postal'=>'141052',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>166,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1012,
    		'parroquia'=>'    PABLO SEXTO ',
    		'cod_parr'=>'141150',
    		'cod_postal'=>'141150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>167,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1013,
    		'parroquia'=>'    SANTIAGO    ',
    		'cod_parr'=>'141250',
    		'cod_postal'=>'141250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>168,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1014,
    		'parroquia'=>'    SAN JOSÉ DE MORONA  ',
    		'cod_parr'=>'141251',
    		'cod_postal'=>'141251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>168,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1015,
    		'parroquia'=>'    TENA    ',
    		'cod_parr'=>'150150',
    		'cod_postal'=>'150150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1016,
    		'parroquia'=>'    AHUANO  ',
    		'cod_parr'=>'150151',
    		'cod_postal'=>'150151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1017,
    		'parroquia'=>'    CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)    ',
    		'cod_parr'=>'150152',
    		'cod_postal'=>'150152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1018,
    		'parroquia'=>'    CHONTAPUNTA ',
    		'cod_parr'=>'150153',
    		'cod_postal'=>'150153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1019,
    		'parroquia'=>'    PANO    ',
    		'cod_parr'=>'150154',
    		'cod_postal'=>'150154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1020,
    		'parroquia'=>'    PUERTO MISAHUALLI   ',
    		'cod_parr'=>'150155',
    		'cod_postal'=>'150155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1021,
    		'parroquia'=>'    PUERTO NAPO ',
    		'cod_parr'=>'150156',
    		'cod_postal'=>'150156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1022,
    		'parroquia'=>'    TÁLAG   ',
    		'cod_parr'=>'150157',
    		'cod_postal'=>'150157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1023,
    		'parroquia'=>'    SAN JUAN DE MUYUNA  ',
    		'cod_parr'=>'150158',
    		'cod_postal'=>'150158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>169,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1024,
    		'parroquia'=>'    ARCHIDONA   ',
    		'cod_parr'=>'150350',
    		'cod_postal'=>'150350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1025,
    		'parroquia'=>'    AVILA   ',
    		'cod_parr'=>'150351',
    		'cod_postal'=>'150351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1026,
    		'parroquia'=>'    COTUNDO ',
    		'cod_parr'=>'150352',
    		'cod_postal'=>'150352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1027,
    		'parroquia'=>'    LORETO  ',
    		'cod_parr'=>'150353',
    		'cod_postal'=>'150353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1028,
    		'parroquia'=>'    SAN PABLO DE USHPAYACU  ',
    		'cod_parr'=>'150354',
    		'cod_postal'=>'150354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1029,
    		'parroquia'=>'    PUERTO MURIALDO ',
    		'cod_parr'=>'150355',
    		'cod_postal'=>'150355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>170,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1030,
    		'parroquia'=>'    EL CHACO    ',
    		'cod_parr'=>'150450',
    		'cod_postal'=>'150450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1031,
    		'parroquia'=>'    GONZALO DíAZ DE PINEDA (EL BOMBÓN)  ',
    		'cod_parr'=>'150451',
    		'cod_postal'=>'150451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1032,
    		'parroquia'=>'    LINARES ',
    		'cod_parr'=>'150452',
    		'cod_postal'=>'150452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1033,
    		'parroquia'=>'    OYACACHI    ',
    		'cod_parr'=>'150453',
    		'cod_postal'=>'150453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1034,
    		'parroquia'=>'    SANTA ROSA  ',
    		'cod_parr'=>'150454',
    		'cod_postal'=>'150454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1035,
    		'parroquia'=>'    SARDINAS    ',
    		'cod_parr'=>'150455',
    		'cod_postal'=>'150455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>171,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1036,
    		'parroquia'=>'    BAEZA   ',
    		'cod_parr'=>'150750',
    		'cod_postal'=>'150750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1037,
    		'parroquia'=>'    COSANGA ',
    		'cod_parr'=>'150751',
    		'cod_postal'=>'150751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1038,
    		'parroquia'=>'    CUYUJA  ',
    		'cod_parr'=>'150752',
    		'cod_postal'=>'150752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1039,
    		'parroquia'=>'    PAPALLACTA  ',
    		'cod_parr'=>'150753',
    		'cod_postal'=>'150753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1040,
    		'parroquia'=>'    SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)    ',
    		'cod_parr'=>'150754',
    		'cod_postal'=>'150754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1041,
    		'parroquia'=>'    SAN JOSÉ DEL PAYAMINO   ',
    		'cod_parr'=>'150755',
    		'cod_postal'=>'150755',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1042,
    		'parroquia'=>'    SUMACO  ',
    		'cod_parr'=>'150756',
    		'cod_postal'=>'150756',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>172,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1043,
    		'parroquia'=>'    CARLOS JULIO AROSEMENA TOLA ',
    		'cod_parr'=>'150950',
    		'cod_postal'=>'150950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>173,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1044,
    		'parroquia'=>'    PUYO    ',
    		'cod_parr'=>'160150',
    		'cod_postal'=>'160150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1045,
    		'parroquia'=>'    ARAJUNO ',
    		'cod_parr'=>'160151',
    		'cod_postal'=>'160151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1046,
    		'parroquia'=>'    CANELOS ',
    		'cod_parr'=>'160152',
    		'cod_postal'=>'160152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1047,
    		'parroquia'=>'    CURARAY ',
    		'cod_parr'=>'160153',
    		'cod_postal'=>'160153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1048,
    		'parroquia'=>'    DIEZ DE AGOSTO  ',
    		'cod_parr'=>'160154',
    		'cod_postal'=>'160154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1049,
    		'parroquia'=>'    FÁTIMA  ',
    		'cod_parr'=>'160155',
    		'cod_postal'=>'160155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1050,
    		'parroquia'=>'    MONTALVO (ANDOAS)   ',
    		'cod_parr'=>'160156',
    		'cod_postal'=>'160156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1051,
    		'parroquia'=>'    POMONA  ',
    		'cod_parr'=>'160157',
    		'cod_postal'=>'160157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1052,
    		'parroquia'=>'    RÍO CORRIENTES  ',
    		'cod_parr'=>'160158',
    		'cod_postal'=>'160158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1053,
    		'parroquia'=>'    RÍO TIGRE   ',
    		'cod_parr'=>'160159',
    		'cod_postal'=>'160159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1054,
    		'parroquia'=>'    SANTA CLARA ',
    		'cod_parr'=>'160160',
    		'cod_postal'=>'160160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1055,
    		'parroquia'=>'    SARAYACU    ',
    		'cod_parr'=>'160161',
    		'cod_postal'=>'160161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1056,
    		'parroquia'=>'    SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA) ',
    		'cod_parr'=>'160162',
    		'cod_postal'=>'160162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1057,
    		'parroquia'=>'    TARQUI  ',
    		'cod_parr'=>'160163',
    		'cod_postal'=>'160163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1058,
    		'parroquia'=>'    TENIENTE HUGO ORTIZ ',
    		'cod_parr'=>'160164',
    		'cod_postal'=>'160164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1059,
    		'parroquia'=>'    VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)    ',
    		'cod_parr'=>'160165',
    		'cod_postal'=>'160165',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1060,
    		'parroquia'=>'    EL TRIUNFO  ',
    		'cod_parr'=>'160166',
    		'cod_postal'=>'160166',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>174,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1061,
    		'parroquia'=>'    MERA    ',
    		'cod_parr'=>'160250',
    		'cod_postal'=>'160250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>175,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1062,
    		'parroquia'=>'    MADRE TIERRA    ',
    		'cod_parr'=>'160251',
    		'cod_postal'=>'160251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>175,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1063,
    		'parroquia'=>'    SHELL   ',
    		'cod_parr'=>'160252',
    		'cod_postal'=>'160252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>175,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1064,
    		'parroquia'=>'    SANTA CLARA ',
    		'cod_parr'=>'160350',
    		'cod_postal'=>'160350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>176,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1065,
    		'parroquia'=>'    SAN JOSÉ    ',
    		'cod_parr'=>'160351',
    		'cod_postal'=>'160351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>176,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1066,
    		'parroquia'=>'    ARAJUNO ',
    		'cod_parr'=>'160450',
    		'cod_postal'=>'160450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>177,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1067,
    		'parroquia'=>'    CURARAY ',
    		'cod_parr'=>'160451',
    		'cod_postal'=>'160451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>177,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1068,
    		'parroquia'=>'    BELISARIO QUEVEDO   ',
    		'cod_parr'=>'170101',
    		'cod_postal'=>'170101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1069,
    		'parroquia'=>'    CARCELÉN    ',
    		'cod_parr'=>'170102',
    		'cod_postal'=>'170102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1070,
    		'parroquia'=>'    CENTRO HISTÓRICO    ',
    		'cod_parr'=>'170103',
    		'cod_postal'=>'170103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1071,
    		'parroquia'=>'    COCHAPAMBA  ',
    		'cod_parr'=>'170104',
    		'cod_postal'=>'170104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1072,
    		'parroquia'=>'    COMITÉ DEL PUEBLO   ',
    		'cod_parr'=>'170105',
    		'cod_postal'=>'170105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1073,
    		'parroquia'=>'    COTOCOLLAO  ',
    		'cod_parr'=>'170106',
    		'cod_postal'=>'170106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1074,
    		'parroquia'=>'    CHILIBULO   ',
    		'cod_parr'=>'170107',
    		'cod_postal'=>'170107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1075,
    		'parroquia'=>'    CHILLOGALLO ',
    		'cod_parr'=>'170108',
    		'cod_postal'=>'170108',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1076,
    		'parroquia'=>'    CHIMBACALLE ',
    		'cod_parr'=>'170109',
    		'cod_postal'=>'170109',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1077,
    		'parroquia'=>'    EL CONDADO  ',
    		'cod_parr'=>'170110',
    		'cod_postal'=>'170110',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1078,
    		'parroquia'=>'    GUAMANÍ ',
    		'cod_parr'=>'170111',
    		'cod_postal'=>'170111',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1079,
    		'parroquia'=>'    IÑAQUITO    ',
    		'cod_parr'=>'170112',
    		'cod_postal'=>'170112',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1080,
    		'parroquia'=>'    ITCHIMBÍA   ',
    		'cod_parr'=>'170113',
    		'cod_postal'=>'170113',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1081,
    		'parroquia'=>'    JIPIJAPA    ',
    		'cod_parr'=>'170114',
    		'cod_postal'=>'170114',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1082,
    		'parroquia'=>'    KENNEDY ',
    		'cod_parr'=>'170115',
    		'cod_postal'=>'170115',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1083,
    		'parroquia'=>'    LA ARGELIA  ',
    		'cod_parr'=>'170116',
    		'cod_postal'=>'170116',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1084,
    		'parroquia'=>'    LA CONCEPCIÓN   ',
    		'cod_parr'=>'170117',
    		'cod_postal'=>'170117',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1085,
    		'parroquia'=>'    LA ECUATORIANA  ',
    		'cod_parr'=>'170118',
    		'cod_postal'=>'170118',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1086,
    		'parroquia'=>'    LA FERROVIARIA  ',
    		'cod_parr'=>'170119',
    		'cod_postal'=>'170119',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1087,
    		'parroquia'=>'    LA LIBERTAD ',
    		'cod_parr'=>'170120',
    		'cod_postal'=>'170120',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1088,
    		'parroquia'=>'    LA MAGDALENA    ',
    		'cod_parr'=>'170121',
    		'cod_postal'=>'170121',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1089,
    		'parroquia'=>'    LA MENA ',
    		'cod_parr'=>'170122',
    		'cod_postal'=>'170122',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1090,
    		'parroquia'=>'    MARISCAL SUCRE  ',
    		'cod_parr'=>'170123',
    		'cod_postal'=>'170123',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1091,
    		'parroquia'=>'    PONCEANO    ',
    		'cod_parr'=>'170124',
    		'cod_postal'=>'170124',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1092,
    		'parroquia'=>'    PUENGASÍ    ',
    		'cod_parr'=>'170125',
    		'cod_postal'=>'170125',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1093,
    		'parroquia'=>'    QUITUMBE    ',
    		'cod_parr'=>'170126',
    		'cod_postal'=>'170126',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1094,
    		'parroquia'=>'    RUMIPAMBA   ',
    		'cod_parr'=>'170127',
    		'cod_postal'=>'170127',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1095,
    		'parroquia'=>'    SAN BARTOLO ',
    		'cod_parr'=>'170128',
    		'cod_postal'=>'170128',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1096,
    		'parroquia'=>'    SAN ISIDRO DEL INCA ',
    		'cod_parr'=>'170129',
    		'cod_postal'=>'170129',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1097,
    		'parroquia'=>'    SAN JUAN    ',
    		'cod_parr'=>'170130',
    		'cod_postal'=>'170130',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1098,
    		'parroquia'=>'    SOLANDA ',
    		'cod_parr'=>'170131',
    		'cod_postal'=>'170131',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1099,
    		'parroquia'=>'    TURUBAMBA   ',
    		'cod_parr'=>'170132',
    		'cod_postal'=>'170132',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1100,
    		'parroquia'=>'    QUITO DISTRITO METROPOLITANO    ',
    		'cod_parr'=>'170150',
    		'cod_postal'=>'170150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1101,
    		'parroquia'=>'    ALANGASÍ    ',
    		'cod_parr'=>'170151',
    		'cod_postal'=>'170151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1102,
    		'parroquia'=>'    AMAGUAÑA    ',
    		'cod_parr'=>'170152',
    		'cod_postal'=>'170152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1103,
    		'parroquia'=>'    ATAHUALPA   ',
    		'cod_parr'=>'170153',
    		'cod_postal'=>'170153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1104,
    		'parroquia'=>'    CALACALÍ    ',
    		'cod_parr'=>'170154',
    		'cod_postal'=>'170154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1105,
    		'parroquia'=>'    CALDERÓN    ',
    		'cod_parr'=>'170155',
    		'cod_postal'=>'170155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1106,
    		'parroquia'=>'    CONOCOTO    ',
    		'cod_parr'=>'170156',
    		'cod_postal'=>'170156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1107,
    		'parroquia'=>'    CUMBAYÁ ',
    		'cod_parr'=>'170157',
    		'cod_postal'=>'170157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1108,
    		'parroquia'=>'    CHAVEZPAMBA ',
    		'cod_parr'=>'170158',
    		'cod_postal'=>'170158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1109,
    		'parroquia'=>'    CHECA   ',
    		'cod_parr'=>'170159',
    		'cod_postal'=>'170159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1110,
    		'parroquia'=>'    EL QUINCHE  ',
    		'cod_parr'=>'170160',
    		'cod_postal'=>'170160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1111,
    		'parroquia'=>'    GUALEA  ',
    		'cod_parr'=>'170161',
    		'cod_postal'=>'170161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1112,
    		'parroquia'=>'    GUANGOPOLO  ',
    		'cod_parr'=>'170162',
    		'cod_postal'=>'170162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1113,
    		'parroquia'=>'    GUAYLLABAMBA    ',
    		'cod_parr'=>'170163',
    		'cod_postal'=>'170163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1114,
    		'parroquia'=>'    LA MERCED   ',
    		'cod_parr'=>'170164',
    		'cod_postal'=>'170164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1115,
    		'parroquia'=>'    LLANO CHICO ',
    		'cod_parr'=>'170165',
    		'cod_postal'=>'170165',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1116,
    		'parroquia'=>'    LLOA    ',
    		'cod_parr'=>'170166',
    		'cod_postal'=>'170166',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1117,
    		'parroquia'=>'    MINDO   ',
    		'cod_parr'=>'170167',
    		'cod_postal'=>'170167',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1118,
    		'parroquia'=>'    NANEGAL ',
    		'cod_parr'=>'170168',
    		'cod_postal'=>'170168',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1119,
    		'parroquia'=>'    NANEGALITO  ',
    		'cod_parr'=>'170169',
    		'cod_postal'=>'170169',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1120,
    		'parroquia'=>'    NAYÓN   ',
    		'cod_parr'=>'170170',
    		'cod_postal'=>'170170',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1121,
    		'parroquia'=>'    NONO    ',
    		'cod_parr'=>'170171',
    		'cod_postal'=>'170171',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1122,
    		'parroquia'=>'    PACTO   ',
    		'cod_parr'=>'170172',
    		'cod_postal'=>'170172',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1123,
    		'parroquia'=>'    PEDRO VICENTE MALDONADO ',
    		'cod_parr'=>'170173',
    		'cod_postal'=>'170173',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1124,
    		'parroquia'=>'    PERUCHO ',
    		'cod_parr'=>'170174',
    		'cod_postal'=>'170174',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1125,
    		'parroquia'=>'    PIFO    ',
    		'cod_parr'=>'170175',
    		'cod_postal'=>'170175',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1126,
    		'parroquia'=>'    PÍNTAG  ',
    		'cod_parr'=>'170176',
    		'cod_postal'=>'170176',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1127,
    		'parroquia'=>'    POMASQUI    ',
    		'cod_parr'=>'170177',
    		'cod_postal'=>'170177',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1128,
    		'parroquia'=>'    PUÉLLARO    ',
    		'cod_parr'=>'170178',
    		'cod_postal'=>'170178',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1129,
    		'parroquia'=>'    PUEMBO  ',
    		'cod_parr'=>'170179',
    		'cod_postal'=>'170179',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1130,
    		'parroquia'=>'    SAN ANTONIO ',
    		'cod_parr'=>'170180',
    		'cod_postal'=>'170180',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1131,
    		'parroquia'=>'    SAN JOSÉ DE MINAS   ',
    		'cod_parr'=>'170181',
    		'cod_postal'=>'170181',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1132,
    		'parroquia'=>'    SAN MIGUEL DE LOS BANCOS    ',
    		'cod_parr'=>'170182',
    		'cod_postal'=>'170182',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1133,
    		'parroquia'=>'    TABABELA    ',
    		'cod_parr'=>'170183',
    		'cod_postal'=>'170183',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1134,
    		'parroquia'=>'    TUMBACO ',
    		'cod_parr'=>'170184',
    		'cod_postal'=>'170184',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1135,
    		'parroquia'=>'    YARUQUÍ ',
    		'cod_parr'=>'170185',
    		'cod_postal'=>'170185',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1136,
    		'parroquia'=>'    ZAMBIZA ',
    		'cod_parr'=>'170186',
    		'cod_postal'=>'170186',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1137,
    		'parroquia'=>'    PUERTO QUITO    ',
    		'cod_parr'=>'170187',
    		'cod_postal'=>'170187',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>178,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1138,
    		'parroquia'=>'    AYORA   ',
    		'cod_parr'=>'170201',
    		'cod_postal'=>'170201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1139,
    		'parroquia'=>'    CAYAMBE ',
    		'cod_parr'=>'170202',
    		'cod_postal'=>'170202',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1140,
    		'parroquia'=>'    JUAN MONTALVO   ',
    		'cod_parr'=>'170203',
    		'cod_postal'=>'170203',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1141,
    		'parroquia'=>'    CAYAMBE ',
    		'cod_parr'=>'170250',
    		'cod_postal'=>'170250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1142,
    		'parroquia'=>'    ASCÁZUBI    ',
    		'cod_parr'=>'170251',
    		'cod_postal'=>'170251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1143,
    		'parroquia'=>'    CANGAHUA    ',
    		'cod_parr'=>'170252',
    		'cod_postal'=>'170252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1144,
    		'parroquia'=>'    OLMEDO (PESILLO)    ',
    		'cod_parr'=>'170253',
    		'cod_postal'=>'170253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1145,
    		'parroquia'=>'    OTÓN    ',
    		'cod_parr'=>'170254',
    		'cod_postal'=>'170254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1146,
    		'parroquia'=>'    SANTA ROSA DE CUZUBAMBA ',
    		'cod_parr'=>'170255',
    		'cod_postal'=>'170255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>179,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1147,
    		'parroquia'=>'    MACHACHI    ',
    		'cod_parr'=>'170350',
    		'cod_postal'=>'170350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1148,
    		'parroquia'=>'    ALÓAG   ',
    		'cod_parr'=>'170351',
    		'cod_postal'=>'170351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1149,
    		'parroquia'=>'    ALOASÍ  ',
    		'cod_parr'=>'170352',
    		'cod_postal'=>'170352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1150,
    		'parroquia'=>'    CUTUGLAHUA  ',
    		'cod_parr'=>'170353',
    		'cod_postal'=>'170353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1151,
    		'parroquia'=>'    EL CHAUPI   ',
    		'cod_parr'=>'170354',
    		'cod_postal'=>'170354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1152,
    		'parroquia'=>'    MANUEL CORNEJO ASTORGA (TANDAPI)    ',
    		'cod_parr'=>'170355',
    		'cod_postal'=>'170355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1153,
    		'parroquia'=>'    TAMBILLO    ',
    		'cod_parr'=>'170356',
    		'cod_postal'=>'170356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1154,
    		'parroquia'=>'    UYUMBICHO   ',
    		'cod_parr'=>'170357',
    		'cod_postal'=>'170357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>180,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1155,
    		'parroquia'=>'    TABACUNDO   ',
    		'cod_parr'=>'170450',
    		'cod_postal'=>'170450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>181,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1156,
    		'parroquia'=>'    LA ESPERANZA    ',
    		'cod_parr'=>'170451',
    		'cod_postal'=>'170451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>181,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1157,
    		'parroquia'=>'    MALCHINGUÍ  ',
    		'cod_parr'=>'170452',
    		'cod_postal'=>'170452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>181,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1158,
    		'parroquia'=>'    TOCACHI ',
    		'cod_parr'=>'170453',
    		'cod_postal'=>'170453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>181,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1159,
    		'parroquia'=>'    TUPIGACHI   ',
    		'cod_parr'=>'170454',
    		'cod_postal'=>'170454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>181,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1160,
    		'parroquia'=>'    SANGOLQUÍ   ',
    		'cod_parr'=>'170501',
    		'cod_postal'=>'170501',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1161,
    		'parroquia'=>'    SAN PEDRO DE TABOADA    ',
    		'cod_parr'=>'170502',
    		'cod_postal'=>'170502',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1162,
    		'parroquia'=>'    SAN RAFAEL  ',
    		'cod_parr'=>'170503',
    		'cod_postal'=>'170503',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1163,
    		'parroquia'=>'    SANGOLQUI   ',
    		'cod_parr'=>'170550',
    		'cod_postal'=>'170550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1164,
    		'parroquia'=>'    COTOGCHOA   ',
    		'cod_parr'=>'170551',
    		'cod_postal'=>'170551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1165,
    		'parroquia'=>'    RUMIPAMBA   ',
    		'cod_parr'=>'170552',
    		'cod_postal'=>'170552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>182,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1166,
    		'parroquia'=>'    SAN MIGUEL DE LOS BANCOS    ',
    		'cod_parr'=>'170750',
    		'cod_postal'=>'170750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>183,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1167,
    		'parroquia'=>'    MINDO   ',
    		'cod_parr'=>'170751',
    		'cod_postal'=>'170751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>183,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1168,
    		'parroquia'=>'    PEDRO VICENTE MALDONADO ',
    		'cod_parr'=>'170752',
    		'cod_postal'=>'170752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>183,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1169,
    		'parroquia'=>'    PUERTO QUITO    ',
    		'cod_parr'=>'170753',
    		'cod_postal'=>'170753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>183,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1170,
    		'parroquia'=>'    PEDRO VICENTE MALDONADO ',
    		'cod_parr'=>'170850',
    		'cod_postal'=>'170850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>183,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1171,
    		'parroquia'=>'    PUERTO QUITO    ',
    		'cod_parr'=>'170950',
    		'cod_postal'=>'170950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>184,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1172,
    		'parroquia'=>'    ATOCHA – FICOA  ',
    		'cod_parr'=>'180101',
    		'cod_postal'=>'180101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1173,
    		'parroquia'=>'    CELIANO MONGE   ',
    		'cod_parr'=>'180102',
    		'cod_postal'=>'180102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1174,
    		'parroquia'=>'    HUACHI CHICO    ',
    		'cod_parr'=>'180103',
    		'cod_postal'=>'180103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1175,
    		'parroquia'=>'    HUACHI LORETO   ',
    		'cod_parr'=>'180104',
    		'cod_postal'=>'180104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1176,
    		'parroquia'=>'    LA MERCED   ',
    		'cod_parr'=>'180105',
    		'cod_postal'=>'180105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1177,
    		'parroquia'=>'    LA PENÍNSULA    ',
    		'cod_parr'=>'180106',
    		'cod_postal'=>'180106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1178,
    		'parroquia'=>'    MATRIZ  ',
    		'cod_parr'=>'180107',
    		'cod_postal'=>'180107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1179,
    		'parroquia'=>'    PISHILATA   ',
    		'cod_parr'=>'180108',
    		'cod_postal'=>'180108',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1180,
    		'parroquia'=>'    SAN FRANCISCO   ',
    		'cod_parr'=>'180109',
    		'cod_postal'=>'180109',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1181,
    		'parroquia'=>'    AMBATO  ',
    		'cod_parr'=>'180150',
    		'cod_postal'=>'180150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1182,
    		'parroquia'=>'    AMBATILLO   ',
    		'cod_parr'=>'180151',
    		'cod_postal'=>'180151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1183,
    		'parroquia'=>'    ATAHUALPA (CHISALATA)   ',
    		'cod_parr'=>'180152',
    		'cod_postal'=>'180152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1184,
    		'parroquia'=>'    AUGUSTO N. MARTÍNEZ (MUNDUGLEO) ',
    		'cod_parr'=>'180153',
    		'cod_postal'=>'180153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1185,
    		'parroquia'=>'    CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)  ',
    		'cod_parr'=>'180154',
    		'cod_postal'=>'180154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1186,
    		'parroquia'=>'    HUACHI GRANDE   ',
    		'cod_parr'=>'180155',
    		'cod_postal'=>'180155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1187,
    		'parroquia'=>'    IZAMBA  ',
    		'cod_parr'=>'180156',
    		'cod_postal'=>'180156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1188,
    		'parroquia'=>'    JUAN BENIGNO VELA   ',
    		'cod_parr'=>'180157',
    		'cod_postal'=>'180157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1189,
    		'parroquia'=>'    MONTALVO    ',
    		'cod_parr'=>'180158',
    		'cod_postal'=>'180158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1190,
    		'parroquia'=>'    PASA    ',
    		'cod_parr'=>'180159',
    		'cod_postal'=>'180159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1191,
    		'parroquia'=>'    PICAIGUA    ',
    		'cod_parr'=>'180160',
    		'cod_postal'=>'180160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1192,
    		'parroquia'=>'    PILAGÜÍN (PILAHÜÍN) ',
    		'cod_parr'=>'180161',
    		'cod_postal'=>'180161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1193,
    		'parroquia'=>'    QUISAPINCHA (QUIZAPINCHA)   ',
    		'cod_parr'=>'180162',
    		'cod_postal'=>'180162',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1194,
    		'parroquia'=>'    SAN BARTOLOMÉ DE PINLLOG    ',
    		'cod_parr'=>'180163',
    		'cod_postal'=>'180163',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1195,
    		'parroquia'=>'    SAN FERNANDO (PASA SAN FERNANDO)    ',
    		'cod_parr'=>'180164',
    		'cod_postal'=>'180164',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1196,
    		'parroquia'=>'    SANTA ROSA  ',
    		'cod_parr'=>'180165',
    		'cod_postal'=>'180165',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1197,
    		'parroquia'=>'    TOTORAS ',
    		'cod_parr'=>'180166',
    		'cod_postal'=>'180166',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1198,
    		'parroquia'=>'    CUNCHIBAMBA ',
    		'cod_parr'=>'180167',
    		'cod_postal'=>'180167',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1199,
    		'parroquia'=>'    UNAMUNCHO   ',
    		'cod_parr'=>'180168',
    		'cod_postal'=>'180168',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>185,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1200,
    		'parroquia'=>'    BAÑOS DE AGUA SANTA ',
    		'cod_parr'=>'180250',
    		'cod_postal'=>'180250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>186,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1201,
    		'parroquia'=>'    LLIGUA  ',
    		'cod_parr'=>'180251',
    		'cod_postal'=>'180251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>186,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1202,
    		'parroquia'=>'    RÍO NEGRO   ',
    		'cod_parr'=>'180252',
    		'cod_postal'=>'180252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>186,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1203,
    		'parroquia'=>'    RÍO VERDE   ',
    		'cod_parr'=>'180253',
    		'cod_postal'=>'180253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>186,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1204,
    		'parroquia'=>'    ULBA    ',
    		'cod_parr'=>'180254',
    		'cod_postal'=>'180254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>186,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1205,
    		'parroquia'=>'    CEVALLOS    ',
    		'cod_parr'=>'180350',
    		'cod_postal'=>'180350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>187,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1206,
    		'parroquia'=>'    MOCHA   ',
    		'cod_parr'=>'180450',
    		'cod_postal'=>'180450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>188,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1207,
    		'parroquia'=>'    PINGUILÍ    ',
    		'cod_parr'=>'180451',
    		'cod_postal'=>'180451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>188,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1208,
    		'parroquia'=>'    PATATE  ',
    		'cod_parr'=>'180550',
    		'cod_postal'=>'180550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>189,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1209,
    		'parroquia'=>'    EL TRIUNFO  ',
    		'cod_parr'=>'180551',
    		'cod_postal'=>'180551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>189,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1210,
    		'parroquia'=>'    LOS ANDES (CAB. EN POATUG)  ',
    		'cod_parr'=>'180552',
    		'cod_postal'=>'180552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>189,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1211,
    		'parroquia'=>'    SUCRE (CAB. EN SUCRE-PATATE URCU)   ',
    		'cod_parr'=>'180553',
    		'cod_postal'=>'180553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>189,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1212,
    		'parroquia'=>'    QUERO   ',
    		'cod_parr'=>'180650',
    		'cod_postal'=>'180650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>190,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1213,
    		'parroquia'=>'    RUMIPAMBA   ',
    		'cod_parr'=>'180651',
    		'cod_postal'=>'180651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>190,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1214,
    		'parroquia'=>'    YANAYACU - MOCHAPATA (CAB. EN YANAYACU) ',
    		'cod_parr'=>'180652',
    		'cod_postal'=>'180652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>190,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1215,
    		'parroquia'=>'    PELILEO ',
    		'cod_parr'=>'180701',
    		'cod_postal'=>'180701',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1216,
    		'parroquia'=>'    PELILEO GRANDE  ',
    		'cod_parr'=>'180702',
    		'cod_postal'=>'180702',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1217,
    		'parroquia'=>'    PELILEO ',
    		'cod_parr'=>'180750',
    		'cod_postal'=>'180750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1218,
    		'parroquia'=>'    BENÍTEZ (PACHANLICA)    ',
    		'cod_parr'=>'180751',
    		'cod_postal'=>'180751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1219,
    		'parroquia'=>'    BOLÍVAR ',
    		'cod_parr'=>'180752',
    		'cod_postal'=>'180752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1220,
    		'parroquia'=>'    COTALÓ  ',
    		'cod_parr'=>'180753',
    		'cod_postal'=>'180753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1221,
    		'parroquia'=>'    CHIQUICHA (CAB. EN CHIQUICHA GRANDE)    ',
    		'cod_parr'=>'180754',
    		'cod_postal'=>'180754',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1222,
    		'parroquia'=>'    EL ROSARIO (RUMICHACA)  ',
    		'cod_parr'=>'180755',
    		'cod_postal'=>'180755',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1223,
    		'parroquia'=>'    GARCÍA MORENO (CHUMAQUI)    ',
    		'cod_parr'=>'180756',
    		'cod_postal'=>'180756',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1224,
    		'parroquia'=>'    GUAMBALÓ (HUAMBALÓ) ',
    		'cod_parr'=>'180757',
    		'cod_postal'=>'180757',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1225,
    		'parroquia'=>'    SALASACA    ',
    		'cod_parr'=>'180758',
    		'cod_postal'=>'180758',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>191,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1226,
    		'parroquia'=>'    CIUDAD NUEVA    ',
    		'cod_parr'=>'180801',
    		'cod_postal'=>'180801',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1227,
    		'parroquia'=>'    PÍLLARO ',
    		'cod_parr'=>'180802',
    		'cod_postal'=>'180802',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1228,
    		'parroquia'=>'    PÍLLARO ',
    		'cod_parr'=>'180850',
    		'cod_postal'=>'180850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1229,
    		'parroquia'=>'    BAQUERIZO MORENO    ',
    		'cod_parr'=>'180851',
    		'cod_postal'=>'180851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1230,
    		'parroquia'=>'    EMILIO MARÍA TERÁN (RUMIPAMBA)  ',
    		'cod_parr'=>'180852',
    		'cod_postal'=>'180852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1231,
    		'parroquia'=>'    MARCOS ESPINEL (CHACATA)    ',
    		'cod_parr'=>'180853',
    		'cod_postal'=>'180853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1232,
    		'parroquia'=>'    PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)   ',
    		'cod_parr'=>'180854',
    		'cod_postal'=>'180854',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1233,
    		'parroquia'=>'    SAN ANDRÉS  ',
    		'cod_parr'=>'180855',
    		'cod_postal'=>'180855',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1234,
    		'parroquia'=>'    SAN JOSÉ DE POALÓ   ',
    		'cod_parr'=>'180856',
    		'cod_postal'=>'180856',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1235,
    		'parroquia'=>'    SAN MIGUELITO   ',
    		'cod_parr'=>'180857',
    		'cod_postal'=>'180857',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>192,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1236,
    		'parroquia'=>'    TISALEO ',
    		'cod_parr'=>'180950',
    		'cod_postal'=>'180950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>193,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1237,
    		'parroquia'=>'    QUINCHICOTO ',
    		'cod_parr'=>'180951',
    		'cod_postal'=>'180951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>193,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1238,
    		'parroquia'=>'    EL LIMÓN    ',
    		'cod_parr'=>'190101',
    		'cod_postal'=>'190101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1239,
    		'parroquia'=>'    ZAMORA  ',
    		'cod_parr'=>'190102',
    		'cod_postal'=>'190102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1240,
    		'parroquia'=>'    ZAMORA  ',
    		'cod_parr'=>'190150',
    		'cod_postal'=>'190150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1241,
    		'parroquia'=>'    CUMBARATZA  ',
    		'cod_parr'=>'190151',
    		'cod_postal'=>'190151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1242,
    		'parroquia'=>'    GUADALUPE   ',
    		'cod_parr'=>'190152',
    		'cod_postal'=>'190152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1243,
    		'parroquia'=>'    IMBANA (LA VICTORIA DE IMBANA)  ',
    		'cod_parr'=>'190153',
    		'cod_postal'=>'190153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1244,
    		'parroquia'=>'    PAQUISHA    ',
    		'cod_parr'=>'190154',
    		'cod_postal'=>'190154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1245,
    		'parroquia'=>'    SABANILLA   ',
    		'cod_parr'=>'190155',
    		'cod_postal'=>'190155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1246,
    		'parroquia'=>'    TIMBARA ',
    		'cod_parr'=>'190156',
    		'cod_postal'=>'190156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1247,
    		'parroquia'=>'    ZUMBI   ',
    		'cod_parr'=>'190157',
    		'cod_postal'=>'190157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1248,
    		'parroquia'=>'    SAN CARLOS DE LAS MINAS ',
    		'cod_parr'=>'190158',
    		'cod_postal'=>'190158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>194,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1249,
    		'parroquia'=>'    ZUMBA   ',
    		'cod_parr'=>'190250',
    		'cod_postal'=>'190250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1250,
    		'parroquia'=>'    CHITO   ',
    		'cod_parr'=>'190251',
    		'cod_postal'=>'190251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1251,
    		'parroquia'=>'    EL CHORRO   ',
    		'cod_parr'=>'190252',
    		'cod_postal'=>'190252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1252,
    		'parroquia'=>'    EL PORVENIR DEL CARMEN  ',
    		'cod_parr'=>'190253',
    		'cod_postal'=>'190253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1253,
    		'parroquia'=>'    LA CHONTA   ',
    		'cod_parr'=>'190254',
    		'cod_postal'=>'190254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1254,
    		'parroquia'=>'    PALANDA ',
    		'cod_parr'=>'190255',
    		'cod_postal'=>'190255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1255,
    		'parroquia'=>'    PUCAPAMBA   ',
    		'cod_parr'=>'190256',
    		'cod_postal'=>'190256',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1256,
    		'parroquia'=>'    SAN FRANCISCO DEL VERGEL    ',
    		'cod_parr'=>'190257',
    		'cod_postal'=>'190257',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1257,
    		'parroquia'=>'    VALLADOLID  ',
    		'cod_parr'=>'190258',
    		'cod_postal'=>'190258',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1258,
    		'parroquia'=>'    SAN ANDRÉS  ',
    		'cod_parr'=>'190259',
    		'cod_postal'=>'190259',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>195,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1259,
    		'parroquia'=>'    GUAYZIMI    ',
    		'cod_parr'=>'190350',
    		'cod_postal'=>'190350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>196,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1260,
    		'parroquia'=>'    ZURMI   ',
    		'cod_parr'=>'190351',
    		'cod_postal'=>'190351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>196,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1261,
    		'parroquia'=>'    NUEVO PARAÍSO   ',
    		'cod_parr'=>'190352',
    		'cod_postal'=>'190352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>196,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1262,
    		'parroquia'=>'    28 DE MAYO (SAN JOSÉ DE YACUAMBI)   ',
    		'cod_parr'=>'190450',
    		'cod_postal'=>'190450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>197,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1263,
    		'parroquia'=>'    LA PAZ  ',
    		'cod_parr'=>'190451',
    		'cod_postal'=>'190451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>197,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1264,
    		'parroquia'=>'    TUTUPALI    ',
    		'cod_parr'=>'190452',
    		'cod_postal'=>'190452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>197,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1265,
    		'parroquia'=>'    YANTZAZA (YANZATZA) ',
    		'cod_parr'=>'190550',
    		'cod_postal'=>'190550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>198,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1266,
    		'parroquia'=>'    CHICAÑA ',
    		'cod_parr'=>'190551',
    		'cod_postal'=>'190551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>198,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1267,
    		'parroquia'=>'    EL PANGUI   ',
    		'cod_parr'=>'190552',
    		'cod_postal'=>'190552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>198,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1268,
    		'parroquia'=>'    LOS ENCUENTROS  ',
    		'cod_parr'=>'190553',
    		'cod_postal'=>'190553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>198,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1269,
    		'parroquia'=>'    EL PANGUI   ',
    		'cod_parr'=>'190650',
    		'cod_postal'=>'190650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>199,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1270,
    		'parroquia'=>'    EL GUISME   ',
    		'cod_parr'=>'190651',
    		'cod_postal'=>'190651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>199,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1271,
    		'parroquia'=>'    PACHICUTZA  ',
    		'cod_parr'=>'190652',
    		'cod_postal'=>'190652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>199,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1272,
    		'parroquia'=>'    TUNDAYME    ',
    		'cod_parr'=>'190653',
    		'cod_postal'=>'190653',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>199,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1273,
    		'parroquia'=>'    ZUMBI   ',
    		'cod_parr'=>'190750',
    		'cod_postal'=>'190750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>200,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1274,
    		'parroquia'=>'    PAQUISHA    ',
    		'cod_parr'=>'190751',
    		'cod_postal'=>'190751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>200,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1275,
    		'parroquia'=>'    TRIUNFO-DORADO  ',
    		'cod_parr'=>'190752',
    		'cod_postal'=>'190752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>200,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1276,
    		'parroquia'=>'    PANGUINTZA  ',
    		'cod_parr'=>'190753',
    		'cod_postal'=>'190753',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>200,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1277,
    		'parroquia'=>'    PALANDA ',
    		'cod_parr'=>'190850',
    		'cod_postal'=>'190850',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>201,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1278,
    		'parroquia'=>'    EL PORVENIR DEL CARMEN  ',
    		'cod_parr'=>'190851',
    		'cod_postal'=>'190851',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>201,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1279,
    		'parroquia'=>'    SAN FRANCISCO DEL VERGEL    ',
    		'cod_parr'=>'190852',
    		'cod_postal'=>'190852',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>201,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1280,
    		'parroquia'=>'    VALLADOLID  ',
    		'cod_parr'=>'190853',
    		'cod_postal'=>'190853',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>201,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1281,
    		'parroquia'=>'    LA CANELA   ',
    		'cod_parr'=>'190854',
    		'cod_postal'=>'190854',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>201,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1282,
    		'parroquia'=>'    PAQUISHA    ',
    		'cod_parr'=>'190950',
    		'cod_postal'=>'190950',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>202,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1283,
    		'parroquia'=>'    BELLAVISTA  ',
    		'cod_parr'=>'190951',
    		'cod_postal'=>'190951',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>202,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1284,
    		'parroquia'=>'    NUEVO QUITO ',
    		'cod_parr'=>'190952',
    		'cod_postal'=>'190952',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>202,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1285,
    		'parroquia'=>'    PUERTO BAQUERIZO MORENO ',
    		'cod_parr'=>'200150',
    		'cod_postal'=>'200150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>203,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1286,
    		'parroquia'=>'    EL PROGRESO ',
    		'cod_parr'=>'200151',
    		'cod_postal'=>'200151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>203,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1287,
    		'parroquia'=>'    ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)   ',
    		'cod_parr'=>'200152',
    		'cod_postal'=>'200152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>203,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1288,
    		'parroquia'=>'    PUERTO VILLAMIL ',
    		'cod_parr'=>'200250',
    		'cod_postal'=>'200250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>204,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1289,
    		'parroquia'=>'    TOMÁS DE BERLANGA (SANTO TOMÁS) ',
    		'cod_parr'=>'200251',
    		'cod_postal'=>'200251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>204,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1290,
    		'parroquia'=>'    PUERTO AYORA    ',
    		'cod_parr'=>'200350',
    		'cod_postal'=>'200350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>205,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1291,
    		'parroquia'=>'    BELLAVISTA  ',
    		'cod_parr'=>'200351',
    		'cod_postal'=>'200351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>205,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1292,
    		'parroquia'=>'    SANTA ROSA (INCLUYE LA ISLA BALTRA) ',
    		'cod_parr'=>'200352',
    		'cod_postal'=>'200352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>205,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1293,
    		'parroquia'=>'    NUEVA LOJA  ',
    		'cod_parr'=>'210150',
    		'cod_postal'=>'210150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1294,
    		'parroquia'=>'    CUYABENO    ',
    		'cod_parr'=>'210151',
    		'cod_postal'=>'210151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1295,
    		'parroquia'=>'    DURENO  ',
    		'cod_parr'=>'210152',
    		'cod_postal'=>'210152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1296,
    		'parroquia'=>'    GENERAL FARFÁN  ',
    		'cod_parr'=>'210153',
    		'cod_postal'=>'210153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1297,
    		'parroquia'=>'    TARAPOA ',
    		'cod_parr'=>'210154',
    		'cod_postal'=>'210154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1298,
    		'parroquia'=>'    EL ENO  ',
    		'cod_parr'=>'210155',
    		'cod_postal'=>'210155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1299,
    		'parroquia'=>'    PACAYACU    ',
    		'cod_parr'=>'210156',
    		'cod_postal'=>'210156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1300,
    		'parroquia'=>'    JAMBELÍ ',
    		'cod_parr'=>'210157',
    		'cod_postal'=>'210157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1301,
    		'parroquia'=>'    SANTA CECILIA   ',
    		'cod_parr'=>'210158',
    		'cod_postal'=>'210158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1302,
    		'parroquia'=>'    AGUAS NEGRAS    ',
    		'cod_parr'=>'210159',
    		'cod_postal'=>'210159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>206,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1303,
    		'parroquia'=>'    EL DORADO DE CASCALES   ',
    		'cod_parr'=>'210250',
    		'cod_postal'=>'210250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1304,
    		'parroquia'=>'    EL REVENTADOR   ',
    		'cod_parr'=>'210251',
    		'cod_postal'=>'210251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1305,
    		'parroquia'=>'    GONZALO PIZARRO ',
    		'cod_parr'=>'210252',
    		'cod_postal'=>'210252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1306,
    		'parroquia'=>'    LUMBAQUÍ    ',
    		'cod_parr'=>'210253',
    		'cod_postal'=>'210253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1307,
    		'parroquia'=>'    PUERTO LIBRE    ',
    		'cod_parr'=>'210254',
    		'cod_postal'=>'210254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1308,
    		'parroquia'=>'    SANTA ROSA DE SUCUMBÍOS ',
    		'cod_parr'=>'210255',
    		'cod_postal'=>'210255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>207,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1309,
    		'parroquia'=>'    PUERTO EL CARMEN DEL PUTUMAYO   ',
    		'cod_parr'=>'210350',
    		'cod_postal'=>'210350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>208,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1310,
    		'parroquia'=>'    PALMA ROJA  ',
    		'cod_parr'=>'210351',
    		'cod_postal'=>'210351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>208,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1311,
    		'parroquia'=>'    PUERTO BOLÍVAR (PUERTO MONTÚFAR)    ',
    		'cod_parr'=>'210352',
    		'cod_postal'=>'210352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>208,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1312,
    		'parroquia'=>'    PUERTO RODRÍGUEZ    ',
    		'cod_parr'=>'210353',
    		'cod_postal'=>'210353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>208,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1313,
    		'parroquia'=>'    SANTA ELENA ',
    		'cod_parr'=>'210354',
    		'cod_postal'=>'210354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>208,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1314,
    		'parroquia'=>'    SHUSHUFINDI ',
    		'cod_parr'=>'210450',
    		'cod_postal'=>'210450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1315,
    		'parroquia'=>'    LIMONCOCHA  ',
    		'cod_parr'=>'210451',
    		'cod_postal'=>'210451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1316,
    		'parroquia'=>'    PAÑACOCHA   ',
    		'cod_parr'=>'210452',
    		'cod_postal'=>'210452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1317,
    		'parroquia'=>'    SAN ROQUE (CAB. EN SAN VICENTE) ',
    		'cod_parr'=>'210453',
    		'cod_postal'=>'210453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1318,
    		'parroquia'=>'    SAN PEDRO DE LOS COFANES    ',
    		'cod_parr'=>'210454',
    		'cod_postal'=>'210454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1319,
    		'parroquia'=>'    SIETE DE JULIO  ',
    		'cod_parr'=>'210455',
    		'cod_postal'=>'210455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>209,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1320,
    		'parroquia'=>'    LA BONITA   ',
    		'cod_parr'=>'210550',
    		'cod_postal'=>'210550',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>210,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1321,
    		'parroquia'=>'    EL PLAYÓN DE SAN FRANCISCO  ',
    		'cod_parr'=>'210551',
    		'cod_postal'=>'210551',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>210,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1322,
    		'parroquia'=>'    LA SOFÍA    ',
    		'cod_parr'=>'210552',
    		'cod_postal'=>'210552',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>210,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1323,
    		'parroquia'=>'    ROSA FLORIDA    ',
    		'cod_parr'=>'210553',
    		'cod_postal'=>'210553',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>210,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1324,
    		'parroquia'=>'    SANTA BÁRBARA   ',
    		'cod_parr'=>'210554',
    		'cod_postal'=>'210554',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>210,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1325,
    		'parroquia'=>'    EL DORADO DE CASCALES   ',
    		'cod_parr'=>'210650',
    		'cod_postal'=>'210650',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>211,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1326,
    		'parroquia'=>'    SANTA ROSA DE SUCUMBÍOS ',
    		'cod_parr'=>'210651',
    		'cod_postal'=>'210651',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>211,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1327,
    		'parroquia'=>'    SEVILLA ',
    		'cod_parr'=>'210652',
    		'cod_postal'=>'210652',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>211,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1328,
    		'parroquia'=>'    TARAPOA ',
    		'cod_parr'=>'210750',
    		'cod_postal'=>'210750',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>212,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1329,
    		'parroquia'=>'    CUYABENO    ',
    		'cod_parr'=>'210751',
    		'cod_postal'=>'210751',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>212,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1330,
    		'parroquia'=>'    AGUAS NEGRAS    ',
    		'cod_parr'=>'210752',
    		'cod_postal'=>'210752',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>212,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1331,
    		'parroquia'=>'    PUERTO FRANCISCO DE ORELLANA (EL COCA)  ',
    		'cod_parr'=>'220150',
    		'cod_postal'=>'220150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1332,
    		'parroquia'=>'    DAYUMA  ',
    		'cod_parr'=>'220151',
    		'cod_postal'=>'220151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1333,
    		'parroquia'=>'    TARACOA (NUEVA ESPERANZA: YUCA) ',
    		'cod_parr'=>'220152',
    		'cod_postal'=>'220152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1334,
    		'parroquia'=>'    ALEJANDRO LABAKA    ',
    		'cod_parr'=>'220153',
    		'cod_postal'=>'220153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1335,
    		'parroquia'=>'    EL DORADO   ',
    		'cod_parr'=>'220154',
    		'cod_postal'=>'220154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1336,
    		'parroquia'=>'    EL EDÉN ',
    		'cod_parr'=>'220155',
    		'cod_postal'=>'220155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1337,
    		'parroquia'=>'    GARCÍA MORENO   ',
    		'cod_parr'=>'220156',
    		'cod_postal'=>'220156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1338,
    		'parroquia'=>'    INÉS ARANGO (CAB. EN WESTERN)   ',
    		'cod_parr'=>'220157',
    		'cod_postal'=>'220157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1339,
    		'parroquia'=>'    LA BELLEZA  ',
    		'cod_parr'=>'220158',
    		'cod_postal'=>'220158',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1340,
    		'parroquia'=>'    NUEVO PARAÍSO (CAB. EN UNIÓN    ',
    		'cod_parr'=>'220159',
    		'cod_postal'=>'220159',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1341,
    		'parroquia'=>'    SAN JOSÉ DE GUAYUSA ',
    		'cod_parr'=>'220160',
    		'cod_postal'=>'220160',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>213,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1342,
    		'parroquia'=>'    SAN LUIS DE ARMENIA ',
    		'cod_parr'=>'220161',
    		'cod_postal'=>'220161',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1343,
    		'parroquia'=>'    TIPITINI    ',
    		'cod_parr'=>'220201',
    		'cod_postal'=>'220201',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1344,
    		'parroquia'=>'    NUEVO ROCAFUERTE    ',
    		'cod_parr'=>'220250',
    		'cod_postal'=>'220250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1345,
    		'parroquia'=>'    CAPITÁN AUGUSTO RIVADENEYRA ',
    		'cod_parr'=>'220251',
    		'cod_postal'=>'220251',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1346,
    		'parroquia'=>'    CONONACO    ',
    		'cod_parr'=>'220252',
    		'cod_postal'=>'220252',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1347,
    		'parroquia'=>'    SANTA MARÍA DE HUIRIRIMA    ',
    		'cod_parr'=>'220253',
    		'cod_postal'=>'220253',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1348,
    		'parroquia'=>'    TIPUTINI    ',
    		'cod_parr'=>'220254',
    		'cod_postal'=>'220254',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1349,
    		'parroquia'=>'    YASUNÍ  ',
    		'cod_parr'=>'220255',
    		'cod_postal'=>'220255',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>214,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1350,
    		'parroquia'=>'    LA JOYA DE LOS SACHAS   ',
    		'cod_parr'=>'220350',
    		'cod_postal'=>'220350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1351,
    		'parroquia'=>'    ENOKANQUI   ',
    		'cod_parr'=>'220351',
    		'cod_postal'=>'220351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1352,
    		'parroquia'=>'    POMPEYA ',
    		'cod_parr'=>'220352',
    		'cod_postal'=>'220352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1353,
    		'parroquia'=>'    SAN CARLOS  ',
    		'cod_parr'=>'220353',
    		'cod_postal'=>'220353',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1354,
    		'parroquia'=>'    SAN SEBASTIÁN DEL COCA  ',
    		'cod_parr'=>'220354',
    		'cod_postal'=>'220354',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1355,
    		'parroquia'=>'    LAGO SAN PEDRO  ',
    		'cod_parr'=>'220355',
    		'cod_postal'=>'220355',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1356,
    		'parroquia'=>'    RUMIPAMBA   ',
    		'cod_parr'=>'220356',
    		'cod_postal'=>'220356',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1357,
    		'parroquia'=>'    TRES DE NOVIEMBRE   ',
    		'cod_parr'=>'220357',
    		'cod_postal'=>'220357',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1358,
    		'parroquia'=>'    UNIÓN MILAGREÑA ',
    		'cod_parr'=>'220358',
    		'cod_postal'=>'220358',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>215,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1359,
    		'parroquia'=>'    LORETO  ',
    		'cod_parr'=>'220450',
    		'cod_postal'=>'220450',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1360,
    		'parroquia'=>'    AVILA (CAB. EN HUIRUNO) ',
    		'cod_parr'=>'220451',
    		'cod_postal'=>'220451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1361,
    		'parroquia'=>'    PUERTO MURIALDO ',
    		'cod_parr'=>'220452',
    		'cod_postal'=>'220452',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1362,
    		'parroquia'=>'    SAN JOSÉ DE PAYAMINO    ',
    		'cod_parr'=>'220453',
    		'cod_postal'=>'220453',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1363,
    		'parroquia'=>'    SAN JOSÉ DE DAHUANO ',
    		'cod_parr'=>'220454',
    		'cod_postal'=>'220454',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1364,
    		'parroquia'=>'    SAN VICENTE DE HUATICOCHA   ',
    		'cod_parr'=>'220455',
    		'cod_postal'=>'220455',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>216,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1365,
    		'parroquia'=>'    ABRAHAM CALAZACÓN   ',
    		'cod_parr'=>'230101',
    		'cod_postal'=>'230101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1366,
    		'parroquia'=>'    BOMBOLÍ ',
    		'cod_parr'=>'230102',
    		'cod_postal'=>'230102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1367,
    		'parroquia'=>'    CHIGUILPE   ',
    		'cod_parr'=>'230103',
    		'cod_postal'=>'230103',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1368,
    		'parroquia'=>'    RÍO TOACHI  ',
    		'cod_parr'=>'230104',
    		'cod_postal'=>'230104',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1369,
    		'parroquia'=>'    RÍO VERDE   ',
    		'cod_parr'=>'230105',
    		'cod_postal'=>'230105',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1370,
    		'parroquia'=>'    SANTO DOMINGO DE LOS COLORADOS  ',
    		'cod_parr'=>'230106',
    		'cod_postal'=>'230106',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1371,
    		'parroquia'=>'    ZARACAY ',
    		'cod_parr'=>'230107',
    		'cod_postal'=>'230107',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1372,
    		'parroquia'=>'    SANTO DOMINGO DE LOS COLORADOS  ',
    		'cod_parr'=>'230150',
    		'cod_postal'=>'230150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1373,
    		'parroquia'=>'    ALLURIQUÍN  ',
    		'cod_parr'=>'230151',
    		'cod_postal'=>'230151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1374,
    		'parroquia'=>'    PUERTO LIMÓN    ',
    		'cod_parr'=>'230152',
    		'cod_postal'=>'230152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1375,
    		'parroquia'=>'    LUZ DE AMÉRICA  ',
    		'cod_parr'=>'230153',
    		'cod_postal'=>'230153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1376,
    		'parroquia'=>'    SAN JACINTO DEL BÚA ',
    		'cod_parr'=>'230154',
    		'cod_postal'=>'230154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1377,
    		'parroquia'=>'    VALLE HERMOSO   ',
    		'cod_parr'=>'230155',
    		'cod_postal'=>'230155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1378,
    		'parroquia'=>'    EL ESFUERZO ',
    		'cod_parr'=>'230156',
    		'cod_postal'=>'230156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1379,
    		'parroquia'=>'    SANTA MARÍA DEL TOACHI  ',
    		'cod_parr'=>'230157',
    		'cod_postal'=>'230157',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>217,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1380,
    		'parroquia'=>'    BALLENITA   ',
    		'cod_parr'=>'240101',
    		'cod_postal'=>'240101',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1381,
    		'parroquia'=>'    SANTA ELENA ',
    		'cod_parr'=>'240102',
    		'cod_postal'=>'240102',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1382,
    		'parroquia'=>'    SANTA ELENA ',
    		'cod_parr'=>'240150',
    		'cod_postal'=>'240150',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1383,
    		'parroquia'=>'    ATAHUALPA   ',
    		'cod_parr'=>'240151',
    		'cod_postal'=>'240151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1384,
    		'parroquia'=>'    COLONCHE    ',
    		'cod_parr'=>'240152',
    		'cod_postal'=>'240152',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1385,
    		'parroquia'=>'    CHANDUY ',
    		'cod_parr'=>'240153',
    		'cod_postal'=>'240153',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1386,
    		'parroquia'=>'    MANGLARALTO ',
    		'cod_parr'=>'240154',
    		'cod_postal'=>'240154',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1387,
    		'parroquia'=>'    SIMÓN BOLÍVAR (JULIO MORENO)    ',
    		'cod_parr'=>'240155',
    		'cod_postal'=>'240155',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1388,
    		'parroquia'=>'    SAN JOSÉ DE ANCÓN   ',
    		'cod_parr'=>'240156',
    		'cod_postal'=>'240156',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>218,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1389,
    		'parroquia'=>'    LA LIBERTAD ',
    		'cod_parr'=>'240250',
    		'cod_postal'=>'240250',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>219,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1390,
    		'parroquia'=>'    CARLOS ESPINOZA LARREA  ',
    		'cod_parr'=>'240301',
    		'cod_postal'=>'240301',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1391,
    		'parroquia'=>'    GRAL. ALBERTO ENRÍQUEZ GALLO    ',
    		'cod_parr'=>'240302',
    		'cod_postal'=>'240302',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1392,
    		'parroquia'=>'    VICENTE ROCAFUERTE  ',
    		'cod_parr'=>'240303',
    		'cod_postal'=>'240303',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1393,
    		'parroquia'=>'    SANTA ROSA  ',
    		'cod_parr'=>'240304',
    		'cod_postal'=>'240304',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1394,
    		'parroquia'=>'    SALINAS ',
    		'cod_parr'=>'240350',
    		'cod_postal'=>'240350',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1395,
    		'parroquia'=>'    ANCONCITO   ',
    		'cod_parr'=>'240351',
    		'cod_postal'=>'240351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1396,
    		'parroquia'=>'    JOSÉ LUIS TAMAYO (MUEY) ',
    		'cod_parr'=>'240352',
    		'cod_postal'=>'240352',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>220,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1397,
    		'parroquia'=>'    LAS GOLONDRINAS ',
    		'cod_parr'=>'900151',
    		'cod_postal'=>'900151',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>221,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1398,
    		'parroquia'=>'    MANGA DEL CURA  ',
    		'cod_parr'=>'900351',
    		'cod_postal'=>'900351',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>222,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );



    	Parroquia::create( [
    		'id'=>1399,
    		'parroquia'=>'    EL PIEDRERO ',
    		'cod_parr'=>'900451',
    		'cod_postal'=>'900451',
    		'latitud'=>1,
    		'longitud'=>1,
    		'canton_id'=>223,
    		'created_at'=>1,
    		'updated_at'=>1
    	] );





    }
}
