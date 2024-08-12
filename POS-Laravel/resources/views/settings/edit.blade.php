@extends('layouts.admin')

@section('title', 'Update Settings')
@section('content-header', 'Update Settings')

@section('content')
<div class="card"><!-- Log on to codeastro.com for more projects -->
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="app_name">App Name</label>
                <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror" id="app_name" placeholder="App name" value="{{ old('app_name', config('settings.app_name')) }}">
                @error('app_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="app_description">App Description</label>
                <textarea name="app_description" class="form-control @error('app_description') is-invalid @enderror" id="app_description" placeholder="App description">{{ old('app_description', config('settings.app_description')) }}</textarea>
                @error('app_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="currency_symbol">Currency Symbol</label>
                <input type="text" name="currency_symbol" class="form-control @error('currency_symbol') is-invalid @enderror" id="currency_symbol" placeholder="Currency symbol" value="{{ old('currency_symbol', config('settings.currency_symbol')) }}">
                @error('currency_symbol')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="warning_quantity">Warning Quantity</label>
                <input type="text" name="warning_quantity" class="form-control @error('warning_quantity') is-invalid @enderror" id="warning_quantity" placeholder="Warning quantity" value="{{ old('warning_quantity', config('settings.warning_quantity')) }}">
                @error('warning_quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg"><i class="fas fa-check"></i> Submit Changes</button>
        </form>
    </div>
</div><!-- Log on to codeastro.com for more projects -->
@endsection
