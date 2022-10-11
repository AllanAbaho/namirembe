<?php
/**
 * Created by PhpStorm.
 * User: Kevin G. Mungai
 * WhatsApp: +254724475357
 * Date: 6/6/2021
 * Time: 7:27 AM
 */

namespace App\Models;

use App\Traits\SearchableTrait;

class GeneralSetting extends BaseModel
{
    use SearchableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'general_settings';

    /**
     * Main table primary key
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'business_type',
        'email',
        'currency',
        'phone',
        'physical_address',
        'postal_address',
        'website_url',
        'postal_code',
        'logo',
        'favicon',
        'date_format',
        'amount_thousand_separator',
        'amount_decimal_separator',
        'amount_decimal',
        'theme',
        'language'
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'general_settings.company_name' => 1
        ]
    ];
}