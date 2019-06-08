<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Site
 * 
 * @property int $id
 * @property string $name
 * @property string $model
 * @property string $serial
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Site extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'site';

	protected $fillable = [
		'name',
		'model',
		'serial'
	];
}
