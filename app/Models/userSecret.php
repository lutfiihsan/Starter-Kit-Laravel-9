<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Rumah Dev
| Backend Developer : ibudirsan
| Email             : ibnudirsan@gmail.com
| Copyright © RumahDev 2022
|--------------------------------------------------------------------------
*/
/**
 * App\Models\userSecret
 *
 * @property int $id
 * @property int $user_id
 * @property int $isBlock
 * @property string|null $secret2Fa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret query()
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereIsBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereSecret2Fa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|userSecret whereUserId($value)
 * @mixin \Eloquent
 */
class userSecret extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'isBlock', 'secret2Fa','statusOTP','timeOTP'
    ];
}
