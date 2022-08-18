<?php
namespace Domain\IP\Data;

use Spatie\LaravelData\Data;

class IpData extends Data
{
    public string $label;
    public string $ip;
}