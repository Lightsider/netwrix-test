<?php

namespace App\Models;

use App\Models\Traits\FieldCamelCaseTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $stateId
 * @property integer $countryId
 * @property string $name
 * @property string $short_name
 * @property LocCountry $country
 */
class LocState extends Model
{
    use FieldCamelCaseTrait;

    /**
     * @var string
     */
    protected $table = 'loc_state';

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

    /**
     * @var array|string[]
     */
    protected array $maps =[
        'shortName' => 'customer_name',
        'countryId' => 'country_id',
        'stateId' => 'state_id',
    ];

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(LocCountry::class, 'country_id');
    }
}
