<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docus', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Año');
            $table->string('Director');
            $table->string('Sinopsis');
            $table->string('Imagen');
            $table->string('Tipo');
            $table->timestamps();
        });

        DB::table("docus")
        ->insert([
            "Nombre"=> "Conor Mcgregor: Notorious",
            "Año"=> "2017",
            "Director"=> "Gavin Fitzgerald",
            "Sinopsis"=> "Presentando acceso sin precedentes, momentos nunca antes vistos y metraje de peleas explosivas, este es un vistazo al detrás de cámaras definitivo del ícono deportivo",
            "Imagen"=> "conor.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "El Estafador De Tinder",
            "Año"=> "2022",
            "Director"=> "Felicity Morris",
            "Sinopsis"=> "Un estafador atrae a mujeres usando la popular aplicación de citas y las engaña con millones de dólares.",
            "Imagen"=> "tinder.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "800 Metros",
            "Año"=> "2022",
            "Director"=> "Silvia Aranda",
            "Sinopsis"=> "El 17 de agosto de 2017, España sufrió dos atentados terroristas perpetrados por jóvenes supuestamente integrados en la sociedad española.",
            "Imagen"=> "800.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "El Gran Hackeo",
            "Año"=> "2019",
            "Director"=> "Karim Amer",
            "Sinopsis"=> "El escándalo de Cambridge Analítica a través de los ojos de varios de los afectados.",
            "Imagen"=> "hackeo.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "Fyre",
            "Año"=> "2018",
            "Director"=> "Chris Smith",
            "Sinopsis"=> "Una exclusiva mirada a lo ocurrió entre bastidores con el desarrollo del famoso festival de música Fyre.",
            "Imagen"=> "fyre.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "22 De Julio",
            "Año"=> "2018",
            "Director"=> "Paul Greengrass",
            "Sinopsis"=> "Una historia en tres partes sobre el peor ataque terrorista en la historia de Noruega, en el que 70 personas perdieron la vida.",
            "Imagen"=> "julio.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "United 93",
            "Año"=> "2006",
            "Director"=> "Paul Greengrass",
            "Sinopsis"=> "Un relato en tiempo real de los eventos del vuelo 93 de United, uno de los aviones secuestrados el 11 de septiembre de 2001 que se estrelló cerca de Shanksville, Pensilvania",
            "Imagen"=> "united.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "Miss Americana",
            "Año"=> "2020",
            "Director"=> "Lana Wilson",
            "Sinopsis"=> "Una mirada a la icónica artista, Taylor Swift durante un momento de transformación en su vida.",
            "Imagen"=> "miss.jpg",
            "Tipo"=> "Pago"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "Procesion",
            "Año"=> "2021",
            "Director"=> "Robert Greene",
            "Sinopsis"=> "Un grupo de sobrevivientes de abuso sexual por parte de sacerdotes católicos luchan por la justicia.",
            "Imagen"=> "procesion.jpg",
            "Tipo"=> "Free"
        ]);

        DB::table("docus")
        ->insert([
            "Nombre"=> "Unsolved",
            "Año"=> "2018",
            "Director"=> "Kyle Long",
            "Sinopsis"=> "La investigación de los asesinatos de Tupac Shakur y Biggie Smalls.",
            "Imagen"=> "unsolved.jpg",
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
        Schema::dropIfExists('docus');
    }
}
