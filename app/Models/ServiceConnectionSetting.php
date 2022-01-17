<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ServiceConnectionSetting
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $service_connection_id
 * @property string $name
 * @property string $value
 * @method static Builder|ServiceConnectionSetting newModelQuery()
 * @method static Builder|ServiceConnectionSetting newQuery()
 * @method static Builder|ServiceConnectionSetting query()
 * @method static Builder|ServiceConnectionSetting whereCreatedAt($value)
 * @method static Builder|ServiceConnectionSetting whereId($value)
 * @method static Builder|ServiceConnectionSetting whereName($value)
 * @method static Builder|ServiceConnectionSetting whereServiceConnectionId($value)
 * @method static Builder|ServiceConnectionSetting whereUpdatedAt($value)
 * @method static Builder|ServiceConnectionSetting whereValue($value)
 * @mixin Eloquent
 */
class ServiceConnectionSetting extends Model
{
    use HasFactory;

    protected $guarded = [];
}
