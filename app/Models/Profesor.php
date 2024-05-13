<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profesor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'profesors';

    protected $fillable = [
        'profesor_nombre',
        'calificacion',
        'image',
        'user_id'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function wikiprofes()
{
    return $this->belongsToMany(Wikiprofe::class, 'profesors_wikiprofes');
}
public function getForeignKey()
{
    return 'profesor_nombre';
}

public function getRouteKeyName()
{
    return 'profesor_nombre';
}
}
