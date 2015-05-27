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
        $this->middleware('guest');
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

    public function menuMemoria()
    {
        return view('menus-juegos.memoria');
    }

    public function menuCalculo()
    {
        return view('menus-juegos.calculo');
    }

/* juegos -------------------------------------------------------------------------------------------------------*/
    public function preguntasSocial()
    {
        return view('juegos.preguntas-social');
    }

    public function candyCrack()
    {
        return view('juegos.candyCrack');
    }

    public function memory()
    {
        return view('juegos.memory');
    }

    public function calculo()
    {
        return view('juegos.calculo');
    }
}