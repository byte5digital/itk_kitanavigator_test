<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\KitaZuKinder
 *
 * @property int $id
 * @property int $kinder_base_id
 * @property int $kita_base_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KitaZuKinder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KitaZuKinder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KitaZuKinder whereKinderBaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KitaZuKinder whereKitaBaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KitaZuKinder whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\kinder_base $kind
 * @property-read \App\kita_basis $kita
 */
class KitaZuKinder extends Model
{
    protected $fillable = ['kinder_base_id', 'kita_base_id'];

    public function kind(){
    	return $this->belongsTo(kinder_base::class, 'kinder_base_id');
    }

    public function kita(){
    	return $this->belongsTo(kita_basis::class, 'kita_base_id');
    }
}
