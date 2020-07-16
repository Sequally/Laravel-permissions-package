<?php

namespace Sequally\Permission\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @package Sequally\Permission\Models
 */
class RolePermissions extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['role_id', 'permission_id'];
}