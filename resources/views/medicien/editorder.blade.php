@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.Cart') }}">All order</a>
        </div>
    </div>
    <br>


    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class='container p-5'>
        <form action="{{ route('medicien.Editorder', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">status</label>
                <input type="text" class="form-control" name="status" value="{{ $data->status }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Payment_status</label>
                <input type="text" class="form-control" name="Payment_status" value="{{ $data->Payment_status }}">
            </div>
            <button type="submit" class="btn btn-primary">Update </button>


        </form>

    </div>
@endsection
