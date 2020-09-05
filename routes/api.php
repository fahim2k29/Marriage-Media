<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('create-payment', function(){
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AS5y_yc9FRQPLU1cnqloG-ZZDetRrJX9RRnpQJQ6zzEvgONxcRkw-ko5wAl8ToSzqGSufWRqe7Bs5WVP',
            'EPyeN-2YX2TWgdwSDlPvp7NzoHRwr87pjaqqUZH5GOM3vWK2zRGe-2wZ04FCMsAqhdI_wm68T-2bJWOY'
        )
    );


        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice(7.5);
        $item2 = new Item();
        $item2->setName('Granola bars')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setSku("321321") // Similar to `item_number` in Classic API
            ->setPrice(2);

        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));

        $details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $baseUrl = getBaseUrl();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("/user/dashboard")
            ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");

        $inputFields = new InputFields();   
        $inputFields->setNoShipping(1);

        $webProfile = new WebProfile();
        $webProfile->setName('test'.unique())->setInputFields($inputFields);

        $webProfileId = $webProfile->create($apiContext)->getId();

        $payment = new Payment();
        $payment->setExperienceProfileId($webProfileId);
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            exit(1);
        }
        
        $approvalUrl = $payment->getApprovalLink();
        
        ResultPrinter::printResult("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", "<a href='$approvalUrl' >$approvalUrl</a>", $request, $payment);

        return $payment;

});

Route::post('execute-payment', function(Request $request){
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AS5y_yc9FRQPLU1cnqloG-ZZDetRrJX9RRnpQJQ6zzEvgONxcRkw-ko5wAl8ToSzqGSufWRqe7Bs5WVP',
            'EPyeN-2YX2TWgdwSDlPvp7NzoHRwr87pjaqqUZH5GOM3vWK2zRGe-2wZ04FCMsAqhdI_wm68T-2bJWOY'
        )
    );

    
    if (isset($_GET['success']) && $_GET['success'] == 'true') {

    $paymentId = $_GET['paymentId'];
    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);



    try {   
        $result = $payment->execute($execution, $apiContext);
        ResultPrinter::printResult("Executed Payment", "Payment", $payment->getId(), $execution, $result);
        try {
            $payment = Payment::get($paymentId, $apiContext);
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    } 
    catch (Exception $ex) {
        ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex);
        exit(1);
    }
    
    ResultPrinter::printResult("Get Payment", "Payment", $payment->getId(), null, $payment);
    
    return $payment;
} 
else {
    ResultPrinter::printResult("User Cancelled the Approval", null);
    exit;
}
});


