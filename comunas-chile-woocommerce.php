<?php
/**
* Plugin Name: Comunas de Chile para WooCommerce
* Plugin URI: https://springsdigital.com
* Description: Añade las 346 comunas de Chile a WooCommerce.
* Version: 1.0
* Author: Springs Digital
* Author URI: https://springsdigital.com
**/

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
  $states['CL'] = array(
    '100' => __('Algarrobo', 'woocommerce'),
    '101' => __('Alhué', 'woocommerce'),
    '102' => __('Alto Biobío', 'woocommerce'),
    '103' => __('Alto del Carmen', 'woocommerce'),
    '104' => __('Alto Hospicio', 'woocommerce'),
    '105' => __('Ancud', 'woocommerce'),
    '106' => __('Andacollo', 'woocommerce'),
    '107' => __('Angol', 'woocommerce'),
    '108' => __('Antártica', 'woocommerce'),
    '109' => __('Antofagasta', 'woocommerce'),
    '110' => __('Antuco', 'woocommerce'),
    '111' => __('Arauco', 'woocommerce'),
    '112' => __('Arica', 'woocommerce'),
    '113' => __('Aysén', 'woocommerce'),
    '114' => __('Buin', 'woocommerce'),
    '115' => __('Bulnes', 'woocommerce'),
    '116' => __('Cabildo', 'woocommerce'),
    '117' => __('Cabo de Hornos', 'woocommerce'),
    '118' => __('Cabrero', 'woocommerce'),
    '119' => __('Calama', 'woocommerce'),
    '120' => __('Calbuco', 'woocommerce'),
    '121' => __('Caldera', 'woocommerce'),
    '122' => __('Calera de Tango', 'woocommerce'),
    '123' => __('Calle Larga', 'woocommerce'),
    '124' => __('Camarones', 'woocommerce'),
    '125' => __('Camiña', 'woocommerce'),
    '126' => __('Canela', 'woocommerce'),
    '127' => __('Cañete', 'woocommerce'),
    '128' => __('Carahue', 'woocommerce'),
    '129' => __('Cartagena', 'woocommerce'),
    '130' => __('Casablanca', 'woocommerce'),
    '131' => __('Castro', 'woocommerce'),
    '132' => __('Catemu', 'woocommerce'),
    '133' => __('Cauquenes', 'woocommerce'),
    '134' => __('Cerrillos', 'woocommerce'),
    '135' => __('Cerro Navia', 'woocommerce'),
    '136' => __('Chaitén', 'woocommerce'),
    '137' => __('Chanco', 'woocommerce'),
    '138' => __('Chañaral', 'woocommerce'),
    '139' => __('Chépica', 'woocommerce'),
    '140' => __('Chiguayante', 'woocommerce'),
    '141' => __('Chile Chico', 'woocommerce'),
    '142' => __('Chillán', 'woocommerce'),
    '143' => __('Chillán Viejo', 'woocommerce'),
    '144' => __('Chimbarongo', 'woocommerce'),
    '145' => __('Cholchol', 'woocommerce'),
    '146' => __('Chonchi', 'woocommerce'),
    '147' => __('Cisnes', 'woocommerce'),
    '148' => __('Cobquecura', 'woocommerce'),
    '149' => __('Cochamó', 'woocommerce'),
    '150' => __('Cochrane', 'woocommerce'),
    '151' => __('Codegua', 'woocommerce'),
    '152' => __('Coelemu', 'woocommerce'),
    '153' => __('Coihueco', 'woocommerce'),
    '154' => __('Coinco', 'woocommerce'),
    '155' => __('Colbún', 'woocommerce'),
    '156' => __('Colchane', 'woocommerce'),
    '157' => __('Colina', 'woocommerce'),
    '158' => __('Collipulli', 'woocommerce'),
    '159' => __('Coltauco', 'woocommerce'),
    '160' => __('Combarbalá', 'woocommerce'),
    '161' => __('Concepción', 'woocommerce'),
    '162' => __('Conchalí', 'woocommerce'),
    '163' => __('Concón', 'woocommerce'),
    '164' => __('Constitución', 'woocommerce'),
    '165' => __('Contulmo', 'woocommerce'),
    '166' => __('Copiapó', 'woocommerce'),
    '167' => __('Coquimbo', 'woocommerce'),
    '168' => __('Coronel', 'woocommerce'),
    '169' => __('Corral', 'woocommerce'),
    '170' => __('Coyhaique', 'woocommerce'),
    '171' => __('Cunco', 'woocommerce'),
    '172' => __('Curacautín', 'woocommerce'),
    '173' => __('Curacaví', 'woocommerce'),
    '174' => __('Curaco de Vélez', 'woocommerce'),
    '175' => __('Curanilahue', 'woocommerce'),
    '176' => __('Curarrehue', 'woocommerce'),
    '177' => __('Curepto', 'woocommerce'),
    '178' => __('Curicó', 'woocommerce'),
    '179' => __('Dalcahue', 'woocommerce'),
    '180' => __('Diego de Almagro', 'woocommerce'),
    '181' => __('Doñihue', 'woocommerce'),
    '182' => __('El Bosque', 'woocommerce'),
    '183' => __('El Carmen', 'woocommerce'),
    '184' => __('El Monte', 'woocommerce'),
    '185' => __('El Quisco', 'woocommerce'),
    '186' => __('El Tabo', 'woocommerce'),
    '187' => __('Empedrado', 'woocommerce'),
    '188' => __('Ercilla', 'woocommerce'),
    '189' => __('Estación Central', 'woocommerce'),
    '190' => __('Florida', 'woocommerce'),
    '191' => __('Freire', 'woocommerce'),
    '192' => __('Freirina', 'woocommerce'),
    '193' => __('Fresia', 'woocommerce'),
    '194' => __('Frutillar', 'woocommerce'),
    '195' => __('Futaleufú', 'woocommerce'),
    '196' => __('Futrono', 'woocommerce'),
    '197' => __('Galvarino', 'woocommerce'),
    '198' => __('General Lagos', 'woocommerce'),
    '199' => __('Gorbea', 'woocommerce'),
    '200' => __('Graneros', 'woocommerce'),
    '201' => __('Guaitecas', 'woocommerce'),
    '202' => __('Hijuelas', 'woocommerce'),
    '203' => __('Hualaihué', 'woocommerce'),
    '204' => __('Hualañé', 'woocommerce'),
    '205' => __('Hualpén', 'woocommerce'),
    '206' => __('Hualqui', 'woocommerce'),
    '207' => __('Huara', 'woocommerce'),
    '208' => __('Huasco', 'woocommerce'),
    '209' => __('Huechuraba', 'woocommerce'),
    '210' => __('Illapel', 'woocommerce'),
    '211' => __('Independencia', 'woocommerce'),
    '212' => __('Iquique', 'woocommerce'),
    '213' => __('Isla de Maipo', 'woocommerce'),
    '214' => __('Isla de Pascua', 'woocommerce'),
    '215' => __('Juan Fernández', 'woocommerce'),
    '216' => __('La Calera', 'woocommerce'),
    '217' => __('La Cisterna', 'woocommerce'),
    '218' => __('La Cruz', 'woocommerce'),
    '219' => __('La Estrella', 'woocommerce'),
    '220' => __('La Florida', 'woocommerce'),
    '221' => __('La Granja', 'woocommerce'),
    '222' => __('La Higuera', 'woocommerce'),
    '223' => __('La Ligua', 'woocommerce'),
    '224' => __('La Pintana', 'woocommerce'),
    '225' => __('La Reina', 'woocommerce'),
    '226' => __('La Serena', 'woocommerce'),
    '227' => __('La Unión', 'woocommerce'),
    '228' => __('Lago Ranco', 'woocommerce'),
    '229' => __('Lago Verde', 'woocommerce'),
    '230' => __('Laguna Blanca', 'woocommerce'),
    '231' => __('Laja', 'woocommerce'),
    '232' => __('Lampa', 'woocommerce'),
    '233' => __('Lanco', 'woocommerce'),
    '234' => __('Las Cabras', 'woocommerce'),
    '235' => __('Las Condes', 'woocommerce'),
    '236' => __('Lautaro', 'woocommerce'),
    '237' => __('Lebu', 'woocommerce'),
    '238' => __('Licantén', 'woocommerce'),
    '239' => __('Limache', 'woocommerce'),
    '240' => __('Linares', 'woocommerce'),
    '241' => __('Litueche', 'woocommerce'),
    '242' => __('Llanquihue', 'woocommerce'),
    '243' => __('Llay Llay', 'woocommerce'),
    '244' => __('Lo Barnechea', 'woocommerce'),
    '245' => __('Lo Espejo', 'woocommerce'),
    '246' => __('Lo Prado', 'woocommerce'),
    '247' => __('Lolol', 'woocommerce'),
    '248' => __('Loncoche', 'woocommerce'),
    '249' => __('Longaví', 'woocommerce'),
    '250' => __('Lonquimay', 'woocommerce'),
    '251' => __('Los Álamos', 'woocommerce'),
    '252' => __('Los Andes', 'woocommerce'),
    '253' => __('Los Ángeles', 'woocommerce'),
    '254' => __('Los Lagos', 'woocommerce'),
    '255' => __('Los Muermos', 'woocommerce'),
    '256' => __('Los Sauces', 'woocommerce'),
    '257' => __('Los Vilos', 'woocommerce'),
    '258' => __('Lota', 'woocommerce'),
    '259' => __('Lumaco', 'woocommerce'),
    '260' => __('Machalí', 'woocommerce'),
    '261' => __('Macul', 'woocommerce'),
    '262' => __('Máfil', 'woocommerce'),
    '263' => __('Maipú', 'woocommerce'),
    '264' => __('Malloa', 'woocommerce'),
    '265' => __('Marchihue', 'woocommerce'),
    '266' => __('María Elena', 'woocommerce'),
    '267' => __('María Pinto', 'woocommerce'),
    '268' => __('Mariquina', 'woocommerce'),
    '269' => __('Maule', 'woocommerce'),
    '270' => __('Maullín', 'woocommerce'),
    '271' => __('Mejillones', 'woocommerce'),
    '272' => __('Melipeuco', 'woocommerce'),
    '273' => __('Melipilla', 'woocommerce'),
    '274' => __('Molina', 'woocommerce'),
    '275' => __('Monte Patria', 'woocommerce'),
    '276' => __('Mostazal', 'woocommerce'),
    '277' => __('Mulchén', 'woocommerce'),
    '278' => __('Nacimiento', 'woocommerce'),
    '279' => __('Nancagua', 'woocommerce'),
    '280' => __('Natales', 'woocommerce'),
    '281' => __('Navidad', 'woocommerce'),
    '282' => __('Negrete', 'woocommerce'),
    '283' => __('Ninhue', 'woocommerce'),
    '284' => __('Nogales', 'woocommerce'),
    '285' => __('Nueva Imperial', 'woocommerce'),
    '286' => __('Ñiquén', 'woocommerce'),
    '287' => __('Ñuñoa', 'woocommerce'),
    '288' => __('O\'Higgins', 'woocommerce'),
    '289' => __('Olivar', 'woocommerce'),
    '290' => __('Ollagüe', 'woocommerce'),
    '291' => __('Olmué', 'woocommerce'),
    '292' => __('Osorno', 'woocommerce'),
    '293' => __('Ovalle', 'woocommerce'),
    '294' => __('Padre Hurtado', 'woocommerce'),
    '295' => __('Padre las Casas', 'woocommerce'),
    '296' => __('Paihuano', 'woocommerce'),
    '297' => __('Paillaco', 'woocommerce'),
    '298' => __('Paine', 'woocommerce'),
    '299' => __('Palena', 'woocommerce'),
    '300' => __('Palmilla', 'woocommerce'),
    '301' => __('Panguipulli', 'woocommerce'),
    '302' => __('Panquehue', 'woocommerce'),
    '303' => __('Papudo', 'woocommerce'),
    '304' => __('Paredones', 'woocommerce'),
    '305' => __('Parral', 'woocommerce'),
    '306' => __('Pedro Aguirre Cerda', 'woocommerce'),
    '307' => __('Pelarco', 'woocommerce'),
    '308' => __('Pelluhue', 'woocommerce'),
    '309' => __('Pemuco', 'woocommerce'),
    '310' => __('Pencahue', 'woocommerce'),
    '311' => __('Penco', 'woocommerce'),
    '312' => __('Peñaflor', 'woocommerce'),
    '313' => __('Peñalolén', 'woocommerce'),
    '314' => __('Peralillo', 'woocommerce'),
    '315' => __('Perquenco', 'woocommerce'),
    '316' => __('Petorca', 'woocommerce'),
    '317' => __('Peumo', 'woocommerce'),
    '318' => __('Pica', 'woocommerce'),
    '319' => __('Pichidegua', 'woocommerce'),
    '320' => __('Pichilemu', 'woocommerce'),
    '321' => __('Pinto', 'woocommerce'),
    '322' => __('Pirque', 'woocommerce'),
    '323' => __('Pitrufquén', 'woocommerce'),
    '324' => __('Placilla', 'woocommerce'),
    '325' => __('Portezuelo', 'woocommerce'),
    '326' => __('Porvenir', 'woocommerce'),
    '327' => __('Pozo Almonte', 'woocommerce'),
    '328' => __('Primavera', 'woocommerce'),
    '329' => __('Providencia', 'woocommerce'),
    '330' => __('Puchuncaví', 'woocommerce'),
    '331' => __('Pucón', 'woocommerce'),
    '332' => __('Pudahuel', 'woocommerce'),
    '333' => __('Puente Alto', 'woocommerce'),
    '334' => __('Puerto Montt', 'woocommerce'),
    '335' => __('Puerto Octay', 'woocommerce'),
    '336' => __('Puerto Varas', 'woocommerce'),
    '337' => __('Pumanque', 'woocommerce'),
    '338' => __('Punitaqui', 'woocommerce'),
    '339' => __('Punta Arenas', 'woocommerce'),
    '340' => __('Puqueldón', 'woocommerce'),
    '341' => __('Purén', 'woocommerce'),
    '342' => __('Purranque', 'woocommerce'),
    '343' => __('Putaendo', 'woocommerce'),
    '344' => __('Putre', 'woocommerce'),
    '345' => __('Puyehue', 'woocommerce'),
    '346' => __('Queilén', 'woocommerce'),
    '347' => __('Quellón', 'woocommerce'),
    '348' => __('Quemchi', 'woocommerce'),
    '349' => __('Quilaco', 'woocommerce'),
    '350' => __('Quilicura', 'woocommerce'),
    '351' => __('Quilleco', 'woocommerce'),
    '352' => __('Quillón', 'woocommerce'),
    '353' => __('Quillota', 'woocommerce'),
    '354' => __('Quilpué', 'woocommerce'),
    '355' => __('Quinchao', 'woocommerce'),
    '356' => __('Quinta de Tilcoco', 'woocommerce'),
    '357' => __('Quinta Normal', 'woocommerce'),
    '358' => __('Quintero', 'woocommerce'),
    '359' => __('Quirihue', 'woocommerce'),
    '360' => __('Rancagua', 'woocommerce'),
    '361' => __('Ránquil', 'woocommerce'),
    '362' => __('Rauco', 'woocommerce'),
    '363' => __('Recoleta', 'woocommerce'),
    '364' => __('Renaico', 'woocommerce'),
    '365' => __('Renca', 'woocommerce'),
    '366' => __('Rengo', 'woocommerce'),
    '367' => __('Requínoa', 'woocommerce'),
    '368' => __('Retiro', 'woocommerce'),
    '369' => __('Rinconada', 'woocommerce'),
    '370' => __('Río Bueno', 'woocommerce'),
    '371' => __('Río Claro', 'woocommerce'),
    '372' => __('Río Hurtado', 'woocommerce'),
    '373' => __('Río Ibáñez', 'woocommerce'),
    '374' => __('Río Negro', 'woocommerce'),
    '375' => __('Río Verde', 'woocommerce'),
    '376' => __('Romeral', 'woocommerce'),
    '377' => __('Saavedra', 'woocommerce'),
    '378' => __('Sagrada Familia', 'woocommerce'),
    '379' => __('Salamanca', 'woocommerce'),
    '380' => __('San Antonio', 'woocommerce'),
    '381' => __('San Bernardo', 'woocommerce'),
    '382' => __('San Carlos', 'woocommerce'),
    '383' => __('San Clemente', 'woocommerce'),
    '384' => __('San Esteban', 'woocommerce'),
    '385' => __('San Fabián', 'woocommerce'),
    '386' => __('San Felipe', 'woocommerce'),
    '387' => __('San Fernando', 'woocommerce'),
    '388' => __('San Gregorio', 'woocommerce'),
    '389' => __('San Ignacio', 'woocommerce'),
    '390' => __('San Javier', 'woocommerce'),
    '391' => __('San Joaquín', 'woocommerce'),
    '392' => __('San José de Maipo', 'woocommerce'),
    '393' => __('San Juan de la Costa', 'woocommerce'),
    '394' => __('San Miguel', 'woocommerce'),
    '395' => __('San Nicolás', 'woocommerce'),
    '396' => __('San Pablo', 'woocommerce'),
    '397' => __('San Pedro', 'woocommerce'),
    '398' => __('San Pedro de Atacama', 'woocommerce'),
    '399' => __('San Pedro de la Paz', 'woocommerce'),
    '400' => __('San Rafael', 'woocommerce'),
    '401' => __('San Ramón', 'woocommerce'),
    '402' => __('San Rosendo', 'woocommerce'),
    '403' => __('San Vicente', 'woocommerce'),
    '404' => __('Santa Bárbara', 'woocommerce'),
    '405' => __('Santa Cruz', 'woocommerce'),
    '406' => __('Santa Juana', 'woocommerce'),
    '407' => __('Santa María', 'woocommerce'),
    '408' => __('Santiago', 'woocommerce'),
    '409' => __('Santo Domingo', 'woocommerce'),
    '410' => __('Sierra Gorda', 'woocommerce'),
    '411' => __('Talagante', 'woocommerce'),
    '412' => __('Talca', 'woocommerce'),
    '413' => __('Talcahuano', 'woocommerce'),
    '414' => __('Taltal', 'woocommerce'),
    '415' => __('Temuco', 'woocommerce'),
    '416' => __('Teno', 'woocommerce'),
    '417' => __('Teodoro Schmidt', 'woocommerce'),
    '418' => __('Tierra Amarilla', 'woocommerce'),
    '419' => __('Tiltil', 'woocommerce'),
    '420' => __('Timaukel', 'woocommerce'),
    '421' => __('Tirúa', 'woocommerce'),
    '422' => __('Tocopilla', 'woocommerce'),
    '423' => __('Toltén', 'woocommerce'),
    '424' => __('Tomé', 'woocommerce'),
    '425' => __('Torres del Paine', 'woocommerce'),
    '426' => __('Tortel', 'woocommerce'),
    '427' => __('Traiguén', 'woocommerce'),
    '428' => __('Treguaco', 'woocommerce'),
    '429' => __('Tucapel', 'woocommerce'),
    '430' => __('Valdivia', 'woocommerce'),
    '431' => __('Vallenar', 'woocommerce'),
    '432' => __('Valparaíso', 'woocommerce'),
    '433' => __('Vichuquén', 'woocommerce'),
    '434' => __('Victoria', 'woocommerce'),
    '435' => __('Vicuña', 'woocommerce'),
    '436' => __('Vilcún', 'woocommerce'),
    '437' => __('Villa Alegre', 'woocommerce'),
    '438' => __('Villa Alemana', 'woocommerce'),
    '439' => __('Villarrica', 'woocommerce'),
    '440' => __('Viña del Mar', 'woocommerce'),
    '441' => __('Vitacura', 'woocommerce'),
    '442' => __('Yerbas Buenas', 'woocommerce'),
    '443' => __('Yumbel', 'woocommerce'),
    '444' => __('Yungay', 'woocommerce'),
    '445' => __('Zapallar', 'woocommerce')
    );
  return $states;
}
