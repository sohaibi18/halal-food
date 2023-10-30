<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CountryModel extends Model
{
    use HasFactory;

    protected $table = 'countries';

    public $timestamps = false;
//    protected $guarded = ['*'];
    protected $fillable = [
        'user_id',
        'Country',
        'Code',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
