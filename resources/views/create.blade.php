@extends('medicien.layout')

@section('content')


    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href={{ route('medicien.shwo') }}>All products</a>
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


        <form action="{{ route('medicien.add') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Scientific_name</label>
                <input type="text" class="form-control" name="Scientific_name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trade_name</label>
                <textarea class="form-control" name="Trade_name" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Classification</label>
                <textarea class="form-control" name="Classification" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Manufacturer</label>
                <textarea class="form-control" name="Manufacturer" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity_available</label>
                <textarea class="form-control" name="Quantity_available" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Expiration_date</label>
                <textarea class="form-control" name="Expiration_date" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">price</label>
                <textarea class="form-control" name="price" id="" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>


    </div>

@endsection
