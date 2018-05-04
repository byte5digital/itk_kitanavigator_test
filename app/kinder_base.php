<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\kinder_base
 *
 * @property int $id
 * @property string $vorname
 * @property string $nachname
 * @property string $strasse
 * @property string $ort
 * @property string $plz
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereNachname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereOrt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base wherePlz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereStrasse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\kinder_base whereVorname($value)
 * @mixin \Eloquent
 */
class kinder_base extends Model
{
    protected $fillable = ['vorname', 'nachname', 'strasse', 'ort', 'plz'];
}
