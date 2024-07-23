@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.Cart') }}">All order</a>
        </div>

    </div>
    <br>

    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">

        </thead>
        <tbody class="table-group-divider">
            <div class="mb-3">
                <img src="/images/{{ $data->Photo }}" width="200px">
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>Trade_name</h2>
                </label>
                <h3>{{ $data->Trade_name }}</h3>
            </div>
            <div class="mb-3">
                <label for="" class="form-lable">
                    <h2>price</h2>
                </label>
                <h3>{{ $data->Price }}</h3>
            </div>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
@endsection
