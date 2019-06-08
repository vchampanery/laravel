<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WorkRecordMaster
 * 
 * @property int $id
 * @property int $user_id
 * @property int $site_id
 * @property string $status
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class WorkRecordMaster extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'work_record_master';

	protected $casts = [
		'user_id' => 'int',
		'site_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'site_id',
		'status'
	];
}
