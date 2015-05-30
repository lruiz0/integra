<?php namespace App\Http\Controllers;

class JuegosController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
/* menus -------------------------------------------------------------------------------------------------------*/
    public function menuSocial()
    {
        return view('menus-juegos.social');
    }

    public function menuLenguaje()
    {
        return view('menus-juegos.lenguaje');
    }

    public function menuMemoria()
    {
        return view('menus-juegos.memoria');
    }

    public function menuAutogestion()
    {
        return view('menus-juegos.autogestion');
    }

/* juegos -------------------------------------------------------------------------------------------------------*/
    public function preguntasSocial()
    {
        return view('juegos.preguntas-social');
    }

    public function preguntasLenguaje()
    {
        return view('juegos.preguntas-lenguaje');
    }

    public function candyCrack()
    {
        return view('juegos.candyCrack');
    }

    public function memory()
    {
        return view('juegos.memory');
    }

    public function autogestion()
    {
        return view('juegos.autogestion');
    }
/* zona privada ------------------------------------------------------*/
    
    public function zonaPrivada()
    {
        return view('inicial.zonaPrivada');
    }
}