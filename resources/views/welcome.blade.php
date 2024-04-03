<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS (if any) -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Sign Up</h3>
                        {{-- for printing errors in array form which came from form validateer --}}

                        {{-- @php
                            print_r($errors->all());
                        @endphp --}}

                        {{-- the error which cames from form validater for showing in list form --}}

                        {{-- @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif --}}



                        <form action="{{ route('addnew') }}" method="POSt">

                            @csrf
                            <div class="form-group">
                                <label for="Firstname">Firstname</label>
                                <input type="text" value="{{ old('firstname') }}" name="firstname"
                                    class="form-control @error('firstname') is-invalid @enderror"
                                     id="firstname" placeholder="Enter your Firstname">
                                <span class="text-danger">
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="Lastname">Lastname</label>
                                <input type="text" value="{{ old('lastname') }}" name="lastname"
                                 class="form-control @error('lastname') is-invalid @enderror"
                                    id="Lastname" placeholder="Enter your Lastname">
                                    <span class="text-danger">
                                        @error('lastname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="{{ old('email') }}" name="email"
                                 class="form-control @error('email') is-invalid @enderror"
                                  id="email" placeholder="Enter your email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" value="{{ old('city') }}" name="city"
                                 class="form-control @error('city') is-invalid @enderror"
                                  id="City" placeholder="Enter your City">
                                <span class="text-danger">
                                    @error('city')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" value="{{ old('password') }}" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                     id="password" placeholder="Enter your password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                        <p class="text-center mt-3">
                            Already have an account? <a href="#">Log in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
