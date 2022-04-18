<?php

namespace Tests\Feature;

use App\Models\Title;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTitlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_title_baño()
    {
        Title::create(array(
            'title' => "Baño",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Baño",
            'type' => "básicos",
        ]);
    }

    public function test_title_higiene_en_inodoro()
    {
        Title::create(array(
            'title' => "Higiene en inodoro",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Higiene en inodoro",
            'type' => "básicos",
        ]);
    }

    public function test_title_vestirse()
    {
        Title::create(array(
            'title' => "Vestirse",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Vestirse",
            'type' => "básicos",
        ]);
    }

    public function test_title_actividad_sexual()
    {
        Title::create(array(
            'title' => "Actividad sexual",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Actividad sexual",
            'type' => "básicos",
        ]);
    }

    public function test_title_alimentación()
    {
        Title::create(array(
            'title' => "Alimentación",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Alimentación",
            'type' => "básicos",
        ]);
    }

    public function test_title_comer()
    {
        Title::create(array(
            'title' => "Comer",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Comer",
            'type' => "básicos",
        ]);
    }

    public function test_title_movilidad()
    {
        Title::create(array(
            'title' => "Movilidad",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Movilidad",
            'type' => "básicos",
        ]);
    }

    public function test_title_cuidado_de_otros()
    {
        Title::create(array(
            'title' => "Cuidado de otros",
            'type' => "instrumentales",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Cuidado de otros",
            'type' => "instrumentales",
        ]);
    }

    public function test_title_cuidado_de_mascotas()
    {
        Title::create(array(
            'title' => "Cuidado de mascotas",
            'type' => "instrumentales",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Cuidado de mascotas",
            'type' => "instrumentales",
        ]);
    }

    public function test_title_criar_niños()
    {
        Title::create(array(
            'title' => "Criar niños",
            'type' => "instrumentales",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Criar niños",
            'type' => "instrumentales",
        ]);
    }

    public function test_title_sistemas_de_información()
    {
        Title::create(array(
            'title' => "Sistemas de información",
            'type' => "instrumentales",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Sistemas de información",
            'type' => "instrumentales",
        ]);
    }

    public function test_title_ir_de_compras()
    {
        Title::create(array(
            'title' => "Ir de compras",
            'type' => "instrumentales",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Ir de compras",
            'type' => "instrumentales",
        ]);
    }

    public function test_title_finanzas()
    {
        Title::create(array(
            'title' => "Finanzas",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Finanzas",
            'type' => "básicos",
        ]);
    }

    public function test_title_hogar()
    {
        Title::create(array(
            'title' => "Hogar",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Hogar",
            'type' => "básicos",
        ]);
    }

    public function test_title_salud()
    {
        Title::create(array(
            'title' => "Salud",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Salud",
            'type' => "básicos",
        ]);
    }

    public function test_title_educación_formal()
    {
        Title::create(array(
            'title' => "Educación formal",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Educación formal",
            'type' => "básicos",
        ]);
    }

    public function test_title_cursos()
    {
        Title::create(array(
            'title' => "Curso",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Curso",
            'type' => "básicos",
        ]);
    }

    public function test_title_búsqueda_de_empleo()
    {
        Title::create(array(
            'title' => "Búsqueda de empleo",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Búsqueda de empleo",
            'type' => "básicos",
        ]);
    }

    public function test_title_desempeño_laboral()
    {
        Title::create(array(
            'title' => "Desempeño laboral",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Desempeño laboral",
            'type' => "básicos",
        ]);
    }

    public function test_title_participación()
    {
        Title::create(array(
            'title' => "Participación",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Participación",
            'type' => "básicos",
        ]);
    }

    public function test_title_exploración_del_juego()
    {
        Title::create(array(
            'title' => "Exploración del juego",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Exploración del juego",
            'type' => "básicos",
        ]);
    }

    public function test_title_exploración()
    {
        Title::create(array(
            'title' => "Exploración",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Exploración",
            'type' => "básicos",
        ]);
    }

    public function test_title_ocio()
    {
        Title::create(array(
            'title' => "Ocio",
            'type' => "básicos",
        ));

        $this->assertDatabaseHas('titles', [
            'title' => "Ocio",
            'type' => "básicos",
        ]);
    }
}
