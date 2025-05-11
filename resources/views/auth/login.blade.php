<x-layout>
    <div class="container-fliud bg-color">
        <div class="row justify-content-center w-100">
            <div class="col-12 my-3 p-0">
                <h1 class="text-center titolo">Accedi al tuo account</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center p-2">
            <div class="col-12 col-md-5">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label @error('email') is-invalid @enderror">Email address</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror   
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <p class="text-end">
                        Non hai un account? <a href="{{route('register')}}" class="color-a">Registrati qui</a>
                    </p>
                    </div>
                    <button type="submit" class="btn-custom">Accedi</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>