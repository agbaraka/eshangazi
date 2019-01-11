@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">
                New Platform
            </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group">
                    <a href="{{ route('index-platform') }}"
                       class="btn btn-sm btn-outline-secondary">
                        Platforms List
                    </a>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('update-platform', $platform) }}">
            @csrf
            @method('PATCH')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">
                        Name
                    </label>

                    <input id="name"
                           name="name"
                           type="text"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           value="{{ $platform->name }}"
                           placeholder="Name"
                           required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="name">
                        Driver
                    </label>

                    <input id="driver_class"
                           name="driver_class"
                           type="text"
                           class="form-control{{ $errors->has('driver_class') ? ' is-invalid' : '' }}"
                           value="{{ $platform->driver_class }}"
                           placeholder="Driver Name"
                           required autofocus>

                    @if ($errors->has('driver_class'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('driver_class') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>

                <textarea id="description"
                          name="description"
                          class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                          row="3" required>

                    {{ $platform->description }}
                </textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mt-3 border-top">
                <h1 class="h2">
                    &nbsp;
                </h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="submit" class="btn btn-primary mt-3">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection