<?php

namespace ukvp\Console\Commands;

use ukvp\CallbackRequest;
use ukvp\PBXUtils;

use Illuminate\Console\Command;

class CallbackProcessNext extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'callback:processNext';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process next callback request';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $cbRequest = CallbackRequest::open()->first();
      if($cbRequest){
        logger(sprintf("Call to %s",$cbRequest->client_phone_number));
        $utils = new PBXUtils;
        $utils->processCallbackRequest($cbRequest);
      }
    }
}
