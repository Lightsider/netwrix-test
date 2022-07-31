<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\LocState;
use App\Repositories\Abstracts\AbstractTableRecordsListEntitiesRepository;
use App\Repositories\Extractors\TableRecordsListEntitiesExtractor;
use Illuminate\Support\Facades\App;

final class LocStateListEntitiesRepository extends AbstractTableRecordsListEntitiesRepository
{
    public function __construct()
    {
        parent::__construct(
            new LocState(),
            App::make(TableRecordsListEntitiesExtractor::class),
        );
    }
}
