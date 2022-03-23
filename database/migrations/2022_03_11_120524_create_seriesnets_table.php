<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesnetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seriesnets', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Temporadas');
            $table->string('Director');
            $table->string('Sinopsis');
            $table->string('Imagen');
            $table->string('Tipo');
            $table->timestamps();
        });

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Agents Of Shield",
        "Temporadas"=>"7",
        "Director"=>"Jed Whedon",
        "Imagen" => "agentes.jpg",
        "Sinopsis"=>" Un grupo de agentes comandados por Phil Coulson, de la organización internacional de seguridad S.H.I.E.L.D., investiga lo nuevo, lo extraño y lo desconocido, en nuestro planeta y fuera de él.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Fariña",
        "Temporadas"=>"1",
        "Director"=>"Javier Rey",
        "Imagen" => "fariña.jpg",
        "Sinopsis"=>"Ambientada en la Galicia de los 80, cuando el sector pesquero se transformó dejando a muchos pescadores en deuda, abriendo la puerta a actividades de contrabando y narcotráfico.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Perdidos",
        "Temporadas"=>"5",
        "Director"=>"JJ Abrams",
        "Imagen" => "lost.jpg",
        "Sinopsis"=>"Los supervivientes de un accidente aéreo se ven obligados a trabajar juntos para sobrevivir en una isla tropical aparentemente desierta.",
        "Tipo"=>"Free"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Peaky Blinders",
        "Temporadas"=>"6",
        "Director"=>"Steven Knight",
        "Imagen" => "peaky.jpg",
        "Sinopsis"=>"Una epopeya familiar de gánsteres ambientada en 1919 en Birmingham, Inglaterra; centrada en una pandilla que cosía cuchillas de afeitar a la visera de sus gorras, y en su feroz jefe Tommy Shelby.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Sex Education",
        "Temporadas"=>"5",
        "Director"=>"Laurie Nunn",
        "Imagen" => "sex.jpg",
        "Sinopsis"=>"Un adolescente cuya madre es sexóloga forma equipo con una compañera de clase para montar una clínica de sexología encubierta en su instituto.
        ",
        "Tipo"=>"Free"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Stranger Things",
        "Temporadas"=>"5",
        "Director"=>"Matt Duffer",
        "Imagen" => "stranger.jpg",
        "Sinopsis"=>"Cuando un chico desaparece, su madre, el jefe de policía y sus amigos deben enfrentarse a fuerzas terroríficas para traerlo de vuelta.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Suits",
        "Temporadas"=>"5",
        "Director"=>"Aaron Korsh",
        "Imagen" => "suits.jpg",
        "Sinopsis"=>"A la fuga después de que un negocio de drogas saliera mal, Mike Ross, un hombre brillante a pesar de no haber acabado sus estudios, se encuentra trabajando con Harvey Specter, uno de los mejores abogados de la ciudad de Nueva York.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Superstore",
        "Temporadas"=>"5",
        "Director"=>"Justin Splitzer",
        "Imagen" => "superstore.jpg",
        "Sinopsis"=>"Durante su primer día en el trabajo en una tienda de cajas grandes, Jonah causa una mala primera impresión en la gerente de piso Amy, y atrae el interés romántico de la asistente de gerente Dina.",
        "Tipo"=>"Free"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "The Last Kingdom",
        "Temporadas"=>"5",
        "Director"=>"Matt Hardy",
        "Imagen" => "last.jpg",
        "Sinopsis"=>"Ambientada en la Inglaterra histórica de 800-900DC. El conflicto entre vikingos y sajones por el control de las tierras. El personaje principal es ficticio, aunque su tierra y los que se la contestan - Ubbe y Guthrum - son figuras históricas.",
        "Tipo"=>"Pago"
        ]);

        DB::table("seriesnets")
        ->insert([
        "Nombre" => "Vikings",
        "Temporadas"=>"5",
        "Director"=>"Michael Hirst",
        "Imagen" => "vikingos.jpg",
        "Sinopsis"=>"El brutal y misterioso mundo de Ragnar Lothbrok, un guerrero y agricultor vikingo que anhela explorar y asaltar las costas distantes a lo largo del océano.",
        "Tipo"=>"Free"
        ]);
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seriesnets');
    }
}
