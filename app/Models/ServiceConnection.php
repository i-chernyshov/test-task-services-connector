<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\ServiceConnection
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $service_id
 * @property int $connection_id
 * @property-read Connection|null $connection
 * @property-read Service|null $service
 * @property-read Collection|ServiceConnectionSetting[] $settings
 * @property-read int|null $settings_count
 * @method static Builder|ServiceConnection newModelQuery()
 * @method static Builder|ServiceConnection newQuery()
 * @method static Builder|ServiceConnection query()
 * @method static Builder|ServiceConnection whereConnectionId($value)
 * @method static Builder|ServiceConnection whereCreatedAt($value)
 * @method static Builder|ServiceConnection whereId($value)
 * @method static Builder|ServiceConnection whereServiceId($value)
 * @method static Builder|ServiceConnection whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ServiceConnection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function connection(): BelongsTo
    {
        return $this->belongsTo(Connection::class);
    }

    public function settings(): HasMany
    {
        return $this->hasMany(ServiceConnectionSetting::class);
    }
}
