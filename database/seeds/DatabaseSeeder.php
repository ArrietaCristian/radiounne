<?php

use Illuminate\Database\Seeder;
use App\post;
use App\Imagen;
use App\Category;
use App\Tag;
use App\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	self::seedCategory();
  		$this->command->info('Tabla Categories inicializada con datos!');

  		self::seedTags();
  		$this->command->info('Tabla tags inicializada con datos!');

  		self::seedUsers();
  		$this->command->info('Tabla users inicializada con datos!');


    	self::seedPost();
  		$this->command->info('Tabla posts inicializada con datos!');

        // $this->call(UsersTableSeeder::class);
        self::seedImagen();
  		$this->command->info('Tabla Imagenes inicializada con datos!');
    }


    private function seedCategory(){
    	DB::table('categories')->delete();
    	Category::create(array('descripcion'=>'C1', 'slug'=>'c1'));
    	Category::create(array('descripcion'=>'C2', 'slug'=>'c2'));
    }

     private function seedTags(){
    	DB::table('tags')->delete();
    	Tag::create(array('descripcion'=>'T1', 'slug'=>'t1'));
    	Tag::create(array('descripcion'=>'T2', 'slug'=>'t2'));
    }

     private function seedUsers(){
    	DB::table('users')->delete();
    	User::create(array('name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=> bcrypt('123')));
    	
    }




    private function seedPost(){

    	DB::table('posts')->delete();

    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti1','slug'=>'noti1','status'=>'publicado','titulo' => '“Escribir es una especie de refugio de la realidad”', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/37351273f99ebc95d8a67f9681855cd2_XL.jpg', 'texto' => 'Así lo expresa Matías Carmagnola, autor del libro “El adentro incómodo” que se presenta hoy a las 19:30hs en el Salón Azul del Centro Cultural Universitario (Córdoba y 9 de julio). El CCU dialogó con él.Matías Carmagnola nació en 1988 en Corrientes, Argentina. Es narrador y licenciado en psicología. en el año 2014 obtuvo el primer premio de cuento en el Concurso de Letras organizado por la UNNE y en el 2016 recibió una mención especial en dicho concurso. En el 2015 obtuvo el primer premio de cuento en el Concurso Internacional organizado por el Instituto Cultural Lationoamericano . Este es su primer libro de cuentos de la Editorial ARIES. El CCU dialogó con él para saber un poco más de su libro.'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti2','slug'=>'noti2','status'=>'publicado','titulo' => 'El Elenco Estable del Taller de Teatro del CCU presenta “El Zoo de cristal”', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/7557b15d39f0f4403460174b3a48b1fe_XL.jpg', 'texto' => 'La obra de Tennessee Williams, versionada por el director Ángel Quintela, sube a escena el sábado 19 a las 21:30hs en el Teatro de la Biblioteca Mariño (Santa Fe 847).El elenco estable del Taller de Teatro del Centro Cultural Universitario de la UNNE estrena la obra el “Zoo de Cristal” del autor norteamericano Tennessee Williams, en la versión del profesor del taller de teatro, el director Ángel Quintela. Sobre la obra: Década de 1930, sur de Estados Unidos. Una familia de clase media, en la que el padre ha huido del hogar, se encuentra inmersa en una sociedad que no acaba de despegar de la crisis económica. La hija, una joven que colecciona figuras de cristal, bellas y frágiles, es la metáfora perfecta para hablar de una familia que parece que se va a romper.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti3','slug'=>'noti3','status'=>'publicado','titulo' => 'Semana a pura literatura en el CCU', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/88b72442fc378fc76c587ff81f25e63a_XL.jpg', 'texto' => 'Presentaciones de libros y Festival de Poesía, en la Agenda Semanal del Centro Cultural Universitario -Semana del 14 al 19 de mayo. Lunes 14: 18 a 20hs - Sala del Sol - Charla debate Aborto Legal. Victoria Tesoriero y Jenny Duran, ambas integrantes de Católicas por el Derecho a Decidir.Católicas por el Derecho a Decidir Argentina es un movimiento autónomo de personas católicas, comprometidas con la defensa de los derechos de las mujeres, especialmente los que se refieren a la sexualidad y a la reproducción humana, y a una vida libre de violencia y discriminación. Trabaja por la equidad en las relaciones de género y por la ciudadanía de las mujeres contrarrestando, desde una perspectiva teológica y feminista, los fundamentalismos religiosos. Invita ConGéner Información al correo:congenero@hotmail.com '));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti4','slug'=>'noti4','status'=>'publicado','titulo' => 'Juguete-Art: Aprender de forma creativa', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/9ad7d231a57dcffaa99d5f95d8204ef3_XL.jpg', 'texto' => 'Juguete-art se llevará a cabo desde este sábado 12 en el Salón Azul del CCU, Córdoba 794 primer piso.Habrá dos talleres: uno dirigido a psicopedagogos, maestras jardineras, estimuladores, etc. y el otro a padres con niños de 0 a 6 años. Es arancelado y la inscripción está abierta.Más información:unnecursosccu@gmail.com o a 0379-4425006 Mara Agostina Dárdano es psicopedagoga. Junto al artista plástico Alejandro Pizarro se hacen cargo, desde este sábado y durante tres meses, de los talleres de "Diseño y Creación de Juguetes Didácticos" y de "Diseño, Creación y Juegos con Juguetes Didácticos entre Padres y Niños".'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti5','slug'=>'noti5','status'=>'publicado','titulo' => 'Curso de Posgrado “GESTIÓN SOCIO URBANA DEL SUELO RESIDENCIAL”', 'urlmultimedia' => 'http://medios.unne.edu.ar/media/k2/items/cache/261c7e756693c00078e3b5bd5b70bd21_XL.jpg', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/261c7e756693c00078e3b5bd5b70bd21_XL.jpg', 'texto' => 'La Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste dictará a partir del 6 de junio de 2018 el curso de posgrado "Gestión Sociourbana del Suelo Residencial". Corresponde al Módulo 6 del proyecto curricular de la Maestría en Gestión y Desarrollo de la Vivienda Social -MGDVS- Aprobada por Resolución CS UNNE Nº 1102/15 Reedición de MGDVS.- Carrera nueva con Dictamen Favorable CONEAU Nº 10.965/11, con los profesores dictantes Dra. MARÍA CRISTINA CRAVINO; Mgter. Arq. GUILLERMO MARZZIONI; Arq. EDUARDO REESE y Abogado HERNÁN PETRELLI.'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti6','slug'=>'noti6','status'=>'publicado','titulo' => 'Topografías Afectivas; Mapas mentales, Bitácoras Pulsionales', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/c7aeb3df1c254dc3ed99f9238cc8a282_XL.jpg', 'texto' => 'Topografías Afectivas; es la primer muestras de proyectos estudiantiles curada por Daniel Fischer. La misma se presentará del  10 al 22 de mayo de 2018 en la Facultad de Arquitectura y Diseño Gráfico de la Universidad Nacional Del Nordeste (UNNE) Con un carácter alternativo y dinámico se pondrá en evidencia 50 trabajos seleccionados  de la cátedra Sistemas de Representación de la Carrera de diseño Gráfico en donde se busca dar cuenta del potencial creativo y operativo de los estudiantes.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti7','slug'=>'noti7','status'=>'publicado','titulo' => 'Seminario Internacional "POLÍTICAS HABITACIONALES VIGENTES EN AMÉRICA LATINA Y ESPAÑA"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/0176750c773a9dd29a31c85a92d3e83f_XL.jpg', 'texto' => 'El Seminario tendrá lugar los días 7 y 8 de mayo en la Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste. La Maestría en Gestión y Desarrollo de la Vivienda Social es una Carrera de Posgrado de la Facultad de Arquitectura y Urbanismo, que propone en su programa académico la realización de un Seminario Internacional, intensivo de dos días, abierto a la comunidad académica en general y a los distintos Organismos Públicos vinculados al hábitat y la ciudad.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti8','slug'=>'noti8','status'=>'publicado','titulo' => 'Charla interactiva con Coco Cerrella en la FAU', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/88c8acd23703263c3337f366e33481ec_XL.jpg', 'texto' => 'El próximo 13 de abril a las 10 hs visitará la Facultad de Arquitectura y Urbanismo el reconocido Diseñador Gráfico Coco Cerrella para dar una charla interactiva sobre "Diseño Extremo. Coco Cerrella es diseñador gráfico y profesor de la Universidad de Buenos Aires, referente internacional del afichismo, además es coordinador del Departamento de Comunicación de la Asociación Civil Ingeniería Sin Fronteras y de proyectos para clientes como American Express, Fútbol Club Barcelona y Coca-Cola, coordina talleres creativos en la cárcel de Devoto y en el Instituto de Menores de San Martín.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti9','slug'=>'noti9','status'=>'publicado','titulo' => 'Reunión Informativa "Pies en el Barro y Manos a la Obra"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/9d87a069489f64950d5506595641a422_XL.jpg', 'texto' => 'La reunión informativa trata sobre el sistema de construcción biosustentable, incluido dentro del acuerdo firmado entre la EFEM, Amor Puro, Municipalidad de Tres Isletas y la Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste. La EFEM (Education & Formation D´Enfents Du Monde) es una organización sin fines de lucro que trabaja por la educación y formación de los niños del mundo.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti10','slug'=>'noti10','status'=>'publicado','titulo' => 'Curso Regular Gratuito de “Técnicas Artísticas en Dibujo, Pintura, Grabado, Escultura y Audiovisual”', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/8c36b6b6d4eac8bb8839812d08c9c39c_XL.jpg', 'texto' => 'El Taller de Artes Visuales hace extensivo el inicio de las inscripciones de las ofertas académicas del ciclo 2018. Las inscripciones se realizan en Arturo Illia 353 de 8 a 12hs y de 18 a 20hs. a partir del 1 Marzo de 2018. La duración del Curso Regular de “Técnicas Artísticas en Dibujo, Pintura, Grabado, Escultura y Audiovisual” es de un año de duración, el inicio de clases es el 19 de marzo de 2018 en el Taller de Artes Visuales situado en la calle Arturo Illia 353 de la Ciudad de Resistencia. El horario de cursada será de lunes a viernes de 18:00 a 21:00 hs.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti11','slug'=>'noti11','status'=>'publicado','titulo' => 'Diplomatura Gratuita "Técnicas para la Producción Visual"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/6c84d533fc229526581c779693b8a623_XL.jpg', 'texto' => 'El Taller de Artes Visuales hace extensivo el inicio de las inscripciones de las ofertas académicas del ciclo 2018. Las inscripciones se realizan en Arturo Illia 353 de 8 a 12hs y de 18 a 20hs. a partir del 1 Marzo de 2018. La duración de la Diplomatura "Técnicas para la Producción Visual" es de un año de duración, el inicio de clases es el 19 de marzo de 2018 en el Taller de Artes Visuales situado en la calle Arturo Illia 353 de la Ciudad de Resistencia. El horario de cursada será de lunes a viernes de 18:00 a 21:00 hs.'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti12','slug'=>'noti12','status'=>'publicado','titulo' => 'Curso de posgrado: “MODELOS DE GESTIÓN HABITACIONAL II”', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/002e8e491b09a55f1bac8b9f7f969c26_XL.jpg', 'texto' => 'Del 28 de febrero al 20 de abril de 2018 se llevará a cabo el curso de posgrado “Modelos de Gestión Habitacional II” en la Facultad de Arquitectura y Urbanismo. Este curso aborda la comprensión de los modelos de gestión habitacional rural y urbana, implicados en las distintas tipologías de respuestas en países del Cono Sur Americano (Argentina y Chile) y de España. Aporta elementos de análisis para reconocer las transformaciones producidas en las últimas décadas a partir de las políticas, decisiones, acciones e inversiones realizadas, reconociendo también, los impactos sobre las condiciones de vida de la población rural y urbana. '));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti13','slug'=>'noti13','status'=>'publicado','titulo' => 'Conferencia Abierta Rio de Janeiro y Niterói: Planificación Urbana y Proyectos para la Movilidad Ciudadana.', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/cfaddfc2bf2e9424ee07b2e09e36451f_XL.jpg', 'texto' => 'El 13 de diciembre de 2017 a las 18 hs, la Facultad de Arquitectura y Urbanismo realizará la Conferencia Abierta para el público en general "Rio de Janeiro y Niterói: Planificación Urbana y Proyectos para la Movilidad Ciudadana" disertada por la Dra. Arq. Verena ANDREATTA. La Conferencia se realiza en el marco de la Segunda Edición de la Maestría en Gestión y Desarrollo de la Vivienda Social.'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti14','slug'=>'noti14','status'=>'publicado','titulo' => 'Foro Usina Ciudad Inteligente Argentina realizado en la FAU', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/5937f741237693bc434dc4d961ec0148_XL.jpg', 'texto' => 'Los días 4 y 5 de diciembre la Facultad de Arquitectura y Urbanismo participó en diferentes espacios del Foro Usina Ciudad Inteligente Argentina, para cuyo desarrollo la ciudad de Resistencia fue seleccionada a partir de una postulación presentada por la Municipalidad de Resistencia con el aval de FAU.'));

    }

    private function seedImagen(){

    	DB::table('Imagenes')->delete();

    	Imagen::create(array('descripcion' => 'cabecera1', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\44444.jpg'));
    	Imagen::create(array('descripcion' => 'cabecera2', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\22222.jpg'));
    	Imagen::create(array('descripcion' => 'cabecera3', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\33333.jpg'));
    	Imagen::create(array('descripcion' => 'imgRadio1', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\1.jpg'));
    	Imagen::create(array('descripcion' => 'imgRadio2', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\2.jpg'));
    	Imagen::create(array('descripcion' => 'imgRadio3', 'url' => 'C:\Users\cristian\Documents\proyecto\radio\public\imagens\3.jpg'));

    }


}
