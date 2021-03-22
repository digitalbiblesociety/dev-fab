<?php

namespace App\Console\Commands;

use Common\Modals\Organization\Organization;
use Illuminate\Console\Command;

class SaveOrgIcons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:orgIcons';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $organizations = Organization::whereNotNull('logo')->orWhereNotNull('icon')->get();
        foreach ($organizations as $org) {
            file_put_contents(public_path("img/logos/$org->slug.svg"), $org->logo);
        }

        foreach ($organizations as $org) {
            file_put_contents(public_path("img/logos/icons/$org->slug.svg"), $org->icon);
        }
    }
}
