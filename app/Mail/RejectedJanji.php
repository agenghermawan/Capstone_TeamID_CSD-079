<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RejectedJanji extends Mailable
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
        return $this->subject('Pembuatan Janji Temu dengan Dokter (SEHATKUAPP)')->markdown('emails.reject',[
            'data' => $this->data,
            'dataRumahSakit' => $this->dataRumahsakit,
            'dataDokter' => $this->dataDokter,
            'dataPoliklinik' => $this->dataPoliklinik,
        ]);

    }
}
