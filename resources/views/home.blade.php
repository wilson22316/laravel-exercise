<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? '預設標題' }}</title>
</head>

<body>
    <h1>Electricity Bill List</h1>
    {{-- <div> {{ $bills }}</div> --}}

    @foreach ($bills as $bill)
    <tr>
        <td>{{ $bill->customer_id }}</td>
        <td>{{ $bill->total_amount }}</td>
    </tr>
    @endforeach
</body>

</html>