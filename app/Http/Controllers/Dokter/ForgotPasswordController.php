<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
//import phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth2.lupapassword');
    }
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Reset Password');
        // });
        $this->composeEmail($request->email, $token);

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function composeEmail ($email, $token)
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

            $mail->Subject = "Email Verification";
            $mail->Body = view('emails.forgetPassword', ['token' => $token])->render();

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }

    public function showResetPasswordForm($token)
    {
        return view('auth2.lupapasswordLink', ['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required_with:ulangi_password|same:ulangi_password|min:6|max:50',
            // 'ulangi_password' => 'required|string|min:6|max:50'
            'ulangi_password' => 'required|string|min:6|max:50'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('success', 'Passwordmu telah di ubah!');
    }
}
