<?php

namespace App\Commands;

use App\Vendors\PhpVendor;
use App\Vendors\DayJsVendor;
use App\Vendors\MomentJsVendor;
use function Termwind\{render};
use Illuminate\Support\Facades\View;
use LaravelZero\Framework\Commands\Command;

class DateFormatsCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'date-formats {vendor? : The language or package to show date formats for} {--compact : Show only the date formats}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Display date formats for a given language or package';

    /**
     * The language or package we will
     * show date formats for.
     *
     * @var \App\Vendors\Vendor
     */
    protected $vendor;

    /**
     * The languages and packages that
     * we support date formats for
     *
     * @var array
     */
    protected $supportedVendors = [];

    /**
     * Whether to show a compact view or not
     *
     * @var bool
     */
    protected $compact = false;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->setVendor();
        $this->setCompact();

        render(view('date-formats', [
            'displayName' => $this->vendor->displayName,
            'documentationUrl' => $this->vendor->documentationUrl,
            'view' => $this->vendor->view,
        ]));
    }

    /**
     * Set the vendor to display date formatting for
     *
     * @return void
     */
    protected function setVendor(): void
    {
        $this->supportedVendors = [
            PhpVendor::$key,
            DayJsVendor::$key,
            MomentJsVendor::$key,
        ];

        $vendor = $this->argument('vendor');

        if (! is_null($vendor) && ! in_array($vendor, $this->supportedVendors)) {
            render(view('partials.unsupported-vendor', ['vendor' => $vendor]));

            $vendor = null;
        }

        if (is_null($vendor)) {
            $vendor = $this->choice(
                'Which language or package?',
                $this->supportedVendors,
            );
        }

        $this->vendor = match ($vendor) {
            PhpVendor::$key => new PhpVendor(),
            DayJsVendor::$key => new DayJsVendor(),
            MomentJsVendor::$key => new MomentJsVendor(),
        };
    }

    /**
     * Set whether the we should show a compacted
     * view or not
     *
     * @return void
     */
    protected function setCompact(): void
    {
        $this->compact = $this->option('compact');

        if (! $this->vendor->supportsDescriptions) {
            $this->compact = true;
        }

        View::composer('*', function($view)
        {
            $view->with('compact', $this->compact);
        });
    }
}
