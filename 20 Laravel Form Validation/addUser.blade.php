<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info</title>
</head>
<body>

    <h2>User Information Form</h2>
    {{-- @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>  
    @endif--}}
      
    <form method="POST" action="{{ route('addUser') }}">
        @csrf

        <label>Name:</label><br>
        <input type="text"value="{{old('name')}}" name="name" placeholder="Enter your name"><br><br>
       <span>
        @error('name')
            {{$message}}
        @enderror
       </span>

        <label>Email:</label><br>
        <input type="email" value="{{old('email')}}" name="email" placeholder="Enter your email"><br><br>
         <span>
        @error('email')
            {{$message}}
        @enderror
       </span>

        <label>Age:</label><br>
        <input type="number"value="{{old('age')}}" name="age" placeholder="Enter your age"><br><br>
         <span>
        @error('age')
            {{$message}}
        @enderror
       </span>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
