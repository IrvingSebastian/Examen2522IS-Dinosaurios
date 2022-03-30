<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicacion;

class PublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Mexico_City');

        $Titulos=['¿Qué Son Los Dinosaurios?', 'Eras de los Dinosaurios', 'Ornitisquios', 'Saurisquios',
        'Museos De Dinosaurios En México', 'Causas de Extinción', 'Documental - Dinosaurios: Lucha a Muerte',
        'Vídeo - Iceberg de Dinosaurios y Animales Prehistóricos'];

        $Descripciones=[
        // ¿Qué Son Los Dinosaurios?
        '<p style="font-size: 18px">Mucho antes que los seres humanos, los dinosaurios vivieron en el planeta, 
        hace millones de años. Los dinosaurios fueron grandes y prehistóricos reptiles terrestresque vivieron 
        durante la “Era de los Reptiles” o lo que ahora llamamos la “Era Mesozoica”. La palabra “dinosaurio” 
        viene de las palabras griegas para “lagarto aterrador”. El nombre fue acuñado en 1842 por un profesor 
        inglés de anatomía comparativa y fisiología, llamado Sir Richard Owen. Al final de la Era Mesozoica, 
        los dinosaurios y muchas otras especies se extinguieron. Las causas de este hecho todavía son un misterio.<br><br>
        Un error muy común es pensar que todos los dinosaurios habitaron en la Tierra al mismo tiempo. 
        Como ya se dijo, los dinosaurios vivieron en la Era Mesozoica, que se divide en tres períodos de
         menor tamaño. En primer lugar estuvo el período “Triásico”, hace 254-204 millones de años. El siguiente 
         fue el período “Jurásico”, hace 204-140 millones de años. Por último, estuvo el período “Cretácico”, 
         hace 140-65 millones de años. Durante estos períodos se desarrolló una enorme variación entre 
         los diferentes dinosaurios. Por ejemplo, los dinosaurios que vivieron durante el período Triásico 
         eran dinosaurios herbívoros mientras que los que vivieron durante el período Cretácico eran principalmente 
         carnívoros, como el famoso Tyrannosaurus Rex.<br><br>
         A diferencia de todos los demás reptiles, los dinosaurios eran un grupo de reptiles con características 
         físicas disímiles. Algunos eran bípedos, es decir, que caminaban sobre dos patas, mientras que otros 
         eran cuadrúpedos porque caminaban con cuatro patas. Ciertos dinosaurios fueron muy lentos y pesados, 
         mientras que otros utilizaban la velocidad para capturar a sus presas. Unos se protegían de los 
         depredadores mediante estructuras corporales blindadas, algunos tenían cuernos, picos, crestas o 
         terminaciones óseas. También existieron dinosaurios con la piel gruesa y llena de baches, mientras 
         que otros tenían incluso plumas primitivas.</p><br>
        <blockquote><p>Admitimos que la variabilidad de un organismo hasta cierto punto es una condición constante 
        y cierta de la vida, de lo contrario no habría individuos distinguibles de una especie.</p>
        <cite>Sir Richard Owen</cite>  
        </blockquote>',

        // Eras de los Dinosaurios
        '<p style="font-size: 18px">Los dinosaurios vivieron durante tres períodos: el Triásico, Jurásico y Cretácico. 
        Surgieron a mediados del Triásico y se extinguieron definitivamente a finales del Cretácico. 
        En estos tres períodos vivieron muchas clases de dinosaurios, en total 33. Estos períodos formaron 
        una era, la Era Mesozoica. Durante los tres períodos el clima era más cálido y húmedo que en nuestros 
        días. No se llegaba a extremos de calor y frío, ni había grandes diferencias entre el verano y el invierno. 
        Tampoco existían zonas del planta cubiertas de hielo y nieve, como en las actuales regiones polares.</p><br><br>
        <div class="blog-image">
          <img src="https://cdn.mos.cms.futurecdn.net/LPGNWGdE82Vc3j6ucxfxSS-1200-80.jpg"> 
        </div>
        <h3>Triásico</h3>
        <p style="font-size: 18px">El significado de Triásico es por tri- que significa tres, que es por las tres capas de roca que se 
        depositaron durante el período en la Tierra. El período Triásico, que duró desde hace 245 hasta 208 millones 
        de años, fue el primero de los tres períodos en que vivieron los dinosaurios. Se dividía en dos subperíodos: 
        el inferior y el superior. El Triásico inferior duró desde hace 245 hasta 232 millones de años, y el Triásico 
        superior desde 231, más o menos cuando aparecieron los dinosaurios, hasta los 208 millones.</p><br><br>
        <div class="blog-image">
          <img src="https://www.meteorologiaenred.com/wp-content/uploads/2020/01/Periodo-Jurásico.jpg"> 
        </div>
        <h3>Jurásico</h3>
        <p style="font-size: 18px">El nombre se debe a las montañas Jura, la cordillera que divide Francia y Suiza,
          se formó durante este período. El Jurásico duró desde 208 hasta hace 145 millones de años. Se dividían en 
          tres partes bastante diferenciadas; Jurásico inferior, el medio y el superior. En el período Jurásico 
          inferior, el mundo empezó a cambiar. 
          Los continentes empezaron a separarse, y la tierra cambió; llovía más y la tierra se cubrió de verdor. 
          Ésta fue la verdadera época del reinado de los dinosaurios. Los bosques del Jurásico temprano estaban 
          poblados de una gran variedad de dinosaurios herbívoros. Vivieron muchos prosaurópodos, los primeros 
          tireóforos, que son reptiles acorazados y bastantes Ornitópodos primitivos. Entre los carnívoros 
          vivieron los primeros carnosaurios y muchos dinosaurios pequeños terópodos como celofísidos, celúridos...</p><br><br>
        <div class="blog-image">
          <img src="https://www.caracteristicas.co/wp-content/uploads/2019/05/periodo-cretacico-1-e1588902896383.jpg"> 
        </div>
        <h3>Cretácico</h3>
        <p style="font-size: 18px">El nombre Cretácico procede de la palabra latina creta, que significa tiza. 
          Las capas de tiza y esquisto de esta época se amontonaron sobre el lecho de los mares. El Cretácico 
          duro desde hace 145 hasta 66 millones de años. Se dividía en dos partes, inferior y superior. 
          El inferior desde 145 hasta 98 millones de años. El superior desde 98 hasta 66 millones de años.<br><br>
          En el Cretácico inferior los herbívoros llegaron a ser los dinosaurios más importantes. Vivieron más 
          especies de dinosaurios que en ninguna otra época. Aunque había muchos herbívoros, no faltaban los 
          fieros carnívoros, aunque fueron bastante pocos. Entre los carnívoros estuvieron los ornitomímidos 
          avanzados, los primeros dromeosáuridos, y algún carnosaurio. Entre los herbívoros vivió el más grande 
          dinosaurio, que era saurópodo. Hubo también los saurópodos diplodócidos y al final del Cretácico 
          temprano aparecieron los saurópodos titanosáurido. También al principio de este período hubo algunos 
          braquiosáuridos. Entre los tireóforos hubo nodosáuridos y los estegosáuridos. Al final de esta parte 
          de período los estegosáuridos estaban por desaparecer, para ser reemplazados por los primeros 
          anquilosáuridos.</p>',

        // Ornitisquios
        '<p style="font-size: 18px">Los Ornitisquios (Ornithischia), que en griego significan «caderas de ave», 
        son dinosaurios pertenecientes a uno de los dos órdenes de dinosaurios que vivieron desde el Triásico 
        Superior hasta el Cretácico superior, hace entre 228 y 65 millones de años.
        Estos dinosaurios tenían la pelvis de forma similar a la de las aves, con cuatro prolongaciones, el ilion
        relativamente largo y el pubis dirigido hacia atrás. Este orden comprendía algunos de los animales más raros
        de todos los tiempos.</p><br><br>
        <div class="blog-image">
          <img src="https://i0.wp.com/redhistoria.com/wp-content/uploads/2018/05/pelvis-ornithischia.png"> 
        </div>
        <p style="font-size: 18px">Este tipo de pelvis evolucionó independientemente al menos tres veces en los dinosaurios, en ornitisquios, 
            aves y tercianosinoides, y muchos sostienen que evolucionó una cuarta vez en el clado Dromaeosauridae, 
            aunque es un tema que está en discusión pues muchos expertos consideran que éstos son mesopúbicos. Los 
            ornitisquios eran herbívoros que generalmente vivían en manadas y, salvo excepciones, solían ser presas 
            para los terópodos al tiempo que eran más pequeños que los saurópodos.<br><br>
        </p>
        <h2>Subórdenes de los Ornitisquios</h2>
        <ul>
            <li style="font-size: 18px">Ornitópodos</li>
            <li style="font-size: 18px">Tiréoforos</li>
        </ul>',

        // Sauristiquios
        '<p style="font-size: 18px">Los saurisquios (Saurischia), que en griego significa «cadera de lagarto», era uno 
        de los dos órdenes de dinosaurios que vivieron desde el Triásico superior hace 228 millones de años, 
        produciéndose una enorme diversificación entre el Jurásico y el Cretácico.
        Su característica principal son las caderas similares a las de los lagartos, es decir es análoga a los lagartos
        con 3 prolongaciones, el ilion más corto y profundo y el pubis dirigido hacia adelante, este orden incluye ejemplares
        muy antiguos de dinosaurios.
        </p><br><br>
        <div class="blog-image">
          <img src="https://i0.wp.com/redhistoria.com/wp-content/uploads/2018/05/pelvis-saurischia.png"> 
        </div>
        <p style="font-size: 18px">Dentro de Saurischia existen dos subórdenes principales, terópodos y saurópodos,
            siendo los primeros los grandes carnívoros y dominantes durante toda la era.Por su parte los saurópodos 
            sufrieron una evolución curiosa. Comenzaron siendo carnívoros bípedos en el Triásico, pero con el paso de 
            los años comenzaron a convertirse en herbívoros y a caminar como cuadrúpedos, dando origen en el Jurásico 
            a las especies gigantes de dinosaurios como el Diplodocus, el Brachiosaurus o el Apatosaurus.<br><br>
        </p>
        <h2>Subórdenes de los Ornitisquios</h2>
        <ul>
            <li style="font-size: 18px">Terópodos</li>
            <li style="font-size: 18px">Saurópodos</li>
        </ul>',

        // Museos de dinosaurios en México
        ' <p style="font-size: 18px">Si te gusta el universo de los dinosaurios, entonces tienes que descubrir los 
        tesoros que resguardan los museos de estas especies desparecidas, entre información sobre su existencia 
        sobre la Tierra, así como material que te describe dónde fueron hallados sus restos.
        </p>
        <div class="blog-image">
          <img src="https://i.pinimg.com/originals/22/43/9e/22439efcfaf14fdf5e353f813f1f54de.jpg"> 
        </div>
        <br>
        <h2>Museos</h2>              
        <table style="font-size: 18px">
          <thead>
            <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Lugar</th>
              <th data-field="price">Descripción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>El Museo del Desierto </td>
              <td>Saltillo, Coahuila</td>
              <td>Un 27 de noviembre, pero de 1999, abrió este espacio cultural con la intención de fomentar el 
                conocimiento y cuidado del medio ambiente. En la actualidad, resguarda una gran cantidad de 
                fósiles y huesos de dinosaurios. Entre las curiosidades que exhibe está un Tiranosaurus rex.</td>
            </tr>
            <tr>
              <td>Museo de la Evolución</td>
              <td>Puebla, Puebla</td>
              <td>Un viaje a la capital de Puebla para recorrer, a lo largo de sus cinco salas, los 14 mil 
                millones de años que ha experimentado la Tierra; allí descubrirás los primeros organismos 
                unicelulares sobre el planeta y cómo ha sido la evolución de la vida, así que vas a encontrar 
                información, fósiles y réplicas de dinosaurios.</td>
            </tr>
            <tr>
              <td>Xochitla Parque Ecológico</td>
              <td>Tepotzotlán, Estado de México</td>
              <td>Lugar donde se exhiben 24 figuras de dinosaurios animatrónicas con movimientos y sonidos 
                realistas. Así que hasta el 10 de enero de 2021 tendrás la oportunidad de admirar un 
                Carnotauro de 7 metros y medio de largo, por 4 de alto; un Triceratops, un Deinonychus, 
                así como cinco réplicas de cráneos fósiles y de restos prehistóricos.</td>
            </tr>
          </tbody>
        </table>',
        
        // Causas de extinción
        '<p style="font-size: 18px">Resulta cuando menos difícil de entender cómo unos animales que dominaron la
        Tierra durante unos 160 millones de años se extinguieron con tanta rapidez, y más si a esta rapidez le 
        añadimos que se produjo a nivel mundial y afectando a la totalidad de estos seres. Así las causas de su
        extinción son de lo más diversas.<br><br>
        En 1962, un entomólogo llegó a proponer que la Tierra antigua fue invadida por orugas, y que los insectos 
        devoraron tanta vida vegetal que nada dejaron para los dinosaurios. El colapso ecológico resultante 
        dejó mariposas revoloteando sobre cadáveres de Triceratops. Por supuesto, eso no explicaba cómo fue 
        que las orugas llevaron a la extinción a las especies del cielo o el mar.<br><br>
        Una de las primeras teorías fue el concepto de que los dinosaurios gastaban demasiada energía corporal 
        volviéndose grandes y espinosos, lo que les impedía adaptarse a los cambios del clima o hacer otros 
        ajustes al ambiente global. Algunos más pensaban que los dinosaurios y otras especies fósiles tenían 
        un periodo de vida fijo, un tipo de “senescencia racial” que los sacaba del escenario evolutivo en el 
        tiempo señalado.<br><br>
        Una teoría sobre la extinción de los dinosaurios está enfocada hacia la posible generalización de las 
        enfermedades. Plantea que durante el período Cretácico, surgieron más y más puentes de tierra debido 
        al descenso del nivel de los mares. La evaporación de los cuerpos de agua hizo que los dinosaurios 
        caminaran a través de nuevas tierras en busca de comida y compañía. Cada población de dinosaurios tenía 
        sus propios parásitos o enfermedades, ante las que desarrollaban inmunidad, pero al mezclarse  con el 
        resto de las especies de dinosaurios, se fueron convirtiendo en mortales.<br><br>
        La hipótesis más aceptada a nivel científico es la de la caída de un colosal meteorito en el Golfo de 
        México. Esto ocasionaría una nube piroplástica que cubrió toda la Tierra en pocas horas, elevando su 
        temperatura y calcinando todo lo que se encontrará, sumado a esto, otra nube generada por la combustión de 
        los incendios, arrasarían la tierra. Así el sol estaría oculto para las plantas, durante mucho tiempo, 
        las temperaturas decenderian, luego de ello la fotosíntesis igual se detendría.<br><br>
        Con estos cambios tan radicales, solo animales pequeños que precisaran de poco alimento y con un buen regulador
        térmico, podrían sobrevivir a tan extremas condiciones, dando así el final de una era, y el comienzo de la 
        era de los mamíferos.
        </p><br>
        <div class="blog-image">
          <img src="https://cdn.bioguia.com/embed/ac8da8f5a468a94d99c669ad41a1552052147/cientificos-ponen-en-duda-asteroide-dinosaurios.jpg"> 
        </div>',

        // Documental Dinosaurios: Lucha a Muerte
        '<h1>Documental - Dinosaurios: Lucha a Muerte</h1>
        <p style="font-size: 18px">Un nuevo fósil conocido como "duelo de dinosaurios" nos muestra a un depredador y 
          su presa tal como murieron durante su enfrentamiento. Es un fósil impactante, pero también uno que reabre 
          un debate muy controvertido: podría ser la pieza que faltaba en el rompecabezas para demostrar que el 
          tiranosaurio no estuvo solo durante el Cretácico tardío. Podría demostrar por fin la existencia de un 
          nuevo dinosaurio, un tiranosaurio enano, el nanotyrannus. Mientras analizamos las pruebas a favor y en 
          contra de la existencia de este enigmático depredador, descubrimos un dinosaurio como ningún otro y por 
          primera vez reproducimos su aspecto con precisión. Descubrimos un contemporáneo del tyrannosaurus rex 
          que era rápido, ágil y cazaba en grupo, y que estaba preparado para matar.</p><br>
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/kmzz3VREBNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
          
          // Vídeo - Iceberg de Dinosaurios y Animales Prehistóricos
          '<h1>Vídeo - Iceberg de Dinosaurios y Animales Prehistóricos</h1>
          <p style="font-size: 18px">
            Los primeros dinosaurios aparecieron hace unos 243 millones de años, y aunque fueron descubiertos en la década 
            de 1840, hablar de ellos no ha pasado de moda.
            Gracias a los museos, los libros y la cultura popular, los dinosaurios siguen llamando nuestra atención. 
            Sin embargo, así como cualquier otra temática no escapa de tener desde datos algo curiosos hasta perturbadores, 
            así como leyendas urbanas e incluso teorías de conspiración. 
            En este video se explorán los temas más inquietantes relacionados con los dinosaurios y la vida prehistórica 
            en general.</p><br>
            <iframe width="1000" height="500" src="https://www.youtube.com/embed/-TjfI28z5oE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        ];

        $Imagenes = ['https://wallpapercave.com/wp/xWlhICf.jpg', 
        'http://2.bp.blogspot.com/-2HtuJGXJWnY/T476Ei-cb0I/AAAAAAAABRg/tEmvrOJguJ8/s1600/extincion.jpg',
        'https://cdn3.dinosaurioss.com/wp-content/uploads/2014/09/ornitopodos3.jpg', 
        'https://i.ytimg.com/vi/J4lQyBlIGIo/maxresdefault.jpg',
        'https://tvazteca.brightspotcdn.com/dims4/default/4777c15/2147483647/strip/true/crop/945x626+0+0/resize/968x641!/format/jpg/quality/80/?url=https:%2F%2Ftvazteca.brightspotcdn.com%2F53%2Fb8%2F68b812206174c33734e3bd7c100c%2Froboticdinosaurs-2327787.jpg',
        'https://media.aweita.larepublica.pe/768x508/aweita/imagen/2018/04/06/noticia-dinosaurios-desparicion-meteorito.png',
        'https://image.chilimovie.com/public/300px/20200516/m0NHdpGKJCSEafa95sFipprP57O.jpg',
        'https://images2.alphacoders.com/609/thumb-1920-609866.jpg'];

        $Resumenes=[
            // ¿Qué Son Los Dinosaurios?
            'Los dinosaurios fueron grandes y prehistóricos reptiles terrestresque vivieron 
            durante la “Era de los Reptiles” o lo que ahora llamamos la “Era Mesozoica”. La palabra “dinosaurio” 
            viene de las palabras griegas para “lagarto aterrador”.',
    
            // Eras de los Dinosaurios
            'Los dinosaurios vivieron durante tres períodos: el Triásico, Jurásico y Cretácico. 
            Surgieron a mediados del Triásico y se extinguieron definitivamente a finales del Cretácico. 
            En estos tres períodos vivieron muchas clases de dinosaurios, en total 33. Estos períodos formaron 
            una era, la Era Mesozoica.',
    
            // Ornitisquios
            'Los Ornitisquios (Ornithischia), que en griego significan «caderas de ave», 
            son dinosaurios pertenecientes a uno de los dos órdenes de dinosaurios que vivieron desde el Triásico 
            Superior hasta el Cretácico superior, estos dinosaurios tenían la pelvis de forma similar a la de las aves.',
    
            // Sauristiquios
            'Los saurisquios (Saurischia), que en griego significa «cadera de lagarto», era uno 
            de los dos órdenes de dinosaurios que vivieron desde el Triásico superior hace 228 millones de años, 
            produciéndose una enorme diversificación entre el Jurásico y el Cretácico.
            Su característica principal son las caderas similares a las de los lagartos.',
    
            // Museos de dinosaurios en México
            'Si te gusta el universo de los dinosaurios, entonces tienes que descubrir los 
            tesoros que resguardan los museos de estas especies desparecidas, entre información sobre su existencia 
            sobre la Tierra, así como material que te describe dónde fueron hallados sus restos.',
            
            // Causas de extinción
            'Resulta cuando menos difícil de entender cómo unos animales que dominaron la
            Tierra durante unos 160 millones de años se extinguieron con tanta rapidez, y más si a esta rapidez le 
            añadimos que se produjo a nivel mundial y afectando a la totalidad de estos seres. Así las causas de su
            extinción son de lo más diversas.',

            // Documental - Dinosaurios: Lucha a Muerte
            'Un nuevo fósil conocido como "duelo de dinosaurios" nos muestra a un depredador y su presa tal como 
            murieron durante su enfrentamiento. Es un fósil impactante, pero también uno que reabre un debate muy 
            controvertido...',

            // Vídeo - Iceberg de Dinosaurios y Animales Prehistóricos
            'Los primeros dinosaurios aparecieron hace unos 243 millones de años, y aunque fueron descubiertos en la década 
            de 1840, hablar de ellos no ha pasado de moda. Sin embargo, así como cualquier otra temática no escapa de tener desde datos algo curiosos hasta perturbadores, 
            así como leyendas urbanas e incluso teorías de conspiración...'
            ];


        for ($i=0; $i<8; $i++) { 
            $Publi = new Publicacion(array(
                'Titulo' => $Titulos[$i],
                'Autor' => 'IrvinGreg',
                'Contenido' => $Descripciones[$i],
                'Imagen' => $Imagenes[$i],
                'Resumen' => $Resumenes[$i],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )); 
            $Publi->save();
        }  
    }
}
