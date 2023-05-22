<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrolled;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {

        $course = Course::where('id', $request->course_id)->first();
        // save the requested course in session memory
        session(['course' => $course]);

        $data = [
            "tx_ref" => rand(),
            "amount" => $course->courseprice,
            "currency" => 'USD',
            "redirect_url" => route('flutterwave-callback'),
            'customer' => [
                // collect customer details from logged in user info
                'email' => Auth::user()->email,
                'phonenumber' => Auth::user()->phone,
                'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
            ],
        ];

        $url = "https://api.flutterwave.com/v3/payments";
        $headers = [
            'Content-Type: application/json',
            'Authorization: FLWSECK_TEST-905068afe801779655ffe25800b0025f-X' //Secret key of your account 
        ];


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 200);
        curl_setopt($curl, CURLOPT_TIMEOUT, 200);
        $response_body = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response_body, true);

        if ($err) {
            throw new \Exception($err);
        }

        if (isset($result['status']) && $result['status'] == 'success') {
            if (isset($result['data']['link']) && $result['data']['link'] != ' ') {
                return Redirect::to($result['data']['link']);
            }
        }

        throw new \Exception('Your transaction could not processed.');
    }

    public function donate_callback(Request $request)
    {
        $response = $request->all();
        if ($response['status'] == 'successful') {

            $status = "SUCCESS";
            $pageTitle = 'Payment Successful';

            $course = session('course');

            // capture enrollment information
            $enrollmentInfo = [
                // user id
                'user_id' => Auth::user()->id,
                'course_id' => $course->id,
                // 'teacher_id' => $course->teacher_id
            ];

            // $user = Auth::user();
            // // $user->course->attach($course->id);

            // // $user->insert('course', $course->id);

            // INSERT INTO $users (course) VALUES ($course->id), 

            $user = Auth::user();
            $courseId = $course->id;

            DB::table('users')
                ->where('id', $user->id)
                ->update(['course' => $courseId]);



            // make an enrollment
            $grab = Enrolled::create($enrollmentInfo);

            return redirect()->action(
                [DashboardController::class, 'studentindex'],
                // [
                //     'details' => Course::Where($course->id, $grab->course_id)
                // ]
            )->with(
                'message',
                'Payment Succssfull. Welcome to' . ' ' . $course->coursename
            );

            // return redirect()->route('/', [
            //     'details' => Course::Where($course->id, $grab->course_id)
            // ])->with(
            //     'message',
            //     'Payment Succssfull. Welcome to' . ' ' . $course->coursename
            // );

            // return view('dashboards.student_dash.dashboard', [
            //     'details' => Course::Where($course->id, $grab->course_id)
            // ]);
            // return view('payment_success', compact('response','pageTitle'));

        } else {
            $status = "FAIL";
            $pageTitle = 'Payment Error';
            // dd($response);
            return view(' payment_error', compact('response', 'pageTitle'));
        }
        //Store the transaction as per your requirement
    }
}
