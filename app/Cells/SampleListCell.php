<?php

declare(strict_types=1);

namespace App\Cells;

use App\Entities\Sample;
use CodeIgniter\View\Cells\Cell;

class SampleListCell extends Cell
{
    protected string $view = 'sample_list_cell';
    public $type;
    public $message;
    public ?Sample $samplex = null;
}
