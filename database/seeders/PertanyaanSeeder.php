<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aspek 1, kriteria kepemimpinan
        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '1',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Kepemimpinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '1',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Kepemimpinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '1',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Kepemimpinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '1',
            'nilai' => '4',
            'ket' => 'Baik Dalam Kepemimpinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '1',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Kepemimpinan',
        ]);

        //aspek 1, kriteria kerja sama
        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '2',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Bertanggungjawab',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '2',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Bertanggungjawab',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '2',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Bertanggungjawab',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '2',
            'nilai' => '4',
            'ket' => 'Baik Dalam Bertanggungjawab',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '2',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Bertanggungjawab',
        ]);

        //aspek 1, kriteria Kerapian
        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '3',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Komunikasi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '3',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Komunikasi',
        ]);
        
        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '3',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Komunikasi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '3',
            'nilai' => '4',
            'ket' => 'Baik Dalam Komunikasi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '3',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Komunikasi',
        ]);

        //aspek 1, kriteria kepribadian
        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '4',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Keadilan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '4',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Keadilan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '4',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Keadilan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '4',
            'nilai' => '4',
            'ket' => 'Baik Dalam Keadilan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '1',
            'kriteria_id' => '4',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Keadilan',
        ]);

        //aspek = 2 , kriteria disiplin
        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '5',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Disiplin',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '5',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Disiplin',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '5',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Disiplin',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '5',
            'nilai' => '4',
            'ket' => 'Baik Dalam Disiplin',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '5',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Disiplin',
        ]);

        //aspek = 2 , kriteria Kerajinan
        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '6',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Kerajinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '6',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Kerajinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '6',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Kerajinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '6',
            'nilai' => '4',
            'ket' => 'Baik Dalam Kerajinan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '6',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Kerajinan',
        ]);

        //aspek = 2 , kriteria Penataan
        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '7',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Membuat Keputusan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '7',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Membuat Keputusan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '7',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Membuat Keputusan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '7',
            'nilai' => '4',
            'ket' => 'Baik Dalam Membuat Keputusan',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '7',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Membuat Keputusan',
        ]);

        //aspek = 2 , kriteria Keuletan
        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '8',
            'nilai' => '1',
            'ket' => 'Sangat Buruk Dalam Pengendalian Emosi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '8',
            'nilai' => '2',
            'ket' => 'Buruk Dalam Pengendalian Emosi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '8',
            'nilai' => '3',
            'ket' => 'Cukup Dalam Pengendalian Emosi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '8',
            'nilai' => '4',
            'ket' => 'Baik Dalam Pengendalian Emosi',
        ]);

        Pertanyaan::Create([
            'aspek_id' => '2',
            'kriteria_id' => '8',
            'nilai' => '5',
            'ket' => 'Sangat Baik Dalam Pengendalian Emosi',
        ]);
    }
}
