<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dinosaurio;

class DinosaurioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Mexico_City');

        // 1. Terópodos
        // 2. Sauropodomorfos
        // 3. Tireóforos
        // 4. Marginocéfalos
        // 5. Ornítopodos
        $ID_Suborden = [1, 2, 1, 5, ];

        $Nombres=['ABELISAURUS', 'ALAMOSAURUS', 'ALLOSAURUS', 'ANATOTIAN', 'ANCHICERATOPS',
                'ARCHAEOPTERIX','BAROSAURUS', 'BARYONIX', 'BRACHIOSAURUS', 'CARNOTAURUS', 
                'CENTROSAURUS', 'CETIOSAURUS','COELOPHYSIS', 'CORYTHOSAURUS', 'DEINONYCHUS', 
                'PARASAUROLOPHUS', 'PINACOSAURUS', 'PTERANODON', 'PACHYCEPHALOSAURUS','QUETZALCOATLUS', 
                'SPINOSAURUS', 'STEGOSAURUS', 'STEGOCERAS', 'SYNTARSUS', 'TRICERATOPS', 
                'TYRANNOSAURUS REX', 'VELOCIRAPTOR'];   

        $Alimentaciones=[
            'Carnívoro', 'Herbívoro', 'Carnívoro', 'Herbívoro', 'Herbívoro',
            'Carnívoro', 'Herbívoro', 'Carnívoro', 'Herbívoro', 'Carnívoro',
            'Herbívoro', 'Herbívoro', 'Carnívoro', 'Herbívoro', 'Carnívoro',
            'Herbívoro', 'Herbívoro', 'Carnívoro', 'Herbívoro', 'Carnívoro',
            'Carnívoro', 'Herbívoro', 'Herbívoro', 'Carnívoro', 'Herbívoro',
            'Carnívoro', 'Carnívoro'
    ];

        $Dimensiones=[
            '6.5 m', '20 m', '12 m', '12.2 m', '6 m',
            '0.5 m', '27 m', '9 m', '23 m', '7.5 m',
            '6 m', '18 m', '3 m', '10 m', '3 m',
            '10 m', '5 m', '7 m', '4.5 m', '15 m',
            '14 m', '7.5 m', '2.4 m', '3 m', '9 m',
            '14 m', '1.8 m'];

        $UbicacionesGeograficas=[
            'Argentina', 'Estados Unidos', 'Principalmente en África', 'Norteamérica', 'Este de Canadá',
            'Alemania', 'África', 'Europa', 'África del Norte', 'Sudamérica',
            'Canadá', 'África del Norte', 'Sur de Estados Unidos', 'Este de Canadá', 'Norteamérica',
            'Canadá', 'Mongolia y Norte de China', 'Norteamérica', 'Norteamérica', 'México',
            'África del Norte', 'Norteamérica', 'Norteamérica', 'Zimbawe', 'Norteamérica',
            'Norteamérica', 'Mongolia'];

        $Descripciones=['Este cazador de las llanuras de Sudamérica poseía unas poderosas 
        patas traseras que le daban una gran velocidad; con ellas 
        podía sorprender a sus víctimas en emboscadas; a esto se le añade su poderosa 
        cabeza provista de fuertes mandíbulas.',
        'Según los expertos, la fina y larga cola del Alamosaurus bien pudiera tener 
        dos finalidades: una sería la de equilibrar el peso de su cuerpo cuando se alzaba 
        para alcanzar las copas de los árboles más altos, y la 
        otra sería la de utilizarla como látigo para flagelar a sus depredadores.',
        'Estos grandes depredadores vivían en las llanuras de todo el planeta. Sus afilados 
        dientes y su capacidad de mantener una alta velocidad constante los hacía especialmente 
        temibles en las amplias llanuras; además, se juntaban en 
        manadas para cazar a otros dinosaurios de gran tamaño.',
        'El Anatotian tenía patas delanteras palmeadas, lo cual quiere decir que se desenvolvía 
        con gran facilidad en aguas profundas, y puesto que carecía de púas defensivas o una 
        buena velocidad para escapar, se supone que se introducía en lagos 
        o pantanos profundos para salvar su vida.',
        'Los expertos creen que este tipo de dinosaurios eran animales sociales que vivían en manadas
        dirigidas por un líder. Este era el encargado de decidir cuando emigrar de una zona a otra. Para
        dirimir quien era el líder, probablemente se realizaban duelos entre los machos',
    
        'Archaeopteryx es un género extinto de aves primitivas, con caracteres intermedios entre los 
        dinosaurios emplumados y las aves modernas. El nombre deriva del griego antiguo ἀρχαῖος 
        que significa «antiguo», y πτέρυξ, que significa «pluma» o «ala».',
        'Este enorme dinosaurio a pesar de tener las vértebras huecas para poder alzar su cabeza sin el menor de
        los problemas, muchos expertos creen que no podía mantenerla erguida por mucho tiempo debido a la distancia
        entre su corazón y su cerebro.',
        'Este antecesor del cocodrilo, que se desplazaba sobre sus patas traseras, se alimentaba presumiblemente de
        pescado y animales muertos. Para pescar se cree que utilizaba la gran garra curva que tenía en sus extremidades.',
        'Este enorme dinosaurio debía tener un apetito voraz y bien pudiera consumir una media de 1500 kg de plantas. 
        Desplazandose contiuamente en busca de alimento, tenía las patas delanteras más largas que las traseras y sus fosas
        nasales se encontraban en lo alto de su cabeza.',
        'Este veloz y contundente cazador poseía unos curiosos cuernos en la parte superior de su cabeza, que eran demasiado
        pequeños para ser utilizados como defensa. Se cree que eran meramente decorativos o eran distintivos entre sexos.',

        'Este herbívoro era demasiado pesado como para huir de sus depredadores, por tanto tenía un enorme cuerno en la cabeza
        para encararlos y hacerles frente, a esto se le añade que siempre andaban en manada y si algún depredador se acercaba demasiado,
        formaban un círculo infranqueable',
        'A este dinosaurio siempre se le relaciono con las profundidades marinas, sin embargo hoy esta admitido que era un dinosaurio
        de tierra firme, aunque esto no excluye que no se introdujera en lugares de agua dulce, sin estar mucho tiempo sumergido.',
        'Este dinosaurio cazaba pequeños dinosaurios e insectos, además con estudios recientes se sabe que comián incluso crías
        de su especie, Era demasiado ágil y veloz, de cuello alargado y flexible, similar a las serpientes actuales.',
        'Todos los expertos creen que la cresta que tenía el Corythosaurus era para emitir un peculiar sonido cuando el aire
        era expulsado por un conducto que comunicaba sus fosas nasales con este casco.',
        'Este dinosaurio estaba diseñado para la carrera, era ligero y tenía potentisimas patas traseras. Cazaba en manada y 
        algunos estudios demuestran que tenia amplias cuencas oculares lo que le permitía tener una gran agudeza visual 
        para elegir las presas que deseará.',

        'En lo referente a su peculiar cresta, son 3 las teorías hasta ahora coherentes: una es que era utilizada como una enorme
        bocina; la otra es que era un distintivo entre sexo y edad; y una tercera es que era utiliada como tubo de buceo o bomba de
        oxígeno para los dinosaurios.',
        'Su cola terminaba en una especie de maza compuesta con varios huesos soldados; esta maza era muy dura y pesada, y  
        para poder esgrimirla necesitaban unos portentosos músculos que se extendian desde la cadera hasta las patas. Aparte de
        esta cola, tenían una coraza externa que los protegía de sus depredadores.',
        'El Pteranodon era un volador sin dientes. Tenía una membrana de piel flexible en la barbilla para sacar peces, como 
        el pelícano actual. Su cresta puede haber sido de colores brillantes para engalanarse en la época de reproducción y 
        además funcionar como timón de dirección en el viento, era casi tan larga como el pico en la parte delantera.',
        'El Pachycephalosaurus fue un dinosaurio bípedo con un cráneo óseo sólido y compacto que resistía grandes golpes y 
        embestidas a toda velocidad. Muy famoso por películas como Jurassic Park donde realiza algunas apariciones y también 
        bastante popular por su particular aspecto y fisionomía.',
        'Este fue uno de los últimos pterosaurios, y hasta ahora el mayor animal volador que alguna vez halla volado sobre la Tierra.
        Debido a sus enormes dimensiones, esto no sería posible sin los vientos provenientes de las montañas, ya que gracias a estos
        podía alzar el vuelo y cazar sus presas con facilidad. Es llamado así por la deidad azteca Quetzalcóatl, la serpiente emplumada.',

        'Este dinosaurio es conocido por tener demasiados rediseños desde que fue descubierto. Otra característica es que tenía una membrana
        llena de conductos sanguíneos a lo largo de su espalda, la cual podría decirse que utilizaba para calentarse y refrigerarse; así podía
        aprovechar los primeros rayos de sol para poder entrar en actividad antes que el resto de los reptiles, con las consecuentes
        ventajas que eso le daba',
        'Este dinosaurio de cuerpo macizo avanzaba de orma lenta y pesada. Las púas de más de un metro que tenía en el extremo de su pesada
        cola mantenían a raya a sus depredadores, además poseía placas óseas que cubrían su dorso, quizá estas fueron usadas como placas
        solares para recoger el máximo de sol por las mañanas.',
        'El Stegoceras o "techo de cúpula" era un dinosaurio paquicefalosáurido que vivió durante el período Cretácico, hace unos 70 
        millones de años. Era un dinosaurio bípedo y herbívoro que vivió en lo que hoy es América del Norte. Al igual que otros 
        miembros de su familia, el Stegoceras tenía un cráneo óseo grueso.',
        'Se trataba de un dinosaurio pequeño y ágil, que según varios expertos tenía el cuerpo cubierto de plumas. Su alimentación estaba
        compuesta por insectos, pequeños dinosaurios o incluso mamíferos. Su gran velocidad le permitía cazar a sus presas y además
        huir de sus depredadores',
        'Este dinosaurio tenía pocos enemigos naturales y los que tenía, procuraban no ser alcanzados por los cuernos frontales de algo más de 
        un metro de largo, pues eran mortales cuando cargaban a una velocidad estimada de 35 km/. Su placa ósea era completamente
        maciza y le dada una formidable protección contra ataques o embestidas.', 

        'Fue el mayo carnívoro que alguna vez halla vivido en la Tierra. Se cree también que era uno de los más fieros; lo que no se sabe
        a ciencia cierta es su forma de cazar, podría ser que utilizaba la emboscada, o que lo hacía en manada, siendo en este último caso
        un dinosaurio imparable. Es conocido por ser el emblema en general de los dinosaurios, comenzando por ser uno de los dinosaurios más
        importantes de la saga de Jurassic Park y World.',
        'Este depredador que actuaba en manada, era un cazador insaciable. A su extraordinaria velocidad se le unía una grandísima inteligencia. 
        Con su descubrimiento, la idea que regía entre los científicos de que los dinosaurios eran lentos y torpes cambió totalmente.
        Se cree que fue el más inteligente de los dinosaurios.',
    ];

        $Imagenes=[
        'https://dinoanimals.com/wp-content/uploads/2016/08/Abelisaurus_6-949x475.jpg',
        'https://images.dinosaurpictures.org/alamosaurus__in_color__by_palaeozoologist-d6yyu6i_2f5a.jpg',
        'https://images.fineartamerica.com/images-medium-large/5-allosaurus-dinosaur-artwork-roger-harris.jpg',
        'https://images.dinosaurpictures.org/anatotitan-large-2_00b7.jpg',
        'http://4.bp.blogspot.com/_gY7IrU1Fe6c/SnCxb4Jq5vI/AAAAAAAAAHI/y-gDrTlZxuY/w1200-h630-p-k-no-nu/poca.jpg',
    
        'https://dinosaurios.co/wp-content/uploads/2019/11/Archaeopteryx-el-dinosaurio-volador-1200x675.jpg',
        'http://4.bp.blogspot.com/-1-H1WpyP8y0/VqLin62zk1I/AAAAAAAAE0o/Z9YGmwowNiU/s1600/Barosaurus.jpg',
        'https://vignette.wikia.nocookie.net/jurassicpark/images/7/70/JWE_DLC_dinosaur_Baryonyx_noui.jpg/revision/latest?cb=20180622105050&path-prefix=es',
        'https://dinosauriosonline.com/wp-content/uploads/2020/12/Brachiosaurus.jpg',
        'https://vignette.wikia.nocookie.net/jurassicpark/images/5/56/JWE_DLC_dinosaur_Carnotaurus_noui.jpg/revision/latest?cb=20180622111033&path-prefix=es',

        'https://images.dinosaurpictures.org/at_the_coast_of_inland_sea____centrosaurus_apertus_by_cheungchungtat-d7wgx6s_a345.jpg',
        'https://images.dinosaurpictures.org/cetiosaurus_eb59.jpg',
        'https://i.pinimg.com/originals/f1/7d/41/f17d411fc83e05927525eeba08cee903.jpg',
        'https://abcdino.com/wp-content/uploads/2020/07/corythosaurus-running.jpg',
        'https://www.billingsproductions.com/wp-content/uploads/2019/04/prod-dino-deinonychus-watcher-1440x810.jpg',

        'https://i.redd.it/plkj0nm7nqi21.jpg',
        'http://3.bp.blogspot.com/-1RH_Shrr1mM/UPw8hwj4m8I/AAAAAAAAFFA/tLdNRHn01n4/s1600/pinacosaurus1.jpg',
        'https://vignette.wikia.nocookie.net/isle/images/2/29/The_isle_pteranodon_new_2020.jpeg/revision/latest/scale-to-width-down/2000?cb=20200825030749',
        'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c6030c83-d20a-444a-bc0b-f41e06f5def1/d473zcr-19d99c1c-6f58-42f9-898f-75383e3aa8e1.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M2MDMwYzgzLWQyMGEtNDQ0YS1iYzBiLWY0MWUwNmY1ZGVmMVwvZDQ3M3pjci0xOWQ5OWMxYy02ZjU4LTQyZjktODk4Zi03NTM4M2UzYWE4ZTEuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.M_ZW8at7-0wBDX1JeQP9Hr9Fv01w84hZGIEjYnZ5ljQ',
        'https://i.pinimg.com/originals/54/8e/34/548e34975684248ef6281c2216f86de9.jpg',

        'https://getwallpapers.com/wallpaper/full/b/d/3/282038.jpg',
        'https://1.bp.blogspot.com/-xBbu93AcOR0/XPwyfyXmtYI/AAAAAAAABak/0jF_9_YYEmgqBqHtTfPyC1DDz3EZNTncQCLcBGAs/s1600/Stegosaurus%2Bcon%2Bcria.jpg',
        'https://images.dinosaurpictures.org/stegoceras-sheep_6b1b.jpg',
        'http://ayay.co.uk/backgrounds/dinosaurs/carnivore/syntarsus.jpg',
        'https://i.natgeofe.com/n/b96b572c-98e2-4ec2-a714-08a6b95cf646/triceratopshorridus_hexdcb.jpg?w=1200',

        'https://redhistoria.com/wp-content/uploads/2018/10/tiranosaurio.jpg',
        'https://dinosaurios.co/wp-content/uploads/2019/10/Velociraptors-caminando-por-la-costa-1200x900.jpg',
    ];

        for ($i=0; $i<27; $i++) { 
            $Suborden = new Dinosaurio(array(
                'ID_Suborden' => $ID_Suborden[$i],
                'Nombre' => $Nombres[$i],
                'Alimentación' => $Alimentaciones[$i],
                'Dimensiones' => $Dimensiones[$i],
                'Ubicación Geográfica' => $UbicacionesGeograficas[$i],
                'Descripción' => $Descripciones[$i],
                'Imagen' => $Imagenes[$i],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )); 
        }
    }
}
