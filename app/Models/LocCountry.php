<?php

namespace App\Models;

use App\Models\Traits\FieldCamelCaseTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $countryId
 * @property string $name
 * @property string $short_name
 * @property integer $country_id
 */
class LocCountry extends Model
{
    use FieldCamelCaseTrait;

    /**
     * @var string
     */
    protected $table = 'loc_country';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';
}
