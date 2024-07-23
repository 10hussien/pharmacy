@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.show') }}">All medicien</a>
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
        <form action="{{ route('medicien.update', $medicien->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Scientific_name</label>
                <input type="text" class="form-control" name="Scientific_name" value="{{ $medicien->Scientific_name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Trade_name</label>
                <input type="text" class="form-control" name="Trade_name" value="{{ $medicien->Trade_name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Classification</label>
                <input type="text" class="form-control" name="Classification" value="{{ $medicien->Classification }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Manufacturer</label>
                <input type="text" class="form-control" name="Manufacturer" value="{{ $medicien->Manufacturer }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity_available</label>
                <input type="text" class="form-control" name="Quantity_available"
                    value="{{ $medicien->Quantity_available }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Expiration_date</label>
                <input type="text" class="form-control" name="Expiration_date" value="{{ $medicien->Expiration_date }}">
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" name="Price" value="{{ $medicien->Price }}">
            </div>

            <div class="mb-3">
                <img src="/images/{{ $medicien->Photo }}" width="200px">
                <input type="file" class="form-control" name="Photo">
            </div>

            <button type="submit" class="btn btn-primary">Update </button>


        </form>

    </div>
@endsection
