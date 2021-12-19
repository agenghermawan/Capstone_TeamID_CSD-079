<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AfterDoctor extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $dataRumahsakit;
    private $dataDokter;
    private $dataPoliklinik;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$dataRumahsakit,$dataDokter,$dataPoliklinik)
    {
        $this->data = $data;
        $this->dataRumahsakit = $dataRumahsakit;
        $this->dataDokter = $dataDokter;
        $this->dataPoliklinik = $dataPoliklinik;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pasien ingin membuat janji dengan kamu (SEHATKUAPP)')->markdown('emails.janjifordokter',[
            'data' => $this->data,
            'dataRumahSakit' => $this->dataRumahsakit,
            'dataDokter' => $this->dataDokter,
            'dataPoliklinik' => $this->dataPoliklinik,
        ]);

    }
}
