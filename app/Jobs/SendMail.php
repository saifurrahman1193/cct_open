<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailReceiverEmail;
    protected $mailReceiverName;
    protected $mailSenderEmail;
    protected $mailSenderName ;
    protected $subject;
    protected $bodyMessage;
    protected $website;
    protected $contactMails;
    protected $numberTitle;
    protected $number;
    protected $cartData;
    protected $cartdetailsData;
    protected $userdata;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number,  $cartData, $cartdetailsData, $userdata)
    {

        $this->mailReceiverEmail = $mailReceiverEmail;
        $this->mailReceiverName = $mailReceiverName;
        $this->mailSenderEmail = $mailSenderEmail;
        $this->mailSenderName = $mailSenderName ;
        $this->subject = $subject;
        $this->bodyMessage = $bodyMessage;
        $this->website = $website;
        $this->contactMails = $contactMails;
        $this->numberTitle = $numberTitle;
        $this->number = $number;
        $this->cartData = $cartData;
        $this->cartdetailsData = $cartdetailsData;
        $this->userdata = $userdata;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        mailformat1($this->mailReceiverEmail, $this->mailReceiverName, $this->mailSenderEmail, $this->mailSenderName , $this->subject, $this->bodyMessage, $this->website, $this->contactMails, $this->numberTitle, $this->number,  $this->cartData, $this->cartdetailsData, $this->userdata);

    }
}
