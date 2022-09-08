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
                'question' => 'What is the purpose of this website?',
                'answer' => 'Nothing just a showcase',
                'location' => '#',
            ],
            [
                'question' => 'Waar vraag ik een personal coach',
                'answer' => 'Klik hier om je aan te melden bij een personal coach',
                'location'  => '/personal_coach',
            ],
            [
                'question' => 'Waar vind ik de abbenement types',
                'answer' => 'Klik hier om onze abbenement types te bekijken',
                'location'  => '/abbenement_types',
            ],
            [
                'question' => 'Hoe kom ik de sportschool in',
                'answer' => 'Scan via deze pagina de QR code',
                'location'  => '/qr_code_scanner',
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
