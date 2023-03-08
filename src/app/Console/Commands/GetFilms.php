<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Film;
use App\Console\ConsoleColor;

class GetFilms extends Command
{   
    use ConsoleColor;
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
        fwrite(
            STDERR,
            PHP_EOL . $this->getColoredString(
                'Start migration films initialization: ' . date('Y-m-d H:i:s'),
                "yellow"
            ) . PHP_EOL

        );
        try {
            $this->create();

        } catch (\Exception $e) {
            fwrite(
                STDERR,
                PHP_EOL . $this->getColoredString(
                        $e->getMessage(),
                        "red"
                ) . PHP_EOL

            );
            exit;
        }
        fwrite(
            STDERR,
            PHP_EOL . $this->getColoredString(
                'End migration films initialization: '.date('Y-m-d H:i:s'),
                "yellow"
            ) . PHP_EOL

        );

    }
    protected function create(){
        $films = $this->_film->getFilms('movie', 'day');
        foreach ($films->results as $film) {
            fwrite(
                STDERR,
                PHP_EOL . $this->getColoredString(
                    'Traitement FILM ID: '.$film->id,
                    "yellow"
                ) . PHP_EOL

            );
            $detail = $this->_film->getInfoMovie($film->id);
            $film->budget = $detail->budget;
            $film->homepage = $detail->homepage;
            $film->revenue = $detail->revenue;
            $film->status = $detail->status;
            $this->_film->createNew((array)$film);
        }
    }
}
