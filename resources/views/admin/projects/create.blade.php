@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center p-4">
                <div class="col-7 my-3">
                    <form action="{{route('admin.projects.store')}}" method="POST">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg_orange" for="type_id">Travel</label>
                            <select name="type_id" placeholder="Insert travel" class="px-3 py-2 border border-secondary form-control">
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->travel}}</option>  
                                @endforeach
                            </select>  
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg_orange" for="title">City</label>
                            <input type="text" name="title" placeholder="Insert city" class="px-3 py-2 border border-secondary form-control rounded-end @error('title') is-invalid @enderror">
                            @error("title")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>  
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg_orange" for="description">Description</label>
                            <textarea type="text" name="description" placeholder="Insert description" class="px-3 py-2 border border-secondary form-control rounded-end @error('description') is-invalid @enderror"></textarea>
                            @error("description")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg_orange" for="thumb">Thumb</label>
                            <input type="text" name="thumb" placeholder="Insert thumb" class="px-3 py-2 border border-secondary form-control rounded-end @error('thumb') is-invalid @enderror">
                            @error("thumb")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0 bg_orange" for="link">Link</label>
                            <input type="text" name="link" placeholder="Insert link" class="px-3 py-2 border border-secondary form-control rounded-end @error('price') is-invalid @enderror">
                            @error("link")
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="input-group mb-3 bg_orange c_violet d-flex flex-column p-3 rounded-3">
                            <h5>Interests of the city:</h5>
                            @foreach ($interests as $i => $interest)
                            <div class="form-check d-flex align-items-center mx-3">
                                <input class="form-check-input mt-0" aria-label="Checkbox for following text input" type="checkbox" value="{{$interest->id}}" name="interests[]" id="interests{{$i}}">
                                <label class="form-check-label mx-2" for="interests{{$i}}">{{$interest->name}}</label>
                            </div>
                            @endforeach
                        </div>
                
                        

                        <button type="submit" class="text-white input-group-text bg_blue me-3 border-0 bg_orange">Submit</button>
                    </form>
                </div>
            </div>
            <div class="load_ text-center">
                <a href="{{route("admin.projects.index")}}" class="py-1 px-4 border-0 m-4 text-white btn bg_orange">HOME</a>
            </div>
        </div>
    </div>
</section>
@endsection