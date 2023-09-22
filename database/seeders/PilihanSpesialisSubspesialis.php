<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pilihan;
use App\Models\Spesialis;
use App\Models\Subspesialis;



class PilihanSpesialisSubspesialis extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        /*------------------------------------------
        --------------------------------------------
        US Country Data
        --------------------------------------------
        --------------------------------------------*/
        $pilihan = Pilihan::create(['name' => 'Dokter Umum']);

        /*------------------------------------------
        --------------------------------------------
        India Country Data
        --------------------------------------------
        --------------------------------------------*/
        $pilihan = Pilihan::create(['name' => 'Dokter Spesialis']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Anestesiologi dan Terapi Intensif Sp.An']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Anastesia Terapi Intensi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Anestesia Kardiovaskular']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Anestesia Regional dan Manajemen Nyeri']);

        //===================================Ilmu Bedah	Sp.B==========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Bedah	Sp.B']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Bedah Anak']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Bedah Disgestif']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Bedah Onkologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Bedah Vaskular']);

        //===================================Ilmu Penyakit Dalam Sp.PD==========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Penyakit Dalam Sp.PD']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Geriatri Sp.PD-KGer']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Ginjal Hipertensi Sp.PD-KGH']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Hematologi Onkologi Medik Sp.PD-KHOM']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Kardiovaskular Sp.PD-KKV']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Tropik Infeksi Sp.PD-KPTI']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikosomatik Sp.PD-Kpsi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Respirologi ']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Reumatologi']);

        //===================================Ilmu Kesehatan Anak Sp.A=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Kesehatan Anak Sp.A']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Respirologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Endokrinologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Gastro Hepatologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Hemato Ongkologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Infeksi dan Pediatrik Tropis']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Pediatrik Gawat Darurat']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Kardiologi ']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Nefrologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Nutrisi dan Penyakit Metabolik']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Radiologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Neurologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Perinatologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Alergi Imunologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Tumbuh Kembang']);


        //===================================Obstetri dan Ginekologi Sp.OG=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Obstetri dan Ginekologi Sp.OG']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Uroginekologi Rekonstruksi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Fetomaternal']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Onkologi Ginekologi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Fertilitas Endokrinologi Reproduksi']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Obstetri Ginekologi Sosial']);

        //===================================Neurologi	Sp.N=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Neurologi Sp.N']);


        //===================================Ilmu Kedokteran Jiwa Sp.KJ=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Kedokteran Jiwa Sp.KJ']);

        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikiatri Anak dan Remaja']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikoterapi Kedokteran']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikiatri Geriatri']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikiatri Forensik']);
        Subspesialis::create(['spesialis_id' => $spesialis->id, 'name' => 'Psikiatri Adiksi']);

        //===================================Ilmu Keshatan Mata=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Kesehatan Mata Sp.M']);

        //===================================Dermatologi dan Venereologi Sp.DV=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Dermatologi dan Venereologi Sp.DV']);

        //===================================Ilmu Penyakit Telinga, Hidung, Tenggorok, Bedah Kepala Leher Sp.THT=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Penyakit Telinga, Hidung, Tenggorok, Bedah Kepala Leher Sp.THT']);

        //===================================Ilmu Penyakit Jantung dan Pembuluh Darah Sp.JP=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Penyakit Jantung dan Pembuluh Darah Sp.JP']);

        //===================================Pulmonologi dan Kedokteran Respirasi Sp.P=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Pulmonologi dan Kedokteran Respirasi Sp.P']);

        //===================================Radiologi Sp.Rad=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Radiologi Sp.Rad']);

        //===================================Kedokteran Forensik dan Studi Medikolegal Sp.FM=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Kedokteran Forensik dan Studi Medikolegal Sp.FM']);

        //===================================Kedokteran Forensik dan Studi Medikolegal Sp.FM=========================================//
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Patologi Anatomik Sp.PA']);


        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Patologi Klinik Sp.PK']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Orthopaedi dan Traumatologi Sp.OT']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Urologi Sp.U']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Bedah Saraf Sp.BS']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Kedokteran Fisik dan Rehabilitasi	Sp.KFR']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Bedah Plastik Rekonstruksi dan Estetik Sp.BP-RE']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Kedokteran Olah Raga Sp.KO']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Mikrobiologi Klinik Sp.MK']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Farmakologi Klinik	Sp.FK']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Kedokteran Okupasi	Sp.Ok']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Bedah Toraks Kardiak Vaskular Sp.BTKV']);

        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Onkologi Radiasi Sp.OnkRad']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Kedokteran Penerbangan	Sp.KP']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Ilmu Gizi Klinik Sp.GK']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Parasitologi Klinik Sp.ParK']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Akupunktur Medik Sp.Ak']);
        $spesialis = Spesialis::create(['pilihan_id' => $pilihan->id, 'name' => 'Kedokteran Keluarga Layanan Primer	Sp.KKLP']);


    }
}