<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Invoice;

use App\Model\InvoiceModel;

/**
 * Class DateNumberGenerator generates the invoice number based on the current day.
 * It will create duplicate IDs if you create multiple invoices per day.
 */
class DateNumberGenerator implements NumberGeneratorInterface
{
    /**
     * @var InvoiceModel
     */
    protected $model;

    /**
     * @param InvoiceModel $model
     */
    public function setModel(InvoiceModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return date('ymd');
    }
}
