@extends('layouts.global')

@section('content')
    {{-- Transactions Table --}}
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Transaksi</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->name }}</td>
                                            <td>{{ $transaction->email }}</td>
                                            <td>{{ $transaction->phone }}</td>
                                            <td>${{ $transaction->total }}</td>
                                            <td>
                                                @if ($transaction->status == 'PENDING')
                                                    <span class="badge badge-warning">
                                                @elseif ($transaction->status == 'SUCCESS')
                                                    <span class="badge badge-success">
                                                @elseif ($transaction->status == 'FAILED')
                                                    <span class="badge badge-danger">
                                                @endif
                                                {{ $transaction->status }}
                                                    </span> 
                                            </td>
                                            <td>
                                                @if ($transaction->status == 'PENDING')
                                                    <a href="{{ route('transactions.status', $transaction->id) }}?status=SUCCESS" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                                    <a href="{{ route('transactions.status', $transaction->id) }}?status=FAILED" class="btn btn-sm btn-warning"><i class="fa fa-times"></i></a>
                                                @endif
                                                <a href="#myModal" class="btn btn-sm btn-info" data-remote="{{ route('transactions.show', $transaction->id) }}" data-toggle="modal" data-target="#myModal" data-title="Detail Transaksi {{ $transaction->uuid }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Transactions Table End--}}
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('#myModal').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var modal = $(this);
                modal.find('.modal-body').load(button.data('remote'));
                modal.find('.modal-title').html(button.data('title'));
            });
        });
    </script>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
@endpush