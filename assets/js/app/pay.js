function payWithRave() {
  let API_publicKey = "FLWPUBK_TEST-65299f2cdf8b85a67eaa1fde8fa6f793-X";
    var x = getpaidSetup({
        PBFPubKey: API_publicKey,
        customer_email: "tom@farmsby.com",
        amount: 2000,
        customer_phone: "23408179685649",
        currency: "NGN",
        txref: "rave-123456",
        meta: [{
            metaname: "flightID",
            metavalue: "AP1234"
        }],
        onclose: function() {},
        callback: function(response) {
            var txref = response.tx.txRef; // collect txRef returned and pass to a          server page to complete status check.
            console.log("This is the response returned after a charge", response);
            if (
                response.tx.chargeResponseCode == "00" ||
                response.tx.chargeResponseCode == "0"
            ) {
                // redirect to a success page
            } else {
                // redirect to a failure page.
            }

            x.close(); // use this to close the modal immediately after payment.
        }
    });
}
function payWithPaystack(){
  var handler = PaystackPop.setup({
    key: 'pk_live_bb08343f497bceda1118df60cf1f7c7b19361bd4',
    email: 'tom@farmsby.com',
    amount: 10000,
    currency: "NGN",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    metadata: {
       custom_fields: [
          {
              display_name: "Mobile Number",
              variable_name: "mobile_number",
              value: "+2348012345678"
          }
       ]
    },
    callback: function(response){
        alert('success. transaction ref is ' + response.reference);
    },
    onClose: function(){
        alert('window closed');
    }
  });
  handler.openIframe();
}