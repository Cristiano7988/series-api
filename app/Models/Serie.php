<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $links = [];
    protected $appends = ['links'];

    public function episodios() {
        return $this->hasMany(Episodio::class);
    }

    public function getLinksAttribute(): array
    {
        return [
            'episodios' => '/api/series/'.$this->id.'/episodios'
        ];
    }
}