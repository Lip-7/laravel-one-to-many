@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="">
        <form method="POST" action="{{route('admin.projects.update', $project)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="form-label text-capitalize">name</label>
                        <input type="text" value="{{old('name', $project->name)}}" placeholder="Insert here project's name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label for="gitUrl" class="form-label text-capitalize">Git Url</label>
                        <input type="text" value="{{old('gitUrl', $project->gitUrl)}}" name="gitUrl" placeholder="Insert here project's image url" class="form-control @error('gitUrl') is-invalid @enderror" id="gitUrl" aria-describedby="gitUrlHelp" required>
                        @error('gitUrl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label for="framework" class="form-label text-capitalize">framework</label>
                        <input type="text"  value="{{old('framework', $project->framework)}}" placeholder="es. '$19.99'" name="framework" class="form-control @error('framework') is-invalid @enderror" id="framework" aria-describedby="frameworkHelp" required>
                        @error('framework')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label for="tecnologies" class="form-label text-capitalize">tecnologies</label>
                        <input type="text"  value="{{old('tecnologies', $project->tecnologies)}}" name="tecnologies" placeholder="Insert here project's tecnologies" class="form-control @error('tecnologies') is-invalid @enderror" id="tecnologies" aria-describedby="tecnologiesHelp" required>
                        @error('tecnologies')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label text-capitalize">description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">@if(old('description')){{old('description')}}@else{{$project->description}}@endif</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
