
@extends('layouts.masterLayout')

@section('content')
    <h1>About</h1>
    {{-- verbatim js ka vue leye --}}

@verbatim
<div id="app">{{ message }}</div>
@endverbatim

@endsection

@section('footer')

<p>i am in about using section</p>
@parent    
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