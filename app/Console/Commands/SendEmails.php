<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\TestMail;
use  Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for Send The Mail';

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
     * @return int
     */
    public function handle()
    {

        \Log::info('send maill successfully...');
        
        $details = ['name'=>'sam','otp'=>'123'];
        Mail::to('topssurat301@gmail.com')->send(new \App\Mail\TestMail($details));
        //return 0;
    }
}
