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
        $baño = Title::create(array(
            'title' => "Baño",
            'type' => "básicos",
        ));

        $hiegieneEnInodoro = Title::create(array(
            'title' => "Higiene en inodoro",
            'type' => "básicos",
        ));

        $vestirse = Title::create(array(
            'title' => "Vestirse",
            'type' => "básicos",
        ));

        $actividadSexual = Title::create(array(
            'title' => "Actividad sexual",
            'type' => "básicos",
        ));

        $alimentacion = Title::create(array(
            'title' => "Alimentación",
            'type' => "básicos",
        ));

        $comer = Title::create(array(
            'title' => "Comer",
            'type' => "básicos",
        ));

        $movilidad = Title::create(array(
            'title' => "Movilidad",
            'type' => "básicos",
        ));

        $cuidadoDeOtros = Title::create(array(
            'title' => "Cuidado de otros",
            'type' => "instrumentales",
        ));

        $cuidadoDeMascotas = Title::create(array(
            'title' => "Cuidado de mascotas",
            'type' => "instrumentales",
        ));

        $criarNiños = Title::create(array(
            'title' => "Criar niños",
            'type' => "instrumentales",
        ));

        $sistemasInformacion = Title::create(array(
            'title' => "Sistemas de información",
            'type' => "instrumentales",
        ));

        $irDeCompras = Title::create(array(
            'title' => "Ir de compras",
            'type' => "instrumentales",
        ));

        $finanzas = Title::create(array(
            'title' => "Finanzas",
            'type' => "instrumentales",
        ));

        $hogar = Title::create(array(
            'title' => "Hogar",
            'type' => "instrumentales",
        ));

        $salud = Title::create(array(
            'title' => "Salud",
            'type' => "instrumentales",
        ));

        $educacionFormal = Title::create(array(
            'title' => "Educación Formal",
            'type' => "educación",
        ));

        $cursos = Title::create(array(
            'title' => "Cursos",
            'type' => "educación",
        ));

        $busquedaDeEmpleo = Title::create(array(
            'title' => "Búsqueda de empleo",
            'type' => "trabajo",
        ));

        $desempeñoLaboral = Title::create(array(
            'title' => "Desempeño laboral",
            'type' => "trabajo",
        ));

        $participacion = Title::create(array(
            'title' => "Participación",
            'type' => "juego",
        ));

        $exploracionDelJuego = Title::create(array(
            'title' => "Exploración del juego",
            'type' => "juego",
        ));

        $exploracion = Title::create(array(
            'title' => "Exploración",
            'type' => "tiempo libre",
        ));

        $ocio = Title::create(array(
            'title' => "Ocio",
            'type' => "tiempo libre",
        ));
    }
}
