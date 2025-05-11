<x-layout>
    <div class="container-fliud bg-color">
        <div class="row justify-content-center w-100">
            <div class="col-12 my-3 p-0">
                <h1 class="text-center titolo">Registrati</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center p-2">
            <div class="col-12 col-md-5">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome Utente</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="username" aria-describedby="emailHelp">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror    
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">  
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror  
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <p class="text-end">
                        Sei già registrato? <a href="{{route('login')}}" class="color-a">Clicca qui</a>
                    </p>
                    </div>
                    <button type="submit" class="btn-custom">Registrati</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>