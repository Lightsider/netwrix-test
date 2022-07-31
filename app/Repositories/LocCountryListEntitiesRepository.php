<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\LocCountry;
use App\Repositories\Abstracts\AbstractTableRecordsListEntitiesRepository;
use App\Repositories\Extractors\TableRecordsListEntitiesExtractor;
use Illuminate\Support\Facades\App;

final class LocCountryListEntitiesRepository extends AbstractTableRecordsListEntitiesRepository
{
    public function __construct()
    {
        parent::__construct(
            new LocCountry(),
            App::make(TableRecordsListEntitiesExtractor::class),
        );
    }
}
