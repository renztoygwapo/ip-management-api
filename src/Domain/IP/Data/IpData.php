<?php
namespace Domain\IP\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\IP;
use Spatie\LaravelData\Attributes\Validation\Max;

class IpData extends Data
{
    public string $label;
    #[Max(15), IP]
    public string $ip;
}