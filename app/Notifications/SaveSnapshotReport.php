<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Arr;

class SaveSnapshotReport extends Notification implements ShouldQueue
{
    use Queueable;

    protected $mailData;
    protected $productReport;
    protected $exceptions;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mailData, $productReport)
    {
        $this->mailData = $mailData;
        $this->productReport = $productReport;
        $this->exceptions = $this->getExceptions($this->productReport['products']);
    }

    protected function getExceptions($productReport) {
        $exceptions = Arr::where($productReport, function ($value, $key) {
            return $value['url_status'] != '200';
        });
        return $exceptions;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->view('emails/reports/verify-url-report', [
                'products' => $this->productReport,
                'exceptions' => $this->exceptions,
            ])
            ->subject($this->mailData['subject']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
