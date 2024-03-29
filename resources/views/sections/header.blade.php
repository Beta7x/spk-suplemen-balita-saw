@extends('layouts.base')
@section('header')
<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg> -->
      <svg fill="#FFFFFF" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-163.84 -163.84 839.68 839.68" xml:space="preserve" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-163.84" y="-163.84" width="839.68" height="839.68" rx="419.84" fill="#22C55E" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M443.878,58.228c-22.81-5.201-46.283-1.212-66.094,11.237c-19.81,12.449-33.586,31.87-38.789,54.68 c-4.515,19.789-1.889,39.56,6.143,56.645l-73.519,60.324c-14.514-12.421-32.148-21.608-52.028-26.143 c-26.503-6.047-53.639-3.154-77.93,8.025l-15.157-21.289c5.68-7.603,9.907-16.473,12.151-26.304 c4.171-18.283,0.974-37.094-9.005-52.971c-9.977-15.877-25.542-26.918-43.824-31.088c-37.742-8.613-75.449,15.09-84.06,52.828 c-8.611,37.74,15.088,75.449,52.828,84.059c5.236,1.195,10.466,1.767,15.622,1.767c7.288,0,14.417-1.156,21.176-3.31 l14.855,20.864c-16.196,16.098-27.576,36.445-32.779,59.252c-7.251,31.779-1.691,64.482,15.654,92.08 c17.345,27.598,44.4,46.791,76.18,54.041c9.101,2.076,18.192,3.072,27.157,3.072c55.652,0,106.075-38.403,118.965-94.907 c6.982-30.603,1.738-61.191-12.498-86.642l73.514-60.321c9.409,6.954,20.353,12.136,32.47,14.901 c6.533,1.49,13.057,2.203,19.492,2.203c39.947,0,76.139-27.565,85.393-68.122C520.538,116.023,490.968,68.972,443.878,58.228z M96.642,165.818c-3.325,14.575-17.891,23.722-32.461,20.401c-14.574-3.325-23.727-17.888-20.401-32.462 c2.864-12.554,14.065-21.084,26.429-21.084c1.991,0,4.012,0.221,6.033,0.682c7.06,1.612,13.071,5.875,16.924,12.006 C97.017,151.494,98.253,158.758,96.642,165.818z M269.413,351.509c-9.681,42.439-52.087,69.084-94.525,59.406 c-20.558-4.691-38.059-17.105-49.279-34.959c-11.221-17.853-14.817-39.007-10.127-59.565 c4.691-20.559,17.106-38.061,34.959-49.281c12.742-8.009,27.165-12.133,41.854-12.133c5.892,0,11.826,0.665,17.712,2.007 C252.445,266.666,279.094,309.07,269.413,351.509z M467.785,153.528c-5.46,23.924-29.366,38.946-53.287,33.49 c-23.925-5.458-38.948-29.363-33.49-53.287c2.644-11.589,9.643-21.456,19.708-27.78s21.99-8.351,33.579-5.71 C458.218,105.7,473.242,129.605,467.785,153.528z"></path> </g> </g> <g> <g> <path d="M187.682,354.836c-5.579-1.274-10.328-4.641-13.374-9.486c-3.045-4.845-4.021-10.585-2.748-16.164 c2.647-11.602-4.612-23.152-16.214-25.799c-11.602-2.65-23.152,4.614-25.798,16.213c-3.834,16.802-0.895,34.089,8.275,48.68 c9.17,14.591,23.472,24.738,40.274,28.57c1.613,0.369,3.225,0.544,4.812,0.544c9.829,0,18.708-6.77,20.986-16.757 C206.544,369.034,199.284,357.483,187.682,354.836z"></path> </g> </g> </g></svg>
      <span class="ml-3 text-xl">Sistem Pendukung Keputusan</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-white cursor-pointer">Data Suplemen</a>
      <a class="mr-5 hover:text-white cursor-pointer">Ketentuan</a>
      <a class="mr-5 hover:text-white cursor-pointer">SAW</a>
      <a class="mr-5 hover:text-white cursor-pointer">Hasil Perangkingan</a>
    </nav>
    <button id="login" class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Masuk
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>
@endsection
