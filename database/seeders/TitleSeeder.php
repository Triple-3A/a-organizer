<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Title;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::create(array(
            'title' => "Baño",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Higiene en inodoro",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Vestirse",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Actividad sexual",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Alimentación",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Comer",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Movilidad",
            'type' => "básicos",
        ));

        Title::create(array(
            'title' => "Cuidado de otros",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Cuidado de mascotas",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Criar niños",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Sistemas de información",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Ir de compras",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Finanzas",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Hogar",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Salud",
            'type' => "instrumentales",
        ));

        Title::create(array(
            'title' => "Educación Formal",
            'type' => "educación",
        ));

        Title::create(array(
            'title' => "Cursos",
            'type' => "educación",
        ));

        Title::create(array(
            'title' => "Búsqueda de empleo",
            'type' => "trabajo",
        ));

        Title::create(array(
            'title' => "Desempeño laboral",
            'type' => "trabajo",
        ));

        Title::create(array(
            'title' => "Participación",
            'type' => "juego",
        ));

        Title::create(array(
            'title' => "Exploración del juego",
            'type' => "juego",
        ));

        Title::create(array(
            'title' => "Exploración",
            'type' => "tiempo libre",
        ));

        Title::create(array(
            'title' => "Ocio",
            'type' => "tiempo libre",
        ));
    }
}
