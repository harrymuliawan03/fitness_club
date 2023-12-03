<?php
  namespace App\Controllers;
  use App\Models\SettingModel;
  use App\Libraries\Paypal_lib;
  use App\Views\razorpay\Razorpay;
  use Razorpay\Api\Api;
  use CodeIgniter\I18n\Time;

  class Payment extends BaseController
  {

    public function pay_membership()
    {


      echo view('frontend/member_fees');
    }
    public function pay_process()
    {
      if ($this->request->getMethod() === 'post') {
            // Assuming you have loaded the necessary libraries, models, etc.
            // You may need to adjust this based on your application structure.
            $id = $this->request->getPost('user_id'); // Add a hidden field in your form for payment_method

            // Perform necessary validations and processing
            // ...

            // Update payment status in the database
            $this->updatePaymentStatus($id);
            return redirect()->to('frontend/members_login');
            // Redirect or show success message
            // ...
        } else {
            // Redirect to an appropriate page if the form was not submitted
            redirect('frontend/index');
        }
    }

    private function updatePaymentStatus($id) {
        // Load the necessary model (replace 'MembersModel' with your actual model)
        $model = model('MembersModel');

        $timezone = 'Asia/Jakarta'; // Replace with your desired timezone
        $currentDateTime = Time::now($timezone)->toDateTimeString();
        // Add 1 year to the current date and time
    $oneYearLater = $currentDateTime->addYear();
    $oneMonthLater = $currentDateTime->addMonth();
    // / Add 6 months to the current date and time
    $halfYearLater = $currentDateTime->addMonths(6);

    // Now $currentDateTime contains the current date and time in 'Y-m-d H:i:s' format in the specified timezone
    echo $currentDateTime;

        // Assuming you have a method in your model to update the payment status
        $data = array(
            'fees' => 'Paid', 
        );

        // Assuming you have a method in your model like updatePaymentStatusById
        $model->updatePaymentStatusById($id, $data);
    }

    public function Check_out()
    {
      $orderData = [
        'receipt' => 'rcptid_11',
        'amount' => 39900, // 39900 rupees in paise
        'currency' => 'INR'
      ];
      $razorpayOrder = $api->order->create($orderData);
    }

  }


 ?>