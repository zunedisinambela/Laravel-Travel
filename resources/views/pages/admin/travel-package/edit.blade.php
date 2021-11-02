@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->item }}</h1>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" autocomplete="off" placeholder="Title"
                        value={{ $item->title }}>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" autocomplete="off" placeholder="Location"
                        value={{ $item->location }}>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control" name="featured_event" autocomplete="off"
                        placeholder="Featured Event" value={{ $item->featured_event }}>
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" autocomplete="off" placeholder="Language"
                        value={{ $item->language }}>
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" autocomplete="off" placeholder="Foods"
                        value={{ $item->foods }}>
                </div>
                <div class="form-group">
                    <label for="departured_date">Departured Date</label>
                    <input type="date" class="form-control" name="departured_date" autocomplete="off"
                        placeholder="Departured Date" value={{ $item->departured_date }}>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" autocomplete="off" placeholder="Duration"
                        value={{ $item->duration }}>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" autocomplete="off" placeholder="Type"
                        value={{ $item->type }}>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" autocomplete="off" placeholder="Price"
                        value={{ $item->price }}>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
