<x-layout>
    <div class="container-fliud bg-color">
        <div class="row justify-content-center w-100">
            <div class="col-12 my-3 p-0">
                <h1 class="text-center titolo">Crea un articolo</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center p-2">
            <div class="col-12 col-md-5">
                <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" aria-describedby="emailHelp">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror    
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" value="{{old('subtitle')}}" class="form-control" id="subtitle" aria-describedby="emailHelp">
                        @error('subtitle')
                            <div class="text-danger">{{$message}}</div>
                        @enderror    
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagini</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-select" aria-label="Default select example">
                            <option selected disabled>Seleziona una categoria</option>
                            @foreach ($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>   
                            @endforeach
                            @error('category')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control" id="body" rows="3">{{old('body')}}</textarea>
                        @error('body')
                                <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn-custom">Pubblica</button>
                        <a href="{{route('homepage')}}" class="color-a">Torna alla homepage</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>