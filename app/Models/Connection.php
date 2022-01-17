<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Connection
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @method static Builder|Connection newModelQuery()
 * @method static Builder|Connection newQuery()
 * @method static Builder|Connection query()
 * @method static Builder|Connection whereCreatedAt($value)
 * @method static Builder|Connection whereId($value)
 * @method static Builder|Connection whereName($value)
 * @method static Builder|Connection whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Connection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function grpc(): int
    {
        return 1;
    }

    public static function http(): int
    {
        return 2;
    }
}
