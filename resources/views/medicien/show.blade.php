@extends('medicien.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('medicien.create') }}">Add</a>
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
                    <th>id</th>
                    <th>image</th>
                    <th>Trade_name</th>
                    <th>Classification</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($medicien as $item)
                    <tr class="table-primary">
                        <td>{{ $item->id }}</td>
                        <td><img src="images/{{ $item->Photo }}" width="200px"></td>
                        <td>{{ $item->Trade_name }}</td>
                        <td>{{ $item->Classification }}</td>
                        <td>{{ $item->Price }}</td>
                        <td>
                            @auth
                                <form action="{{ route('medicien.delete', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a class="btn btn-primary" href="{{ route('medicien.edit', $item->id) }}">Edit</a>
                            {{--<a class="btn btn-warning" href="{{ route('medicien.softDelete', $item->id) }}">Spfet Delete</a>--}}
                                <a class="btn btn-info"
                                    href="{{ route('medicien.showDescrpition', $item->id) }}">showDescription</a>
                            @endauth
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot>

            </tfoot>
        </table>

        {!! $medicien->links() !!}
    </div>
@endsection
