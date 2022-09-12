<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaQ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'Waar vind ik de abbenement types',
                'answer' => 'Klik hier om onze abbenement types te bekijken',
                'location'  => '/abbenement_types',
            ],
            [
                'question' => 'Maak QR Ingang',
                'answer' => 'De QR CODE Token based ding',
                'location'  => '/entrance/qr_code',
            ],
            [
                'question' => 'Hoe kom ik de sportschool in',
                'answer' => 'Scan via deze pagina de QR code',
                'location'  => '/entrance/scanner',
            ],
            [
                'question' => 'Cursussen aanvragen',
                'answer' => 'Via hier vraag je een cursus aan',
                'location'  => '/curssesens_aanvragen',
            ],
            [
                'question' => 'Cursussen inzien van mijzelf',
                'answer' => 'Via hier kan je je cursussen inzien',
                'location'  => '/mijn_cursussen',
            ],

        ];

        foreach ($faqs as $faq) {
            DB::table('fa_q_s')->insert($faq);
        }



    }
}
