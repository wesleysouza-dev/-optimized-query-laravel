<?php
namespace App\Traits;

use Carbon\Carbon;

trait DateFormatter
{
    protected function formatCreatedAt($collection)
    {
        return $collection->map(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d/m/Y H:i:s');
            return $item;
        });
    }
}