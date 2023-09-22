<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//import phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//load model
use App\Models\DataSIP;
use App\Models\User;

//load carbon
use Carbon\Carbon;
class notifikasi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notifikasi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'mengirim email otomatis saat masa berlaku kurang dari 1 bulan atau 30 hari';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $datasip = DataSIP::all();
        $berhasil = 0;
        foreach ($datasip as $key => $value) {
            $now = Carbon::now();
            $end = Carbon::parse($value->akhir_berlaku)->format('Y-m-d H:i:s');
            $end = Carbon::parse($end);
            $sisa = $end->diffInDays($now);

            if($sisa >= 30)
            {
                $user = User::where('id',$value->id_user)->first();
                if($user)
                {
                    $kirim = $this->composeEmail($user->email,$value->akhir_berlaku,$value->no_sip,$sisa);
                    if($kirim)
                    {
                        $berhasil++;
                    }
                    
                }
            }
        }
        $this->info('Berhasil mengirim '.$berhasil.' email');
    }

    public function composeEmail($email,$end,$nomor,$sisa)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'khoirulwahyudin17@gmail.com'; //  sender username
            $mail->Password = 'nhjkyytustzpkace'; // sender password
            $mail->SMTPSecure = 'ssl'; // encryption - ssl/tls
            $mail->Port = 465; // port - 587/465

            $mail->setFrom('adminidi@idi.com', 'Admin IDI');

            $mail->addAddress($email);
            $mail->addCC($email);
            $mail->addBCC($email);

            $mail->addReplyTo('adminidi@idi.com', 'Admin IDI');

            // if (isset($_FILES['emailAttachments'])) {
            //     for ($i = 0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }


            $mail->isHTML(true); // Set email content format to HTML

            $mail->Subject = "Expired SIP Remineder";
            $mail->Body = view('emails.emailNotifikasi', ['end' => $end,'nomor'=>$nomor,'sisa'=>$sisa])->render();

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }

        } catch (Exception $e) {
            return $e;
        }
    }
}
