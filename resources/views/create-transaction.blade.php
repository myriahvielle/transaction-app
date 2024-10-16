<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE TRANSACTION PAGE</title>
</head>
<body>
    <form action="{{route('storeTransaction')}} " method="GET">
        @method('POST')
    @csrf
    <label for = "transaction_title">Title: </label>
    <input type ="text" id="transaction_title" name="transaction_title" required>
    <br>
    <label for = "description">Description: </label>
    <input type ="text" id="description" name="description" required>
    <br>
    <label for = "status">Status: </label>
    <select id ="status">
        <option value="successful">Successful</option>
        <option value="declined">Declined</option>
    </select>
    <br>
    <label for = "total_amount">Total Amount: </label>
    <input type ="text" id="total_amount" name="total_amount" required>
    <br>
    <label for = "transaction_number">Transaction Number: </label>
    <input type ="text" id="transaction_number" name="transaction_number" required>
    <br>
    <button type="submit">CREATE</button>

    </form>
    
    
</body>
</html>