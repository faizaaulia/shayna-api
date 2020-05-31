<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $transaction->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $transaction->email }}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{ $transaction->phone }}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{ $transaction->address }}</td>
    </tr>
    <tr>
        <th>Total</th>
        <td>{{ $transaction->total }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $transaction->status }}</td>
    </tr>
    <tr>
        <th>Products</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                </tr>
                @foreach ($transaction->details as $detail)
                    <tr>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ $detail->product->type }}</td>
                        <td>${{ $detail->product->price }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transactions.status', $transaction->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Success
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $transaction->id) }}?status=PENDING" class="btn btn-warning btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $transaction->id) }}?status=FAILED" class="btn btn-danger btn-block">
            <i class="fa fa-times"></i> Set Failed
        </a>
    </div>
</div>