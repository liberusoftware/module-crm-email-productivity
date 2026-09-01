<?php

declare(strict_types=1);

namespace Liberu\CRM\EmailProductivity\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property bool $shared */
final class EmailTemplate extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_email_templates';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['shared' => 'boolean'];
    }
}
