<?php
/**
 * TEST
 *
 * @category    Helper
 * @package     TEST_APP
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   Ayoub
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * @var \App\Models\Film $_film
     */
    protected $_film;
    /**
     * Create a new controller instance.
     *
     * @param \App\Models\Film $film
     *
     * @return void
     */
    public function __construct(
        \App\Models\Film $film
    )
    {
        $this->_film = $film;
        $this->middleware('auth:api', ['except' => []]);
    }
    /**
     * Get list films
     *
     * @return \Illuminate\Http\Response
     * @response {
     *       [
     *           {
     *               "id": 76600,
     *               "backdrop_path": "/ovM06PdF3M8wvKb06i4sjW3xoww.jpg",
     *               "title": "Avatar: The Way of Water",
     *               "original_language": "en",
     *               "original_title": "Avatar: The Way of Water",
     *               "overview": "Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.",
     *               "poster_path": "/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg",
     *               "media_type": "movie",
     *               "popularity": 1136.205,
     *               "release_date": "2022-12-14",
     *               "vote_average": 7.7,
     *               "vote_count": 5649,
     *               "video": 0,
     *               "adult": 0,
     *               "created_at": "2023-03-08T13:04:48.000000Z",
     *               "updated_at": "2023-03-08T13:04:48.000000Z",
     *               "budget": "460000000",
     *               "homepage": "https://www.avatar.com/movies/avatar-the-way-of-water",
     *               "status": "Released",
     *               "revenue": "2281000000"
     *           },
     *           {
     *               "id": 296271,
     *               "backdrop_path": "/lInYIBIrx1DxX1Gngy0Ln3SDVYk.jpg",
     *               "title": "The Devil Conspiracy",
     *               "original_language": "en",
     *               "original_title": "The Devil Conspiracy",
     *               "overview": "The hottest biotech company in the world has discovered they can clone history’s most influential people from the dead. Now, they are auctioning clones of Michelangelo, Galileo, Vivaldi, and others for tens of millions of dollars to the world’s ultra-rich. But when they steal the Shroud of Turin and clone the DNA of Jesus Christ, all hell breaks loose.",
     *               "poster_path": "/1AWcMtUZjpkq4h52yDnNIp9FwEO.jpg",
     *               "media_type": "movie",
     *               "popularity": 81.554,
     *               "release_date": "2023-01-13",
     *               "vote_average": 6.2,
     *               "vote_count": 16,
     *               "video": 0,
     *               "adult": 0,
     *               "created_at": "2023-03-08T13:04:51.000000Z",
     *               "updated_at": "2023-03-08T13:04:51.000000Z",
     *               "budget": "0",
     *               "homepage": "",
     *               "status": "Released",
     *               "revenue": "0"
     *           }
     *       ]
        *    }
     */
    public function index()
    {
        return $films = $this->_film->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
