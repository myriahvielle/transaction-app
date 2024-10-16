
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS</h1>
    <div>ID: {{ $transaction->id}} </div>
    <div>Title: {{ $transaction->$transaction_name}} </div>
    <div>Description: {{ $transaction->description}} </div>
    <div>Status: {{ $transaction->status}} </div>
    <div>Total Amount: {{ $transaction->total_amount}} </div>
    <div>Transaction Number: {{ $transaction->transaction_number}} </div>
    <hr>

    <form action="{{route('deleteTransaction', ['id' => $transaction->id])}}" method="POST"
        onSubmit="return confirm('Are you sure?')">
        @method("DELETE")
        @csrf
        <button type="submit">Delete</button>
    </form>
     <form action="{{route ('viewTransaction', ['id'=> $transaction->id])}}"method="GET">
        <button type="submit">HOME</button>
    </form>
</body>
</html>