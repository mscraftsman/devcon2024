<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class GetSpeakers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-speakers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download speakers data and profile pictures';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiEndpoint = env('SESSIONIZE_API_SPEAKERS');

        if (!$apiEndpoint) {
            $this->error("SESSIONIZE_API_SPEAKERS environment variable is not set.");
            return 1;
        }

        $photosDir = public_path('speaker');
        if (!File::exists($photosDir)) {
            File::makeDirectory($photosDir, 0777, true);
            $this->info("Created directory: $photosDir");
        } else {
            $this->info("Directory already exists: $photosDir");
        }

        $jsonDir = storage_path('data');
        if (!File::exists($jsonDir)) {
            File::makeDirectory($jsonDir, 0777, true);
            $this->info("Created directory: $jsonDir");
        } else {
            $this->info("Directory already exists: $jsonDir");
        }

        // Get JSON response from the API endpoint
        $this->info("Fetching JSON response from API endpoint...");
        $response = Http::get($apiEndpoint);
        $speakers = $response->json();

        if (is_array($speakers)) {
            $this->info("Fetched and decoded JSON response successfully.");
        } else {
            $this->error("Failed to decode JSON response.");
            return 1;
        }

        // Function to download images and update JSON
        foreach ($speakers as &$speaker) {
            $profilePictureUrl = $speaker['profilePicture'];
            // Extract filename from URL
            $fileName = basename($profilePictureUrl);
            $filePath = $photosDir . '/' . $fileName;

            // Download and save the image
            $this->info("Downloading image: $profilePictureUrl");
            $imgContent = file_get_contents($profilePictureUrl);
            if ($imgContent !== false) {
                file_put_contents($filePath, $imgContent);
                $this->info("Saved image to: $filePath");
            } else {
                $this->error("Failed to download image: $profilePictureUrl");
            }

            // Replace URL with file name
            $speaker['profilePicture'] = $fileName;
        }

        // Save updated JSON to speakers.json
        $jsonFilePath = $jsonDir . '/speakers.json';
        $this->info("Saving updated JSON to $jsonFilePath");
        file_put_contents($jsonFilePath, json_encode($speakers, JSON_PRETTY_PRINT));
        $this->info("Process completed. Photos saved and JSON file updated.");

        return 0;
    }
}
