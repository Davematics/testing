<div class="not">

    @include('layouts.overlay')


    @if(session()->has('error'))
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Sorry!',
    text: '{{ session()->get('error') }}'

    })
    </script>
    @endif

{{-- @livewire('user-login') --}}
<div
class="
bg-[#F3F3F3]
  w-screen
  h-screen flex items-center justify-center relative
"
>
<main class="flex flex-col justify-center z-10">
    <img src="/assets/images/legend 1.png" alt="back to home" class="w-1/2 mx-auto">
    <form class="bg-white w-[470px] h-[470px] rounded-lg shadow-md mt-10 p-16 flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-2">WorkPlace</h1>
        <p class="text-gray-500">Enter your credentials below</p>
        <div class="mt-10 w-full">
            <label class="text-sm font-semibold">Email</label>
            <input type="email" placeholder="name@suburbanfiberco.com" class="block w-full border border border-[#E4E8EA] rounded p-2 mt-1 focus:outline-none @error('email') border-red-500 @enderror" wire:model.defer="email">
            @error('email')
                <p class="text-red-500 text-s italic mt-4">
                    {{ $message }}
                </p>
                @enderror
        </div>
        <div class="my-2 w-full">
            <label class="text-sm font-semibold">Password</label>
            <input type="password" placeholder="*************" class="block w-full border border border-[#E4E8EA] rounded p-2 mt-1 focus:outline-none @error('email') border-red-500 @enderror" wire:model.defer="password">
            @error('password')
                <p class="text-red-500 text-s italic mt-4">
                    {{ $message }}
                </p>
                @enderror
        </div>
        <div class="w-full text-sm">
            <div class="flex items-center mt-2 mb-6">
                <input type="checkbox" class="mr-2" checked >
                {{-- <img src="./images/check.svg" > --}}
                <span>Remember me</span>
            </div>
        </div>
        <button type="submit" value="login" class="bg-[#FD4F00] text-white py-3 block w-full rounded capitalize cursor-pointer" wire:click.prevent="login()" wire:loading.remove> login </button>
        <button  class="bg-[#FD4F00] text-white py-3 block w-full rounded capitalize cursor-pointer"  wire:loading> Please wait <span class="fas fa-spinner fa-pulse"></span></button>
    </form>
</main>
<section class="polygon w-full h-[400px] absolute left-0 bottom-0">
</section>
</section>

</div>
