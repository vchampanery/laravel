<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TimeSheetMaster
 * 
 * @property int $id
 * @property int $work_record_id
 * @property \Carbon\Carbon $log_date
 * @property \Carbon\Carbon $log_hours
 * @property string $activity
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class TimeSheetMaster extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'time_sheet_master';

	protected $casts = [
		'work_record_id' => 'int'
	];

	protected $dates = [
		'log_date',
		'log_hours'
	];

	protected $fillable = [
		'work_record_id',
		'log_date',
		'log_hours',
		'activity'
	];
}
