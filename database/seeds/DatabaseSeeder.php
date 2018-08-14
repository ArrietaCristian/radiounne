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

    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti1','slug'=>'noti1','status'=>'0','titulo' => '“Visita de la Escritora Claudia Piñeiro”', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/f07a9e9336acb0326ee51c81a1c599bb_XL.jpg', 'texto' => 'La Biblioteca del Instituto de Ciencias Criminalísticas y Criminología, invita al público interesado a la charla con la escritora Claudia Piñeiro que se realizará el próximo viernes 17 de agosto a las 10:00 Hs. en la sede del instituto ubicado en Catamarca N°375. La charla tiene como objetivo abrir un espacio de encuentro directo entre la escritora del género policial y sus lectores, en la cual los asistentes podrán formular preguntas sobre las obras, el proceso de escritura, investigación, etc.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti2','slug'=>'noti2','status'=>'0','titulo' => 'Firma de Convenio entre el Instituto de Ciencias Criminalísticas y Criminología de la UNNE y el Colegio de de Profesionales en Ciencias Criminalísticas y Criminología de la Provincia de Corrientes', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/24ac8218ec2db84c29be7b837cf10e26_XL.jpg', 'texto' => 'En la sede del Instituto se llevó a cabo la Firma del convenio entre el Instituto de Ciencias Criminalística y Criminología y el Colegio de Profesionales en Ciencias Criminalísticas y Criminología de la Provincia de Corrientes, para la realización de Prácticas Supervisadas. En esa oportunidad asistieron las autoridades del Instituto Directora Lic. Ingrid Melis, Secretario Académico Dr Ronald Isler, el Secretario de Extensión y Vinculación Mgter Javier Comolli, y en representación del Colegio de Profesionales el Presidente Lic Neris Hernandez y la Lic. Meza.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti3','slug'=>'noti3','status'=>'0','titulo' => 'Criminalistas de la UNNE realizaron exploraciones en el cementerio de Goya', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/4ca31a130c30c3ccbb0332992bd3b406_XL.jpg', 'texto' => 'El pasado jueves 3 de Mayo un grupo de estudiantes, docentes y profesionales de la Carrera de Criminalística de la UNNE llegó hasta la ciudad correntina de Goya para realizar exploraciones con técnicas arqueológicas en el Cementerio Municipal “La Soledad” de esa localidad. La investigación se enmarca en una causa judicial del fuero Federal que busca dar con los restos de los desaparecidos de la última dictadura.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti4','slug'=>'noti4','status'=>'0','titulo' => 'Juguete-Art: Aprender de forma creativa', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/9ad7d231a57dcffaa99d5f95d8204ef3_XL.jpg', 'texto' => 'Juguete-art se llevará a cabo desde este sábado 12 en el Salón Azul del CCU, Córdoba 794 primer piso.Habrá dos talleres: uno dirigido a psicopedagogos, maestras jardineras, estimuladores, etc. y el otro a padres con niños de 0 a 6 años. Es arancelado y la inscripción está abierta.Más información:unnecursosccu@gmail.com o a 0379-4425006 Mara Agostina Dárdano es psicopedagoga. Junto al artista plástico Alejandro Pizarro se hacen cargo, desde este sábado y durante tres meses, de los talleres de "Diseño y Creación de Juguetes Didácticos" y de "Diseño, Creación y Juegos con Juguetes Didácticos entre Padres y Niños".', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti5','slug'=>'noti5','status'=>'0','titulo' => 'Curso de Posgrado “GESTIÓN SOCIO URBANA DEL SUELO RESIDENCIAL”', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/261c7e756693c00078e3b5bd5b70bd21_XL.jpg', 'texto' => 'La Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste dictará a partir del 6 de junio de 2018 el curso de posgrado "Gestión Sociourbana del Suelo Residencial". Corresponde al Módulo 6 del proyecto curricular de la Maestría en Gestión y Desarrollo de la Vivienda Social -MGDVS- Aprobada por Resolución CS UNNE Nº 1102/15 Reedición de MGDVS.- Carrera nueva con Dictamen Favorable CONEAU Nº 10.965/11, con los profesores dictantes Dra. MARÍA CRISTINA CRAVINO; Mgter. Arq. GUILLERMO MARZZIONI; Arq. EDUARDO REESE y Abogado HERNÁN PETRELLI.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti6','slug'=>'noti6','status'=>'0','titulo' => 'Topografías Afectivas; Mapas mentales, Bitácoras Pulsionales', 'urlmultimedia' => '', 'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/c7aeb3df1c254dc3ed99f9238cc8a282_XL.jpg', 'texto' => 'Topografías Afectivas; es la primer muestras de proyectos estudiantiles curada por Daniel Fischer. La misma se presentará del  10 al 22 de mayo de 2018 en la Facultad de Arquitectura y Diseño Gráfico de la Universidad Nacional Del Nordeste (UNNE) Con un carácter alternativo y dinámico se pondrá en evidencia 50 trabajos seleccionados  de la cátedra Sistemas de Representación de la Carrera de diseño Gráfico en donde se busca dar cuenta del potencial creativo y operativo de los estudiantes.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti7','slug'=>'noti7','status'=>'0','titulo' => 'Seminario Internacional "POLÍTICAS HABITACIONALES VIGENTES EN AMÉRICA LATINA Y ESPAÑA"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/0176750c773a9dd29a31c85a92d3e83f_XL.jpg', 'texto' => 'El Seminario tendrá lugar los días 7 y 8 de mayo en la Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste. La Maestría en Gestión y Desarrollo de la Vivienda Social es una Carrera de Posgrado de la Facultad de Arquitectura y Urbanismo, que propone en su programa académico la realización de un Seminario Internacional, intensivo de dos días, abierto a la comunidad académica en general y a los distintos Organismos Públicos vinculados al hábitat y la ciudad.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti8','slug'=>'noti8','status'=>'0','titulo' => 'Charla interactiva con Coco Cerrella en la FAU', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/88c8acd23703263c3337f366e33481ec_XL.jpg', 'texto' => 'El próximo 13 de abril a las 10 hs visitará la Facultad de Arquitectura y Urbanismo el reconocido Diseñador Gráfico Coco Cerrella para dar una charla interactiva sobre "Diseño Extremo. Coco Cerrella es diseñador gráfico y profesor de la Universidad de Buenos Aires, referente internacional del afichismo, además es coordinador del Departamento de Comunicación de la Asociación Civil Ingeniería Sin Fronteras y de proyectos para clientes como American Express, Fútbol Club Barcelona y Coca-Cola, coordina talleres creativos en la cárcel de Devoto y en el Instituto de Menores de San Martín.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti9','slug'=>'noti9','status'=>'0','titulo' => 'Reunión Informativa "Pies en el Barro y Manos a la Obra"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/9d87a069489f64950d5506595641a422_XL.jpg', 'texto' => 'La reunión informativa trata sobre el sistema de construcción biosustentable, incluido dentro del acuerdo firmado entre la EFEM, Amor Puro, Municipalidad de Tres Isletas y la Facultad de Arquitectura y Urbanismo de la Universidad Nacional del Nordeste. La EFEM (Education & Formation D´Enfents Du Monde) es una organización sin fines de lucro que trabaja por la educación y formación de los niños del mundo.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti10','slug'=>'noti10','status'=>'0','titulo' => 'Curso Regular Gratuito de “Técnicas Artísticas en Dibujo, Pintura, Grabado, Escultura y Audiovisual”', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/8c36b6b6d4eac8bb8839812d08c9c39c_XL.jpg', 'texto' => 'El Taller de Artes Visuales hace extensivo el inicio de las inscripciones de las ofertas académicas del ciclo 2018. Las inscripciones se realizan en Arturo Illia 353 de 8 a 12hs y de 18 a 20hs. a partir del 1 Marzo de 2018. La duración del Curso Regular de “Técnicas Artísticas en Dibujo, Pintura, Grabado, Escultura y Audiovisual” es de un año de duración, el inicio de clases es el 19 de marzo de 2018 en el Taller de Artes Visuales situado en la calle Arturo Illia 353 de la Ciudad de Resistencia. El horario de cursada será de lunes a viernes de 18:00 a 21:00 hs.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti11','slug'=>'noti11','status'=>'0','titulo' => 'Diplomatura Gratuita "Técnicas para la Producción Visual"', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/6c84d533fc229526581c779693b8a623_XL.jpg', 'texto' => 'El Taller de Artes Visuales hace extensivo el inicio de las inscripciones de las ofertas académicas del ciclo 2018. Las inscripciones se realizan en Arturo Illia 353 de 8 a 12hs y de 18 a 20hs. a partir del 1 Marzo de 2018. La duración de la Diplomatura "Técnicas para la Producción Visual" es de un año de duración, el inicio de clases es el 19 de marzo de 2018 en el Taller de Artes Visuales situado en la calle Arturo Illia 353 de la Ciudad de Resistencia. El horario de cursada será de lunes a viernes de 18:00 a 21:00 hs.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti12','slug'=>'noti12','status'=>'0','titulo' => 'Curso de posgrado: “MODELOS DE GESTIÓN HABITACIONAL II”', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/002e8e491b09a55f1bac8b9f7f969c26_XL.jpg', 'texto' => 'Del 28 de febrero al 20 de abril de 2018 se llevará a cabo el curso de posgrado “Modelos de Gestión Habitacional II” en la Facultad de Arquitectura y Urbanismo. Este curso aborda la comprensión de los modelos de gestión habitacional rural y urbana, implicados en las distintas tipologías de respuestas en países del Cono Sur Americano (Argentina y Chile) y de España. Aporta elementos de análisis para reconocer las transformaciones producidas en las últimas décadas a partir de las políticas, decisiones, acciones e inversiones realizadas, reconociendo también, los impactos sobre las condiciones de vida de la población rural y urbana. ', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'1','descripcion'=>'Noti13','slug'=>'noti13','status'=>'0','titulo' => 'Conferencia Abierta Rio de Janeiro y Niterói: Planificación Urbana y Proyectos para la Movilidad Ciudadana.', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/cfaddfc2bf2e9424ee07b2e09e36451f_XL.jpg', 'texto' => 'El 13 de diciembre de 2017 a las 18 hs, la Facultad de Arquitectura y Urbanismo realizará la Conferencia Abierta para el público en general "Rio de Janeiro y Niterói: Planificación Urbana y Proyectos para la Movilidad Ciudadana" disertada por la Dra. Arq. Verena ANDREATTA. La Conferencia se realiza en el marco de la Segunda Edición de la Maestría en Gestión y Desarrollo de la Vivienda Social.', 'totalV'=>'0'));
    	post::create(array('user_id'=>'1','category_id'=>'2','descripcion'=>'Noti14','slug'=>'noti14','status'=>'0','titulo' => 'Foro Usina Ciudad Inteligente Argentina realizado en la FAU', 'urlmultimedia' => '',  'cabeceraimagen' => 'http://medios.unne.edu.ar/media/k2/items/cache/5937f741237693bc434dc4d961ec0148_XL.jpg', 'texto' => 'Los días 4 y 5 de diciembre la Facultad de Arquitectura y Urbanismo participó en diferentes espacios del Foro Usina Ciudad Inteligente Argentina, para cuyo desarrollo la ciudad de Resistencia fue seleccionada a partir de una postulación presentada por la Municipalidad de Resistencia con el aval de FAU.', 'totalV'=>'0'));

    }

    private function seedImagen(){

    	DB::table('Imagenes')->delete();

    	Imagen::create(array('descripcion' => 'cabecera', 'url' => 'http://localhost:8000/public/img/ATaWKfzowR7zCjpt1lqCQsdYk2fMQstf5LeQVWdw.jpeg'));
    	Imagen::create(array('descripcion' => 'logounne', 'url' => 'http://localhost:8000/public/img/NOPe6JZM6HWveaJnWY6ljLcepj7RUKu76pfD9bks.jpeg'));
    	Imagen::create(array('descripcion' => 'faceicono', 'url' => 'http://localhost:8000/public/img/fhbaRcNlt4q2O3LJDM9p4atfKZsBxql2E52WiXDp.png'));
      Imagen::create(array('descripcion' => 'twittericono', 'url' => 'http://localhost:8000/public/img/07Iu0H9nBGo0qW6ttAeunmoo1sqBOZMVIu36yIpO.png'));
    	Imagen::create(array('descripcion' => 'instaicono', 'url' => 'http://localhost:8000/public/img/2TOlzwdlZJRDGQh9wOyARjddqZViIrypq7jDIXGi.png'));
    	
    	Imagen::create(array('descripcion' => 'youtubeicono', 'url' => 'http://localhost:8000/public/img/BfbqFeDU44424DDveCJc3P64j0CcpV0WKgqrMkn3.png'));
      Imagen::create(array('descripcion' => 'googleeicono', 'url' => 'http://localhost:8000/public/img/fItxuK6CQvOBGaSJApJpswSv9DvQwykk43ILAOPJ.png'));
      Imagen::create(array('descripcion' => 'latardenosunne', 'url' => 'http://localhost:8000/public/img/1A1SbHgqIG9ws99Qo1dYHStczwA0au6A5PCXmfs0.jpeg'));      
      
      Imagen::create(array('descripcion' => 'tecparaelcambio', 'url' => 'http://localhost:8000/public/img/yf5eY7cjyh0GFOFERadcbDV337j2GIOvnPq6nJYu.jpeg'));

      Imagen::create(array('descripcion' => 'alas6', 'url' => 'http://localhost:8000/public/img/dB4kSm9dYQ9NoOysRmiecJ70qGK1k5x13OGvhcIv.jpeg'));
      Imagen::create(array('descripcion' => 'cafecortado', 'url' => 'http://localhost:8000/public/img/Fc3qcn09OMgo61ei6LfcCD7d3iJxUdeKnaIXCfKQ.jpeg'));
      Imagen::create(array('descripcion' => 'ciudadinvisible', 'url' => 'http://localhost:8000/public/img/Op8PLwwZAvPQMTwoqWdZz0ETWltJnD5XY7IE0hte.jpeg'));
      Imagen::create(array('descripcion' => 'eraporabajo', 'url' => 'http://localhost:8000/public/img/ADwRN3olyd92IlA1JdnizgmAVe82yjRlgb7dlNkr.jpeg'));
      Imagen::create(array('descripcion' => 'partedeldia', 'url' => 'http://localhost:8000/public/img/BUnBJpViLD3qUc8vxBrVp9YWRLAt3mAW8dGIa647.jpeg'));
      Imagen::create(array('descripcion' => 'elclubdelasalud', 'url' => 'http://localhost:8000/public/img/jdOj7cddOIHyQGhETCIUSDl1vWChpHgHXs3Cfe8a.jpeg'));
      Imagen::create(array('descripcion' => 'vocesdelaAF', 'url' => 'http://localhost:8000/public/img/BAXgCOtup4L9n8Z3FmNvQRu7qkj9r5jAvvVZH8sI.jpeg'));
      Imagen::create(array('descripcion' => 'INTAconvoz', 'url' => 'http://localhost:8000/public/img/ny69K9L9R2bXJ5lEym6WSzbP8QUXxO5Hykk0H9qX.jpeg'));
      Imagen::create(array('descripcion' => 'larevista', 'url' => 'http://localhost:8000/public/img/WTmwEBzVzQuPM70bwvvtaIejf9E3Toeu7moD271r.jpeg'));
      Imagen::create(array('descripcion' => 'llegalatarde', 'url' => 'http://localhost:8000/public/img/vUHUzG1fY18qsyzkzAKZuicAysASos4LFRIjAxr5.jpeg'));
      Imagen::create(array('descripcion' => 'startup', 'url' => 'http://localhost:8000/public/img/Gwl7InCEIjUWLYJzFDFjGSp2ZslflVK6U9pm6scN.jpeg'));
      Imagen::create(array('descripcion' => 'raices', 'url' => 'http://localhost:8000/public/img/3RzHnWZUBgzrsgSwfkneuQvsn4a3FvcbuW6XNlI6.jpeg'));
      Imagen::create(array('descripcion' => 'todoslosvientos', 'url' => 'http://localhost:8000/public/img/2CnefnqJmbtuZV46k3b2TyJOHWSsQfIjl6JHvAsg.jpeg'));
      Imagen::create(array('descripcion' => 'santosypec', 'url' => 'http://localhost:8000/public/img/WcnCmOpaU7HOhkQz4AL0lgXxEPTXCCtlzAgu2wUe.jpeg'));
      Imagen::create(array('descripcion' => 'malditacostumbre', 'url' => 'http://localhost:8000/public/img/OYYKWm6oApnGosWQWsbovQ0UVGylEQ58KHrAjgZs.jpeg'));
      Imagen::create(array('descripcion' => 'folklore', 'url' => 'http://localhost:8000/public/img/T7PHr1xFLWpjTRSE38cdZrInN0AS9NsQIasgDqnC.jpeg'));
      Imagen::create(array('descripcion' => 'lahoradelAgro', 'url' => 'http://localhost:8000/public/img/JsFHP3NJnKImD9M2qYAwfmeer09jpTJ80u9xfv9Y.jpeg'));
      Imagen::create(array('descripcion' => 'desdeadentro', 'url' => 'http://localhost:8000/public/img/1D6yXTaqGp3CNRAjGLv5SK0zeMZaYWnp7yj2n6v6.jpeg'));
      Imagen::create(array('descripcion' => 'elbaul', 'url' => 'http://localhost:8000/public/img/8GOO5tqjSrMViwUQD4XwAb2l4t7cdLEzyIFBmW8B.jpeg'));

      Imagen::create(array('descripcion' => 'gifradio', 'url' => 'http://localhost:8000/public/img/fzxMDWWZjtN0aEaPAEw66DRgSTjuvxrOV1Cu9My2.gif'));

    }


}
