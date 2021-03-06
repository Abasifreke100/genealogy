<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\Traits\TableCache;

/**
 * @property int $id
 * @property int $gid
 * @property string $group
 * @property string $form
 * @property string $titl
 * @property string $blob
 * @property string $rin
 * @property string $file
 * @property string $created_at
 * @property string $updated_at
 */
class MediaObject extends Model
{
    use TableCache;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['gid', 'group', 'form', 'titl', 'blob', 'rin', 'file', 'created_at', 'updated_at'];
}
