<?php
namespace App\Http\Controllers;

use App\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SoapClient;

class PaymentController extends Controller
{
    function Payment(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255|confirmed|min:8',
            'code' => 'required|max:255',
            'plan_amount' => 'required|max:255',
        ]);
        $name = $request['name'];
        $lastname = $request['lastname'];
        $email = $request['email'];
        $password = $request['password'];
        $password_confirmation = $request['password_confirmation'];
        $phone = $request['phone'];
        $code = $request['code'];
        $plan_amount = $request['plan_amount'];
        
        $plan_amount =  $plan_amount * 1000;

        // $plan_amount =  1000;


        $MerchantID = '10b9dfe4-8ab5-4b2d-9fb2-c639f4e719ba';
        $Amount = $plan_amount;
        $Description = 'پرداخت';
        $Email = $email;
        $Mobile = $phone;
        $CallbackURL = url('/')."/verify?amount=" . $plan_amount . "&name=" . $name . "&lastname=" . $lastname . "&email=" . $email . "&password=" . $password . "&phone=" . $phone . "&code=" . $code;
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );
        // dd($CallbackURL);
        if ($result->Status == 100) {
            if (Payment::where('email', '=', $email)->exists()) {
                return view('Payment_error',['error'=>'ایمیل قبلا ثبت شده است']);
            } 
            elseif(Payment::where('phone', '=', $phone)->exists()){      
                return view('Payment_error',['error'=>'شماره تماس قبلا ثبت شده است']);
            }else{
                return redirect()->to('https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
            }
        } else {
            echo 'ERR: ' . $result->Status;
        }
    }
    function verify(Request $request)
    {
        $MerchantID = '10b9dfe4-8ab5-4b2d-9fb2-c639f4e719ba';
        $Amount = $request['amount'];
        $Authority = $request['Authority'];
        if ($_GET['Status'] == 'OK') {
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ]
            );
            if ($result->Status == 100) {
                //ok Payment shod


                $payment = new Payment();
                $payment->name = $request->name;
                $payment->lastname = $request->lastname;
                $payment->email = $request->email;
                $payment->phone = $request->phone;
                $payment->password = $request->password;
                $payment->amount = $request->amount;
                $payment->code = $request->code;
                $payment->save();

                $email= $request->email;
                $phone = $request->phone;
                $password = $request->password;

                return view('Payment_verified_info',compact('email','phone','password'));

            } else {
                // Payment nashod error = $result->Status;
                return view('Payment_error',['error'=>'پرداخت با مشکل رو به رو شده است']);
            }
        } else {
                //user cancel kard kolan Payment
            return view('Payment_error',['error'=>'پرداخت کنسل شد']);

        }
    }
}