<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Administrator;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Mengajar;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Administrator::create([
            'id_admin' => '1',
            'password' => 'password'
        ]);

        Guru::create([
            'nip' => '1234', 'nama_guru' => 'Yuli Dianah S.T.', 'jk' => 'P', 'alamat' => 'Bogor Gading Residence', 'password' => 'password',
        ]);

        Guru::create([
            'nip' => '1235', 'nama_guru' => 'Fani Indriyaningsih S.Kom.', 'jk' => 'P', 'alamat' => 'Ciomas City', 'password' => 'password',
        ]);

        Guru::create([
            'nip' => '1236', 'nama_guru' => 'Alfi Rahman Hakim S.Kom.', 'jk' => 'L', 'alamat' => 'Bogor City', 'password' => 'password',
        ]);

        Mapel::create([
            'nama_mapel' => 'Basis Data'
        ]);

        Mapel::create([
            'nama_mapel' => 'Pemrograman Web dan Perangkat Bergerak'
        ]);

        Mapel::create([
            'nama_mapel' => 'Pemrograman Berorientasi Objek'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Rekayasa Perangkat Lunak'
        ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL 1', 'jurusan_id' => '1'
        ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL 2', 'jurusan_id' => '1'
        ]);

        Siswa::create([
            'nis' => '1020009426', 'nama_siswa' => 'Mochamad Tegar Santoso', 'jk' => 'L', 'alamat' => 'Bojonggede City', 'kelas_id' => '1', 'password' => 'password',
        ]);

        Siswa::create([
            'nis' => '1020009428', 'nama_siswa' => 'M. Zaqqye Saprudin', 'jk' => 'L', 'alamat' => 'Cilebut City', 'kelas_id' => '1', 'password' => 'password',
        ]);

        Mengajar::create([
            'guru_id' => 1,
            'mapel_id' => 1, 
            'kelas_id' => 1, 
        ]);

        Mengajar::create([
            'guru_id' => 2,
            'mapel_id' => 2, 
            'kelas_id' => 1, 
        ]);
    }
}
