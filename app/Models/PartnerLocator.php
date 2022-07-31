<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $company
 * @property string $status
 * @property string $logo
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $countriesCovered
 * @property string $statesCovered
 */
class PartnerLocator extends Model
{
    /**
     * @var string
     */
    protected $table = 'partner_locator';

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
