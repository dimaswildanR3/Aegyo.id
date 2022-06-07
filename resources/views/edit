@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('articles.update', $articles->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="title" autocomplete="off" value="{{ old('title') ?? $articles->title}}">
                  @error('title')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="alamat">Category</label>
                  <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" id="category" placeholder="category" autocomplete="off" value="{{ old('category') ?? $articles->category }}">
                  @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <select class="form-control @error('description') is-invalid @enderror" name="description" id="description" autocomplete="off" value="{{ old('description') ?? $articles->description }}">
                  </select>
                  @error('Description')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror  
                </div>

                <div class="form-group">
                  <label for="telp">Kontent</label>
                  <input type="text" class="form-control @error('kontent') is-invalid @enderror" name="kontent" id="kontent" placeholder="kontent" autocomplete="off" value="{{ old('kontent') ?? $articles->kontent }}">
                  @error('Kontent')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="telp">Status</label>
                  <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="status" autocomplete="status" value="{{ old('status') ?? $articles->status }}">
                  <option value="publish">Publish</option>
                  <option value="unpublish">Unpublish</option>
                  @error('Kontent')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('atricles.index') }}" class="btn btn-default">Kembali</a>

            </form>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('notif')
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endpush
