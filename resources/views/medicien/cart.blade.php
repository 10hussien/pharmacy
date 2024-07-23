@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.show') }}">All medicen</a>
        </div>

    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif



    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

                <tr>
                    <th>medicienId</th>
                    <th>Trade_name</th>
                    <th>Classification</th>
                    <th>quantity</th>
                    <th>Order status</th>
                    <th>Payment status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($cart as $item)
                    <tr class="table-primary">
                        <td>
                            <a class="btn btn-info" href="{{ route('medicien.Order', $item->mediciens_id) }}">medicien order
                            </a>
                        </td>

                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->Trade_name }}</td>
                        <td>{{ $item->Classification }}</td>
                        <td>
                            @if ($item->status == 0)
                                <p><i>In preparation</i></p>
                            @elseif ($item->status == 1)
                                <p><i>has been sent</i></p>
                            @elseif ($item->status == 2)
                                <p><i>Received</i></p>
                            @endif
                        </td>
                        <td>
                            @if ($item->Payment_status == 0)
                                <p><i>Unpaid</i></p>
                            @elseif ($item->Payment_status == 1)
                                <p><i>paid</i></p>
                            @endif
                        </td>
                        <td> <a class="btn btn-info" href="{{ route('medicien.Editorders', $item->id) }}">EditOrder</a>
                        </td>


                    </tr>
                @endforeach


            </tbody>
        </table>

        {{-- {!! $medicien->links() !!} --}}
    </div>
@endsection


{{-- <a class="btn btn-info"href="{{ route('medicien.Order', $item->medicienId) }}">order</a>
        {{ $item->quantity }}
        <br> --}}
