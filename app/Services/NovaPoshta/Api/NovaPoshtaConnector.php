<?php

namespace App\Services\NovaPoshta\Api;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class NovaPoshtaConnector
{
    private $url;

    public function __construct()
    {
        $this->url = config('novaposhta.url');
    }

    public function execute(array $request): Collection
    {
        $response = Http::post($this->url, $request);
        if (!$response->ok()) {
            $response->throw();
        }
        if ($response->object()->success !== true && count($response->object()->errors) != 0) {
            throw new \Exception("Response from API: " . json_encode($response->object()->errors));
        }
        return collect($response->object()->data);
    }
}
