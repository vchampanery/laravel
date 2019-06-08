<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RoleHasPermission
 * 
 * @property int $permission_id
 * @property int $role_id
 * 
 * @property \App\Models\Permission $permission
 * @property \App\Models\Role $role
 *
 * @package App\Models
 */
class RoleHasPermission extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'role_id' => 'int'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class);
	}

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}
}
