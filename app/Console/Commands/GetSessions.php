<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-sessions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download sessions details from Sessionize.com';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiEndpoint = env('SESSIONIZE_API_SESSIONS');

        if (!$apiEndpoint) {
            $this->error("SESSIONIZE_API_SESSIONS environment variable is not set.");
            return 1;
        }

        // Get JSON response from the API endpoint
        $this->info("Fetching JSON response from API endpoint...");
        $response = Http::get($apiEndpoint);
        $sessions = $response->json();

        if (is_array($sessions)) {
            $this->info("Fetched and decoded JSON response successfully.");
        } else {
            $this->error("Failed to decode JSON response.");
            return 1;
        }

        // Save JSON to /storage/data/sessions.json
        $jsonDir = storage_path('data');
        $jsonFilePath = $jsonDir . '/sessions.json';
        $this->info("Saving updated JSON to $jsonFilePath");
        file_put_contents($jsonFilePath, json_encode($sessions, JSON_PRETTY_PRINT));
        $this->info("Process completed. Sessions saved to /storage/data/sessions.json.");
    }
}
