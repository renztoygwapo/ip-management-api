<?php
namespace Domain\IP\Data\Request;

use Spatie\LaravelData\Data;

class UpdateIpRequest extends Data
{
    public string $label;
}