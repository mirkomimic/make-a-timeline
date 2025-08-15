<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Timeline extends Model
{
  /** @use HasFactory<\Database\Factories\TimelineFactory> */
  use HasFactory;

  public $table = 'timelines';

  public function items(): HasMany
  {
    return $this->hasMany(TimelineItem::class);
  }
}
