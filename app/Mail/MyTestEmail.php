<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        private $nazovEmailu,
        private $odkazLogo,
        private $linkLogo,
        private $prvyOdsek,
        private $druhyOdsek,
        private $tretiOdsek,
        private $stvrtyOdsek,
        private $leftFooter1,
        private $leftFooter2,
        private $leftFooter3,
        private $leftFooter4,
        private $rightFooter1,
        private $rightFooterOdkaz,
        private $rightFooterOdkazText
    ) {
        $this->nazovEmailu = $nazovEmailu;
        $this->odkazLogo = $odkazLogo;
        $this->linkLogo = $linkLogo;
        $this->prvyOdsek = $prvyOdsek;
        $this->druhyOdsek = $druhyOdsek;
        $this->tretiOdsek = $tretiOdsek;
        $this->stvrtyOdsek = $stvrtyOdsek;
        $this->leftFooter1 = $leftFooter1;
        $this->leftFooter2 = $leftFooter2;
        $this->leftFooter3 = $leftFooter3;
        $this->leftFooter4 = $leftFooter4;
        $this->rightFooter1 = $rightFooter1;
        $this->rightFooterOdkaz = $rightFooterOdkaz;
        $this->rightFooterOdkazText = $rightFooterOdkazText;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->nazovEmailu,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        $data = [
            'odkazLogo' => $this->odkazLogo,
            'linkLogo' => $this->linkLogo,
            'prvyOdsek' => $this->prvyOdsek,
            'druhyOdsek' => $this->druhyOdsek,
            'tretiOdsek' => $this->tretiOdsek,
            'stvrtyOdsek' => $this->stvrtyOdsek,
            'leftFooter1' => $this->leftFooter1,
            'leftFooter2' => $this->leftFooter2,
            'leftFooter3' => $this->leftFooter3,
            'leftFooter4' => $this->leftFooter4,
            'rightFooter1' => $this->rightFooter1,
            'rightFooterOdkaz' => $this->rightFooterOdkaz,
            'rightFooterOdkazText' => $this->rightFooterOdkazText,
            // add other data as needed
        ];

        return new Content(
            view: 'mail.dynamicEmail',
            with: $data,
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
