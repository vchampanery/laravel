<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ModelHasRole
 * 
 * @property int $role_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property \App\Models\Role $role
 *
 * @package App\Models
 */
class ModelHasRole extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'model_id' => 'int'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}
}
