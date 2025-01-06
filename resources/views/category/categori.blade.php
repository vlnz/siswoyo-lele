
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswoyo Lele</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/lele.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
</head>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Category Tampilan
                        <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Category</a>
                        <a href="{{ url('/') }}" class="btn btn-secondary float-end me-2">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" style="width: 70px; height:70px;"
                                            alt="Img" />
                                    </td>

                                    <td>
                                        <a href="{{ url('categories/' . $item->id . '/edit') }}"
                                            class="btn btn-success mx-2">Edit</a>

                                        <a href="{{ url('categories/' . $item->id . '/delete') }}"
                                            class="btn btn-danger mx-1" onclick="return confirm('Yakin Deleted ?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>



