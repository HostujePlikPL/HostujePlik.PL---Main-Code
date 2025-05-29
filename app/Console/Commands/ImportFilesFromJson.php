<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File as FileSystem;
use App\Models\File;

class ImportFilesFromJson extends Command
{
    protected $signature = 'import:files';
    protected $description = 'Importuj dane plików z JSON do bazy danych';

    public function handle()
    {
        $path = storage_path('content/files');
        $files = FileSystem::allFiles($path);
        $count = 0;

        foreach ($files as $file) {
            $json = json_decode(file_get_contents($file), true);

            if (!isset($json['uuid'])) continue;

            File::updateOrCreate(['uuid' => $json['uuid']], $json);
            $count++;
        }

        $this->info("Zaimportowano $count plików.");
    }
}

