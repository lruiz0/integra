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
     * Create a new controller instance. Se ha modificado para que las paginas
     * aquí controlada sólo sean accesibles cuando se está loginado. Obsérvese
     * que en el constructor de la classe se utiliza el middleware 'auth'.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra el submenú de de juegos de habilidad social.
     *
     * @return Response
     */
    public function menuSocial()
    {
        return view('menus-juegos.social');
    }
    /**
     * Muestra el submenú de de juegos de habilidad lingüística.
     *
     * @return Response
     */
    public function menuLenguaje()
    {
        return view('menus-juegos.lenguaje');
    }
    /**
     * Muestra el submenú de de juegos de habilidad memorística.
     *
     * @return Response
     */
    public function menuMemoria()
    {
        return view('menus-juegos.memoria');
    }
    /**
     * Muestra el submenú de de juegos de habilidades de autogestión.
     *
     * @return Response
     */
    public function menuAutogestion()
    {
        return view('menus-juegos.autogestion');
    }
    /**
     * Muestra el juego de preguntas de habilidades sociales.
     *
     * @return Response
     */
    public function preguntasSocial()
    {
        return view('juegos.preguntas-social');
    }
    /**
     * Muestra el juego de preguntas de habilidades lingüísticas.
     *
     * @return Response
     */
    public function preguntasLenguaje()
    {
        return view('juegos.preguntas-lenguaje');
    }
    /**
     * Muestra el juego lúdico Candy Crack.
     *
     * @return Response
     */
    public function candyCrack()
    {
        return view('juegos.candyCrack');
    }
    /**
     * Muestra el clásico juego de la memoria de emparejar.
     *
     * @return Response
     */
    public function memory()
    {
        return view('juegos.memory');
    }
    /**
     * Muestra el juego de desarrollo de la capacidad de autogestión.
     *
     * @return Response
     */
    public function autogestion()
    {
        return view('juegos.autogestion');
    }
    /**
     * Muestra el area privada del usuario loginado.
     *
     * @return Response
     */
    public function zonaPrivada()
    {
        return view('inicial.zonaPrivada');
    }
    public function zonaPrivada2()
    {
        return view('inicial.zonaPrivadaAdmin');
    }
}