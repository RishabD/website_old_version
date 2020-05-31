<script src="https://www.paypal.com/sdk/js?client-id="></script>
<script>
var money=1;

function change_value() {
if(document.getElementById('money').value>=1&&((document.getElementById('money').value)*100)%1==0){
  money = document.getElementById('money').value;
  document.getElementById('money').value = money;
  }
}
document.getElementById('money').addEventListener("input", change_value);
paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: money
          }
        }],
        application_context: {
       shipping_preference: 'NO_SHIPPING'
     }
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        // Call your server to save the transaction
        return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    }
  }).render('#paypal-button-container');
  </script>
  <?php?>
