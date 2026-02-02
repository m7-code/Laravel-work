<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

          
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            

            <div class="card">
                <div class="card-header">
                    <h4>Upload Photo</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input 
                                type="file" 
                                name="photo" 
                                class="form-control @error('photo') is-invalid @enderror"
                                accept="image/png, image/jpeg, image/jpg"
                            >

                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <div class="row">
            
                @foreach ($users as $user)
                     <div class="col-2">
                        <img class="img-fluid" src="{{ asset('storage/' . $user->file_name) }}" alt="Uploaded Image" class="img-fluid">
                        </div>
                @endforeach

        </div>    



    </div>
</div>

</body>
</html>

