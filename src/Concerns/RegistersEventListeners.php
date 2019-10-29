<?php

namespace Maatwebsite\Excel\Concerns;

<<<<<<< HEAD
use Maatwebsite\Excel\Events\BeforeRead; // new
use Maatwebsite\Excel\Events\AfterRead;  // new
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Events\AfterSheet;
=======
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Events\BeforeRead;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\AfterRead;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\ImportFailed;
>>>>>>> 3.1
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\ImportFailed;

trait RegistersEventListeners
{
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $listeners = [];

        if (method_exists($this, 'beforeExport')) {
            $listeners[BeforeExport::class] = [static::class, 'beforeExport'];
        }

        if (method_exists($this, 'beforeWriting')) {
            $listeners[BeforeWriting::class] = [static::class, 'beforeWriting'];
        }

        if (method_exists($this, 'beforeImport')) {
            $listeners[BeforeImport::class] = [static::class, 'beforeImport'];
        }

        if (method_exists($this, 'afterImport')) {
            $listeners[AfterImport::class] = [static::class, 'afterImport'];
        }

        if (method_exists($this, 'importFailed')) {
            $listeners[ImportFailed::class] = [static::class, 'importFailed'];
        }

        if (method_exists($this, 'beforeSheet')) {
            $listeners[BeforeSheet::class] = [static::class, 'beforeSheet'];
        }

        if (method_exists($this, 'afterSheet')) {
            $listeners[AfterSheet::class] = [static::class, 'afterSheet'];
        }
        
        if (method_exists($this, 'beforeRead')) {
            $listeners[BeforeRead::class] = [static::class, 'beforeRead'];
        }

<<<<<<< HEAD
        if (method_exists($this, 'afterRead')) {
            $listeners[AfterRead::class] = [static::class, 'afterRead'];
        }
        
=======
		// 21/10/2019 RRE
        if (method_exists($this, 'beforeRead')) {
            $listeners[BeforeRead::class] = [static::class, 'beforeRead'];
        }

        if (method_exists($this, 'afterRead')) {
            $listeners[AfterRead::class] = [static::class, 'afterRead'];
        }

>>>>>>> 3.1
        return $listeners;
    }
}
