<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Crypt;

class EnvEncrypt extends Command
{
    protected $signature = 'env:encrypt';
    protected $description = 'Encrypt the .env file';

    public function handle()
    {
        $envPath = base_path('.env');
        if (!file_exists($envPath)) {
            $this->error('.env file does not exist.');
            return 1;
        }

        $contents = file_get_contents($envPath);
        $encrypted = Crypt::encryptString($contents);

        file_put_contents(base_path('.env.enc'), $encrypted);
        $this->info('Encrypted .env file has been saved as .env.enc');
        return 0;
    }
}
