<?php

namespace Sequally\Permission\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @package Sequally\Permission\Models
 */
class Permission extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'slug'];

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class,'role_permissions');
    }
}