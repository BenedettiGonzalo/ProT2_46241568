<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function Quienes_Somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/Quienes_somos');
        echo view('front/footer_view');
    }
    public function acercade()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/acercade_carousel');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
    public function registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view');
    }
    public function ingreso()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/ingresar');
        echo view('front/footer_view');
    }
    public function recuperar()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/recuperar');
        echo view('front/footer_view');
    }
}


