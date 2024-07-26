@extends('layouts.masterlayout')

@section('content')
    <h1>About Page</h1>
@verbatim

<div id="app">{{ message }}</div>       
@endverbatim

@endsection

@section('title')
    About 
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush