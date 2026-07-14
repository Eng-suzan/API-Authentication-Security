<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>

    <h2>Payment Form</h2>

    <form action="{{ route('payment.process') }}" method="POST">
        @csrf

        <label>Name</label><br>
        <input type="text" name="name"><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <label>Amount</label><br>
        <input type="number" name="amount"><br><br>

        <button type="submit">
            Pay with PayPal
        </button>

    </form>

</body>
</html>