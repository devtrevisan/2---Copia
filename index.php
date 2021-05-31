<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento via API - Mercado Pago</title>
</head>
<body>
    <form action="/controllers/PaymentController.php" method="post" id="pay" name="pay" >
        <h3>Detalhe do comprador</h3>
     <div>
       <div>
         <label for="email">E-mail</label>
         <input type="email" id="email" name="email" value="test_user_92801501@testuser.com"  placeholder="your email"/>
       </div>
       <div>
         <label for="docType">Tipo de documento</label>
         <select id="docType" data-checkout="docType"></select>
       </div>
       <div>
         <label for="docNumber">Número do documento</label>
         <input type="text" id="docNumber" data-checkout="docNumber" placeholder="19119119100" />
       </div>
     </div>
   <h3>Detalhes do cartão</h3>
     <div>
       <div>
         <label for="cardholderName">Titular do cartão</label>
         <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" />
       </div>
       <div>
         <label for="">Data de vencimento</label>
         <div>
           <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="MM" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
           <span class="date-separator">/</span>
           <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="YY" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
         </div>
       </div>
       <div>
         <label for="cardNumber">Número do cartão</label>
         <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4509 9535 6623 3704" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
       </div>
		 <div class="brand"></div> 
       <div>
         <label for="securityCode">Código de segurança</label>
         <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
       </div>
       <div id="issuerInput">
         <label for="issuer">Banco emissor</label>
         <select id="issuer" name="issuer" data-checkout="issuer"></select>
       </div>
       <div>
         <label for="installments">Parcelas</label>
         <select id="installments" class="form-control" name="installments"></select>
       </div>
	   <div>
            <input type="hidden" name="amount" id="amount" value="395.75"/>
            <input type="hidden" name="description"/>
            <input type="hidden" name="paymentMethodId" />
            <input type="submit" value="Pay!" />
        </div>
    </form>
	
	<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
	<script src="lib/js/javascript.js"></script>
</body>
</html>