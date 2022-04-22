<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Año');
            $table->string('Director');
            $table->string('Sinopsis');
            $table->string('Imagen');
            $table->string('Tipo');
            $table->timestamps();
        });

        DB::table("films")
        ->insert([
            "Nombre"=> "Fuego De Venganza",
            "Año"=> "2004",
            "Director"=> "Tony Scott",
            "Sinopsis"=> "En Ciudad de México, un asesino retirado busca venganza contra los que hicieron daño a la familia a la que había jurado proteger.",
            "Imagen"=> "fuego.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "La Naranja Mecanica",
            "Año"=> "1971",
            "Director"=> "Stanley Kubrick",
            "Sinopsis"=> "En el futuro, el sádico líder de una banda es encarcelado y se ofrece como voluntario para un experimento de reeducación, pero no sale según lo planeado.",
            "Imagen"=> "naranja.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "Star Wars: Amenaza Fantasma",
            "Año"=> "1999",
            "Director"=> "George Lucas",
            "Sinopsis"=> "Dos caballeros jedi escapan de un bloqueo hostil para ir en busca de aliados y conocen a un joven que podría restaurar el equilibrio en la Fuerza.",
            "Imagen"=> "star1.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "Star Wars: El Ataque De Los Clones",
            "Año"=> "2002",
            "Director"=> "George Lucas",
            "Sinopsis"=> "Diez años después de conocerse por primera vez, Anakin Skywalker comparte un romance prohibido con Padmé Amidala, mientras que Obi-Wan Kenobi investiga un intento de asesinato de la senadora.",
            "Imagen"=> "star2.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "Star Wars: La Venganza De Los Sith",
            "Año"=> "2005",
            "Director"=> "George Lucas",
            "Sinopsis"=> "Tres años después de las Guerras Clon, los Jedi rescatan a Palpatine del Conde Dooku. Mientras Obi-Wan persigue una nueva amenaza, Anakin actúa como agente doble entre el Consejo Jedi y Palpatine.",
            "Imagen"=> "star3.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "El Club De La Lucha",
            "Año"=> "1999",
            "Director"=> "David Fincher",
            "Sinopsis"=> "Un oficinista insomne y un desentendido fabricante de jabones forman un club de lucha clandestino que se convierte en mucho más.",
            "Imagen"=> "club.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "Sleepers",
            "Año"=> "1996",
            "Director"=> "Barry Levinson",
            "Sinopsis"=> "Después de que una broma salga desastrosamente mal, un grupo de chicos es enviado a un centro de detención donde son maltratados",
            "Imagen"=> "sleepers.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "El Irlandes",
            "Año"=> "2019",
            "Director"=> "Martin Scorsese",
            "Sinopsis"=> "Un asesino a sueldo de la mafia recuerda su posible participación en el asesinato de Jimmy Hoffa.",
            "Imagen"=> "irlandes.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "Celda 211",
            "Año"=> "2009",
            "Director"=> "Daniel Monzon",
            "Sinopsis"=> "La historia de dos hombres en bandos opuestos durante un motín presidiario, y un guardia atrapado en esta rebelión que finge ser un preso para sobrevivir.",
            "Imagen"=> "celda.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("films")
        ->insert([
            "Nombre"=> "El Diablo A Todas Horas",
            "Año"=> "2020",
            "Director"=> "Antonio Campos",
            "Sinopsis"=> "Personajes siniestros convergen en torno a un joven dedicado a proteger a sus seres queridos en una ciudad apartada de la posguerra repleta de corrupción y brutalidad.",
            "Imagen"=> "diablo.jpg",
            "Tipo"=> "Pago"
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
