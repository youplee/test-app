<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'adult',
        'backdrop_path',
        'id',
        'title',
        'original_language',
        'original_title',
        'overview',
        'poster_path',
        'media_type',
        'popularity',
        'release_date',
        'video',
        'vote_average',
        'vote_count'
    ];
    public function getFilms($type, $time){
        $result = curl(
            sprintf(
                '%s/%s/%s/%s?api_key=%s',
                env('URL_API_FILM'),
                'trending',
                $type,
                $time,
                env('API_KEY_FILM')
            ), ['Content-Type: application/json;  charset=utf-8','Accept: application/json'],
             [],
             'GET'
        );
        return $result;
    }
    /**
     * Create New
     *
     * @param array $data
     * @return $this
     */
    public function createNew(array $data)
    {
        try {
            return $this->create($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
