<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        dd($request->input());
        if ($request->has('email')) {

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $subject = "Contact email from your Website";
            $message = $request->input('message');

            // Form validation
            if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {

                // reCAPTCHA validation
                if ($request->has('g-recaptcha-response') && !empty($request->input('g-recaptcha-response') )) {

                    // Google secret API
                    $secretAPIkey = '6LfoZcsZAAAAAAVQM3GgwYR30uIT6QFSz-CiJMSw';

                    // reCAPTCHA response verification
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretAPIkey . '&response=' . $_POST['g-recaptcha-response']);

                    // Decode JSON data
                    $response = json_decode($verifyResponse);
                    if ($response->success) {

                        $toMail = "nellytadi@gmail.com";
                        $header = "From: " . $name . "<" . $email . ">\r\n";
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "Content-type: text/html\r\n";

                        $body  = '<table style="padding: 35px; background-color: #f5f5f5; font-family: Roboto, sans-serif; font-size: 1rem; text-align: left; border-radius: 4px">';
                        $body .= '<tr><th style="font-size: 1.5rem; font-weight: 600; color: #1E50BC">'.$message.'</th></tr>';
                        $body .= '<tr><th style="font-size: 1.5rem; font-weight: 600; color: #1E50BC">'.$phone.'</th></tr>';
                        $body .= '</table>';
                        mail($toMail, $subject, $body, $header);

                        $response = array(
                            "status" => "alert-success",
                            "message" => "Your mail have been sent."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Please check on the reCAPTCHA box."
                    );
                }
            } else {
                $response = array(
                    "status" => "alert-danger",
                    "message" => "All the fields are required."
                );
            }

            return back()->with($response);
        }

    }
}
