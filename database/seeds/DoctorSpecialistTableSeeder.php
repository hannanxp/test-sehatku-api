<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSpecialistTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id" => 19,
                "name" => "Ortopedi",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Ortopedi.png",
                "slug" => "ortopedi"
            ],
            [
                "id" => 22,
                "name" => "Penyakit Dalam",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Penyakit-Dalam.png",
                "slug" => "penyakit-dalam"
            ],
            [
                "id" => 25,
                "name" => "Rehabilitasi Medis",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Rehabilitasi-Medis.png",
                "slug" => "rehabilitasi-medis"
            ],
            [
                "id" => 2,
                "name" => "Akupuntur",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Akupuntur.png",
                "slug" => "akupuntur"
            ],
            [
                "id" => 28,
                "name" => "THT",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/THT.png",
                "slug" => "tht"
            ],
            [
                "id" => 4,
                "name" => "Bedah Anak",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Bedah-Anak.png",
                "slug" => "bedah-anak"
            ],
            [
                "id" => 30,
                "name" => "Anak",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Anak.png",
                "slug" => "anak"
            ],
            [
                "id" => 9,
                "name" => "Gigi",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Gigi.png",
                "slug" => "gigi"
            ],
            [
                "id" => 12,
                "name" => "Jantung",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Jantung.png",
                "slug" => "jantung"
            ],
            [
                "id" => 14,
                "name" => "Kandungan",
                "iconUrl" => "https://static.sehatq.com/telemed/speciality/Kandungan.png",
                "slug" => "kandungan"
            ]
        ];

        DB::table('doctor_specialists')->insert($data);
    }
}
