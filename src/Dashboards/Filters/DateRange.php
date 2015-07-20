<?php

namespace Khill\Lavacharts\Dashboards\Filters;

/**
 * Date Range Class
 *
 * @package    Lavacharts
 * @subpackage Dashboards\Filters
 * @since      3.0.0
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */
class DateRange extends Filter
{
    /**
     * Type of Filter.
     *
     * @var string
     */
    const TYPE = 'DateRangeFilter';

    /**
     * Creates the new Filter object to filter the given column label.
     *
     * @param string $columnLabel
     */
    public function __construct($columnLabel)
    {
        parent::__construct($columnLabel);
    }
}
