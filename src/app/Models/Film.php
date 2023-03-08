<?php
/**
 * TEST
 *
 * @category    Helper
 * @package     TEST_APP
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   Ayoub
 */
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
        'vote_count',
        'budget',
        'homepage',
        'revenue',
        'status',
    ];
    /**
     * Create New
     *
     * @param string $type
     * @param string $time
     * @return $this
     */
    public function getFilms($type, $time)
    {
        return curl(
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
     * @param string $type
     * @param string $time
     * @return $this
     */
    public function getInfoMovie($id)
    {
        return curl(
            sprintf(
                '%s/%s/%s?api_key=%s',
                env('URL_API_FILM'),
                'movie',
                $id,
                env('API_KEY_FILM')
            ), ['Content-Type: application/json;  charset=utf-8','Accept: application/json'],
             [],
             'GET'
        );
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
