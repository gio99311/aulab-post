<x-layout>
    <div class="container-fliud bg-color min-vh-100 w-100">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center color-s">Home Page</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                @if(session('message'))
                    <div class="alert alert-success my-3">
                        {{session('message')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>