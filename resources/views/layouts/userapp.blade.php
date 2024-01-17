<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop Stylish Eyeglasses & Sunglasses Online at MrSpecs Optical in Chennai</title>



    {{-- -------- LINKS  --------- --}}
    @include('links.style')

    @stack('style')

    @livewireStyles
</head>

<body>
    
    <div class="space-top"></div>


    <div id="home-wrapper" class="wrapper">

        <div class="animateMove">
            <img src="{{asset('image/animate/bg1.png')}}" alt="glass-move" class="animate">
            <img src="{{asset('image/animate/bg2.png')}}" alt="glass-move" class="animate">
            <img src="{{asset('image/animate/bg3.png')}}" alt="glass-move" class="animate">
            <img src="{{asset('image/animate/bg4.png')}}" alt="glass-move" class="animate">
            <img src="{{asset('image/animate/bg5.png')}}" alt="glass-move" class="animate">
        </div>
         
    {{-- ------------  NAVBAR ---- ------- --}}
    @include('navbar')


    {{-- ------------ CONTENT ----------- --}}
    <main class="main-wrapper">
        @yield('content')

  
    </main>


    {{-- ------------ FOOTER ------------- --}}
    @include('footer')


    {{-- ------------ SCRIPT ------------- --}}
    @include('links.script')


    {{-- -----------PAGE SCRIPT ---------- --}}
    @stack('script')

    @livewireScripts

  
{{--   
  @if (session('status')) {
    <script>
        Swal.fire('{{ session('status') }}');
    </script>
}
    
@endif --}}


    @php
        if ($status = session('status')) {
            
         echo  " <script>
                Swal.fire('{$status}');
                </script>";
        }   
    @endphp
   
    </div>
</body>

</html>
