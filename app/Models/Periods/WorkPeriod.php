<?php

namespace App\Models\Periods;

use App\Models\Workdays\Workday;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkPeriod extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['type', 'start', 'stop', 'weekday_id'];

    public function workday()
    {
        return $this->belongsTo(Workday::class);
    }
}
