<?php namespace October\Test\Models;

use Model;

/**
 * City Model
 */
class City extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'october_test_cities';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array fillable fields
     */
    protected $fillable = ['custom_country_id', 'name'];

    /**
     * @var array hasMany
     */
    public $hasMany = [
        'locations' => Location::class
    ];

    /**
     * @var array belongsTo
     */
    public $belongsTo = [
        'country' => [Country::class, 'key' => 'custom_country_id'],
    ];
}
