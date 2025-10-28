@extends('layouts.app')

@section('title', 'Track Order')

@section('content')

<section class="flex justify-center items-center py-20 bg-gray-50"> <div class="bg-white shadow-lg rounded-xl p-10 max-w-5xl w-full text-center"> <h2 class="text-3xl font-bold text-slate-900 mb-2">Track Order</h2> <div class="w-16 h-1 bg-slate-800 mx-auto mb-6 rounded-full"></div>
    <div class="flex flex-col md:flex-row items-center justify-center md:space-x-10">
        <div class="flex-1 mb-6 md:mb-0">
            <img src="{{ asset('images/delivery-man.png') }}" alt="Track Order Illustration" class="w-64 mx-auto">
        </div>

        <div class="flex-1 max-w-md">
            <p class="text-gray-700 text-sm mb-6 leading-relaxed">
                Untuk melacak pesanan Anda, masukkan ID pesanan Anda di kotak di bawah ini
                dan tekan tombol <span class="font-semibold">"Lacak"</span>. ID ini diberikan kepada Anda pada tanda terima
                dan dalam email konfirmasi yang seharusnya Anda terima.
            </p>

            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 text-left mb-1">ID Pesanan</label>
                        <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-slate-700 focus:border-slate-700" placeholder="Dapat ditemukan di email Anda">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 text-left mb-1">E-mail Penagihan</label>
                        <input type="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-slate-700 focus:border-slate-700" placeholder="Email yang Anda gunakan">
                    </div>
                </div>

                <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded-md transition duration-300">
                    Lacak
                </button>
            </form>
        </div>
    </div>
</div>
</section> @endsection