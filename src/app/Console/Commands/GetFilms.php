<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Film;

class GetFilms extends Command
{
    /**
     * @var Film $_film
     */
    protected $_film;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:films';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get films from api';
        /**
         * Migration constructor.
         * @param Film $film
         *
         * @return void
         */
        public function __construct(
            Film $film
        )
        {
            $this->_film = $film;
            parent::__construct();
        }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->create();
    }
    protected function create(){
        $films = $this->_film->getFilms('movie', 'day');
        foreach ($films->results as $film) {
            $this->_film->createNew((array)$film);
        }
    }
}
