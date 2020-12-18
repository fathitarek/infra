<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class projects
 * @package App\Models
 * @version December 18, 2020, 6:13 pm UTC
 *
 * @property string $name
 * @property string $date_receipt
 * @property string $predication_number
 * @property string $predication_date
 * @property string $approximate_value
 * @property string $finish_date
 */
class projects extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'date_receipt',
        'predication_number',
        'predication_date',
        'approximate_value',
        'finish_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'date_receipt' => 'date',
        'predication_number' => 'string',
        'predication_date' => 'date',
        'approximate_value' => 'string',
        'finish_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'date_receipt' => 'required|date',
        'predication_number' => 'required',
        'predication_date' => 'required|date',
        'approximate_value' => 'required',
        'finish_date' => 'required|date'
    ];

    
}
