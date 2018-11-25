<?php

namespace App\Models\Hibiscus;

use App\Models\BaseModel;

class Umsatz extends BaseModel
{
    protected $connection = 'hibiscus';

    protected $table = 'umsatz';

    public function konto() {
        return $this->belongsTo(Konto::class);
    }
}
