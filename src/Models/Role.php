<?php

namespace Sequally\Permission\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @package Sequally\Permission\Models
 */
class Role extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'slug'];

    /**
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    /**
     * @param string $permissionSlug
     * @return bool
     */
    public function hasPermissionTo(string $permissionSlug): bool
    {
        return (bool)$this->permissions->contains('slug', $permissionSlug);
    }
}