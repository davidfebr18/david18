<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<div class="container ">
    <div class="row justify-content-center pt-150">
        <div class="col-lg-5 mt-100">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <batton type="button" class="btn-close" data-bs-dismiss="alret" arial-label="Close"> </batton>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <batton type="button" class="btn-close" data-bs-dismiss="alret" arial-label="Close"> </batton>
            </div>
            @endif
            <form method='POST' action=" {{route('login')}}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mt-4">
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required
                        autocomplite="email" autofocus placeholder="email address">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- Password input -->
                <div class="form-outline mt-4">
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" required autocomplite="password"
                        autofocus placeholder=" password">

                    @error('password')
                    <span class="invalid-feedback" role="alret">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Masuk</button>


            </form>
        </div>
    </div>
</div>

</html>