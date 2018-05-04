<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\kita_basis
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $kita_name
 * @property string $strasse
 * @property string $postleitzahl
 * @property string $ort
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereKitaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereOrt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis wherePostleitzahl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereStrasse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kita_basis whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\KitaZuKinder[] $kinder
 */
class kita_basis extends Model
{
    //

	protected $fillable = ['kita_name', 'strasse', 'postleizahl', 'ort'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function kinder(){
		return $this->hasMany(KitaZuKinder::class, 'kinder_base_id');
	}
}
