@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.show') }}">All medicien</a>
        </div>

    </div>
    <br>

    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">

        </thead>
        <tbody class="table-group-divider">
            <div class="mb-3">
                <img src="/images/{{ $medicien->Photo }}" width="200px">
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Scientific_name</h2>
                </label>
                <h3>{{ $medicien->Scientific_name }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Trade_name</h2>
                </label>
                <h3>{{ $medicien->Trade_name }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Classification</h2>
                </label>
                <h3>{{ $medicien->Classification }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Manufacturer</h2>
                </label>
                <h3>{{ $medicien->Manufacturer }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Quantity_available</h2>
                </label>
                <h3>{{ $medicien->Quantity_available }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Expiration_date</h2>
                </label>
                <h3>{{ $medicien->Expiration_date }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>price</h2>
                </label>
                <h3>{{ $medicien->Price }}</h3>
            </div>
            <p class="btn-holder">
                <a href="{{ route('medicien.Cart', $medicien->id) }}"class="btn btn-primary btn-block text-center"
                    role="button">Add to cart </a>
            </p>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
