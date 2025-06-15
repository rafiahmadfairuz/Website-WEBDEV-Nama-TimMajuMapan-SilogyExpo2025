<x-app>
  <div class="min-h-screen bg-[#f7f7f7] inset-0">
    <nav class="flex items-center w-full justify-between px-4 sm:px-6 lg:px-12 py-6 bg-[#1b5a4f]" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <span class="text-white font-bold text-lg sm:text-xl">Legalitas<span style="color: #faa743">ku</span></span>
            </a>
        </div>

           <div class="lg:flex lg:flex-1 lg:justify-end lg:items-center gap-2"><a href="profile">
       <div class="rounded-full h-8 w-8 flex items-center justify-center text-[#1b5a4f] border bg-violet-400">R</div>
    </a>
    </div>
    </nav>
    <div class="hidden lg:hidden" id="mobile-menu" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50 bg-black/50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full sm:w-80 overflow-y-auto bg-white px-4 sm:px-6 py-6">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <span class="text-[#1b5a4f] font-bold text-lg">Legalitas<span style="color: #faa743">ku</span></span>
                </a>
                <button type="button" class="mobile-menu-toggle -m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="py-6">
                        <a href="#">Rafi Ahmad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="bg-[#f7f7f7] min-h-screen w-full py-10 px-4 sm:px-6 lg:px-8">
        <form action="" method="post">
            @csrf
            <div class="bg-white rounded-xl border border-[#918e8a] w-full mx-auto p-8 shadow-lg">
                <h1 class="text-2xl font-bold text-[#1b5a4f] mb-6">Dapatkan Rekomendasi Legalitas Usaha</h1>
                <div class="mb-8">
                    <label for="nama_usaha" class="block text-md font-semibold text-gray-900">Nama Usaha</label>
                    <p class="text-sm text-gray-600 mb-6">Masukkan nama usaha yang ingin Anda daftarkan untuk mendapatkan rekomendasi legalitas yang sesuai.</p>
                    <input type="text" id="nama_usaha" name="nama_usaha" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#1b5a4f]" />
                </div>
                <div class="mb-8">
                    <label class="block text-md font-semibold text-gray-900">Jenis Usaha</label>
                    <p class="text-sm text-gray-600 mb-3">Pilih bentuk usaha Anda agar kami dapat memberikan jenis legalitas yang tepat.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-4">
                        <div class="flex flex-col items-center w-full">
                            <label class="group cursor-pointer w-full max-w-xs flex items-center justify-center transition-all">
                                <input type="radio" name="jenis_usaha" value="UMKM" class="peer hidden" />
                                <div class="flex flex-col items-center border-4 border-gray-500 rounded-lg p-4 w-full h-full hover:border-[#1b5a4f] peer-checked:border-[#1b5a4f] text-gray-500 peer-checked:text-[#1b5a4f] group-hover:text-[#1b5a4f] transition-all">
                                    <svg class="w-16 h-16 fill-current transition-colors duration-200" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 415.453 415.453" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M414.923,117.822L404.92,62.058V16.726c0-4.142-3.358-7.5-7.5-7.5H17.998c-4.142,0-7.5,3.358-7.5,7.5v45.332 l-9.983,55.574c-2,11.132,1.935,22.468,9.978,30.066v251.028c0,4.142,3.358,7.5,7.5,7.5h36.496h117.864h225.07 c4.142,0,7.5-3.358,7.5-7.5V148.015C412.986,140.528,416.968,129.219,414.923,117.822z M25.498,24.226h364.421v31H25.498V24.226z M321.778,70.226v61.358c-9.007,8.359-20.62,12.936-33.021,12.936c-12.408,0-24.027-4.581-33.036-12.948V70.226H321.778z M240.72,70.226v61.356c-9.007,8.359-20.621,12.936-33.022,12.936c-12.404,0-24.021-4.577-33.028-12.94V70.226H240.72z M159.671,70.226v61.35c-9.006,8.36-20.621,12.938-33.023,12.938c-12.404,0-24.019-4.577-33.027-12.938v-61.35H159.671z M15.28,120.284l8.992-50.058h54.349v61.35c-13.732,12.734-33.442,16.495-51.03,9.506c-0.662-0.263-1.845-0.813-3.72-1.937 C17.402,135.267,13.95,127.687,15.28,120.284z M164.854,391.226H61.99V212.09h102.864V391.226z M389.924,391.228h-210.07v-0.002 V204.59c0-4.142-3.358-7.5-7.5-7.5H54.49c-4.142,0-7.5,3.358-7.5,7.5v186.636H25.494V156.267 c6.626,2.21,13.431,3.299,20.179,3.298c14.599-0.001,28.914-5.051,40.446-14.608c11.367,9.436,25.509,14.558,40.529,14.558 c15.018,0,29.158-5.122,40.522-14.555c11.366,9.436,25.508,14.559,40.528,14.559c15.02,0,29.162-5.123,40.528-14.558 c11.367,9.437,25.509,14.56,40.53,14.56c15.003,0,29.131-5.111,40.532-14.571c16.863,13.929,39.855,18.24,60.636,11.332V391.228z M390.014,140.154l-0.083,0.038c-17.867,8.105-38.838,4.605-53.153-8.629V70.226h54.368l9.013,50.244 C401.627,128.651,397.489,136.73,390.014,140.154z"></path> </g> </g> <g> <g> <path d="M142.354,227.09H84.49c-4.142,0-7.5,3.358-7.5,7.5v134.136c0,4.142,3.358,7.5,7.5,7.5h57.864c4.142,0,7.5-3.358,7.5-7.5 V234.59C149.854,230.448,146.496,227.09,142.354,227.09z M134.854,361.226H91.99V242.09h42.864V361.226z"></path> </g> </g> <g> <g> <path d="M364.354,197.09H214.573c-4.142,0-7.5,3.358-7.5,7.5v149.781c0,4.142,3.358,7.5,7.5,7.5h15.794 c0.033,0,0.066,0.005,0.099,0.005c0.035,0,0.07-0.004,0.106-0.005h133.783c4.142,0,7.5-3.358,7.5-7.5V204.59 C371.854,200.448,368.496,197.09,364.354,197.09z M356.853,224.132l-25.512,24.203c-3.005,2.851-3.13,7.598-0.279,10.603 c1.475,1.554,3.457,2.338,5.442,2.338c1.853,0,3.71-0.683,5.161-2.059l15.188-14.408v102.062H249.271v0l63.65-60.384 c3.005-2.851,3.13-7.598,0.279-10.603c-2.85-3.004-7.597-3.13-10.603-0.279l-75.121,71.266h-5.405v-34.922l20.111-19.077 c3.005-2.851,3.13-7.598,0.28-10.603c-2.85-3.005-7.597-3.131-10.603-0.28l-9.788,9.285V212.09h83.477l-47.493,45.051 c-3.005,2.851-3.13,7.598-0.28,10.603c1.475,1.555,3.457,2.338,5.443,2.338c1.853,0,3.709-0.683,5.16-2.059l58.966-55.934h29.509 V224.132z"></path> </g> </g> </g></svg>
                                    <div class="font-bold text-lg mt-4">UMKM</div>
                                </div>
                            </label>
                        </div>
                        <div class="flex flex-col items-center w-full">
                            <label class="group cursor-pointer w-full max-w-xs flex items-center justify-center transition-all">
                                <input type="radio" name="jenis_usaha" value="CV" class="peer hidden" />
                                <div class="flex flex-col items-center border-4 border-gray-500 rounded-lg p-4 w-full h-full hover:border-[#1b5a4f] peer-checked:border-[#1b5a4f] text-gray-500 peer-checked:text-[#1b5a4f] group-hover:text-[#1b5a4f] transition-all">
                                    <svg class="w-16 h-16 fill-current transition-colors duration-200" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 503.607 503.607" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(1 1)"> <g> <g> <path d="M494.213,452.246h-25.18V7.393c0-5.036-3.357-8.393-8.393-8.393H40.967c-5.036,0-8.393,3.357-8.393,8.393v444.852H7.393 c-5.036,0-8.393,3.357-8.393,8.393v33.574c0,5.036,3.357,8.393,8.393,8.393h486.82c5.036,0,8.393-3.357,8.393-8.393v-33.574 C502.607,455.603,499.249,452.246,494.213,452.246z M49.361,15.787h402.885v436.459H326.344v-92.328 c0-5.036-3.357-8.393-8.393-8.393h-67.148h-67.148c-5.036,0-8.393,3.357-8.393,8.393v92.328H49.361V15.787z M192.049,452.246 v-83.934h50.361v83.934H192.049z M259.197,368.311h50.361v83.934h-50.361V368.311z M485.82,485.82H15.787v-16.787h25.180h142.689 h67.148h67.148h142.689h25.180V485.820z"></path> <path d="M158.475,40.967H91.328c-5.036,0-8.393,3.357-8.393,8.393v50.361c0,5.036,3.357,8.393,8.393,8.393h67.148 c5.036,0,8.393-3.357,8.393-8.393V49.361C166.869,44.325,163.511,40.967,158.475,40.967z M150.082,91.328H99.721V57.754h50.361 V91.328z"></path> <path d="M158.475,133.295H91.328c-5.036,0-8.393,3.357-8.393,8.393v50.361c0,5.036,3.357,8.393,8.393,8.393h67.148 c5.036,0,8.393-3.357,8.393-8.393v-50.361C166.869,136.652,163.511,133.295,158.475,133.295z M150.082,183.656H99.721v-33.574 h50.361V183.656z"></path> <path d="M217.229,200.443h67.148c5.036,0,8.393-3.357,8.393-8.393v-50.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C208.836,197.085,212.193,200.443,217.229,200.443z M225.623,150.082h50.361v33.574 h-50.361V150.082z"></path> <path d="M343.131,200.443h67.148c5.036,0,8.393-3.357,8.393-8.393v-50.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C334.738,197.085,338.095,200.443,343.131,200.443z M351.525,150.082h50.361v33.574 h-50.361V150.082z"></path> <path d="M217.229,292.771h67.148c5.036,0,8.393-3.357,8.393-8.393v-50.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C208.836,289.413,212.193,292.771,217.229,292.771z M225.623,242.41h50.361v33.574 h-50.361V242.41z"></path> <path d="M343.131,292.771h67.148c5.036,0,8.393-3.357,8.393-8.393v-50.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C334.738,289.413,338.095,292.771,343.131,292.771z M351.525,242.41h50.361v33.574 h-50.361V242.41z"></path> <path d="M158.475,225.623H91.328c-5.036,0-8.393,3.357-8.393,8.393v50.361c0,5.036,3.357,8.393,8.393,8.393h67.148 c5.036,0,8.393-3.357,8.393-8.393v-50.361C166.869,228.98,163.511,225.623,158.475,225.623z M150.082,275.984H99.721V242.41 h50.361V275.984z"></path> <path d="M217.229,108.115h67.148c5.036,0,8.393-3.357,8.393-8.393V49.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C208.836,104.757,212.193,108.115,217.229,108.115z M225.623,57.754h50.361v33.574 h-50.361V57.754z"></path> <path d="M343.131,108.115h67.148c5.036,0,8.393-3.357,8.393-8.393V49.361c0-5.036-3.357-8.393-8.393-8.393h-67.148 c-5.036,0-8.393,3.357-8.393,8.393v50.361C334.738,104.757,338.095,108.115,343.131,108.115z M351.525,57.754h50.361v33.574 h-50.361V57.754z"></path> <path d="M200.443,334.738h100.721c5.036,0,8.393-3.357-8.393-8.393c0-5.036-3.357-8.393-8.393-8.393H200.443 c-5.036,0-8.393,3.357-8.393,8.393C192.049,331.38,195.407,334.738,200.443,334.738z"></path> </g> </g> </g> </g></svg>
                                    <div class="font-bold text-lg mt-4">CV</div>
                                </div>
                            </label>
                        </div>
                        <div class="flex flex-col items-center w-full">
                            <label class="group cursor-pointer w-full max-w-xs flex items-center justify-center transition-all">
                                <input type="radio" name="jenis_usaha" value="PT" class="peer hidden" />
                                <div class="flex flex-col items-center border-4 border-gray-500 rounded-lg p-4 w-full h-full hover:border-[#1b5a4f] peer-checked:border-[#1b5a4f] text-gray-500 peer-checked:text-[#1b5a4f] group-hover:text-[#1b5a4f] transition-all">
                                    <svg class="w-16 h-16 fill-current transition-colors duration-200" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M503.983,350.597h-36.747L434.978,92.533c-0.502-4.012-3.912-7.022-7.955-7.022H324.409c-4.043,0-7.453,3.01-7.955,7.022 l-32.258,258.064h-9.654l-71.73-107.595c-1.999-2.998-5.875-4.304-9.281-3.133c-3.199,1.1-5.406,4.198-5.406,7.58v101.79 l-70.825-106.236c-1.999-2.999-5.874-4.304-9.281-3.133c-3.197,1.101-5.404,4.198-5.404,7.58v97.856L31.71,242.887 c-2.035-2.942-5.894-4.188-9.265-2.995c-3.166,1.119-5.342,4.199-5.342,7.557V290.2c0,4.428,3.588,8.017,8.017,8.017 c4.428,0,8.017-3.588,8.017-8.017v-17.087l53.642,77.484H35.984v-26.189c0-4.428-3.588-8.017-8.017-8.017 s-8.017,3.588-8.017,8.017v26.189H8.017c-4.428,0-8.017,3.588-8.017,8.017v145.37C0,508.412,3.588,512,8.017,512h495.967 c4.428,0,8.017-3.588,8.017-8.017v-145.37C512,354.185,508.412,350.597,503.983,350.597z M331.486,101.545h88.459l1.203,9.62 h-90.865L331.486,101.545z M328.28,127.198h94.873l6.547,52.376H321.733L328.28,127.198z M319.729,195.608h111.975l1.203,9.62 h-114.38L319.729,195.608z M316.522,221.261H434.91l7.616,60.927h-133.62L316.522,221.261z M306.902,298.221H444.53l1.203,9.62 H305.699L306.902,298.221z M204.159,273.926l51.113,76.671h-51.113V273.926z M118.647,273.926l51.115,76.671h-51.115V273.926z M495.967,495.967H16.033V366.63h368.234c4.428,0,8.017-3.588,8.017-8.017c0-4.428-3.588-8.017-8.017-8.017h-83.912l3.34-26.722 h144.042l3.34,26.722h-32.606c-4.428,0-8.017,3.588-8.017,8.017c0,4.428,3.588,8.017,8.017,8.017h77.495V495.967z"></path> </g> </g> <g> <g> <path d="M76.426,376.251H42.221c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C84.443,379.839,80.854,376.251,76.426,376.251z M68.409,410.455H50.238v-18.171h18.171 V410.455z"></path> </g> </g> <g> <g> <path d="M469.779,376.251h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C477.795,379.839,474.207,376.251,469.779,376.251z M461.762,410.455h-18.171v-18.171 h18.171V410.455z"></path> </g> </g> <g> <g> <path d="M273.102,376.251h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C281.119,379.839,277.531,376.251,273.102,376.251z M265.086,410.455h-18.171v-18.171 h18.171V410.455z"></path> </g> </g> <g> <g> <path d="M375.716,376.251h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C383.733,379.839,380.145,376.251,375.716,376.251z M367.699,410.455h-18.171v-18.171 h18.171V410.455z"></path> </g> </g> <g> <g> <path d="M170.489,376.251h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C178.505,379.839,174.917,376.251,170.489,376.251z M162.472,410.455h-18.171v-18.171 h18.171V410.455z"></path> </g> </g> <g> <g> <path d="M76.426,436.109H42.221c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C84.443,439.697,80.854,436.109,76.426,436.109z M68.409,470.313H50.238v-18.171h18.171 V470.313z"></path> </g> </g> <g> <g> <path d="M469.779,436.109h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C477.795,439.697,474.207,436.109,469.779,436.109z M461.762,470.313h-18.171v-18.171 h18.171V470.313z"></path> </g> </g> <g> <g> <path d="M273.102,436.109h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C281.119,439.697,277.531,436.109,273.102,436.109z M265.086,470.313h-18.171v-18.171 h18.171V470.313z"></path> </g> </g> <g> <g> <path d="M375.716,436.109h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C383.733,439.697,380.145,436.109,375.716,436.109z M367.699,470.313h-18.171v-18.171 h18.171V470.313z"></path> </g> </g> <g> <g> <path d="M170.489,436.109h-34.205c-4.428,0-8.017,3.588-8.017,8.017v34.205c0,4.428,3.588,8.017,8.017,8.017h34.205 c4.428,0,8.017-3.588,8.017-8.017v-34.205C178.505,439.697,174.917,436.109,170.489,436.109z M162.472,470.313h-18.171v-18.171 h18.171V470.313z"></path> </g> </g> <g> <g> <path d="M401.37,17.102c-0.609,0-1.217,0.022-1.823,0.067C396.213,7.202,386.79,0,375.716,0s-20.497,7.202-23.83,17.17 c-0.606-0.045-1.214-0.067-1.824-0.067c-13.851,0-25.119,11.268-25.119,25.119c0,13.851,11.268,25.119,25.119,25.119h51.307 c13.851,0,25.119-11.268,25.119-25.119C426.489,28.371,415.22,17.102,401.37,17.102z M401.37,51.307h-51.307 c-5.01,0-9.086-4.076-9.086-9.086c0-5.01,4.076-9.086,9.086-9.086c1.641,0,3.199,0.434,4.634,1.29 c2.651,1.583,5.978,1.501,8.548-0.208c2.572-1.711,3.932-4.745,3.497-7.804c-0.076-0.533-0.111-0.946-0.111-1.294 c0-5.01,4.076-9.086,9.086-9.086c5.01,0,9.086,4.076,9.086,9.086c0,0.348-0.035,0.761-0.111,1.294 c-0.434,3.058,0.926,6.093,3.497,7.804c2.572,1.71,5.897,1.789,8.548,0.208c1.434-0.856,2.993-1.29,4.634-1.29 c5.01,0,9.086,4.076,9.086,9.086C410.455,47.231,406.379,51.307,401.37,51.307z"></path> </g> </g> <g> <g> <path d="M238.898,68.409c-0.609,0-1.217,0.022-1.824,0.067c-3.333-9.967-12.756-17.17-23.83-17.17s-20.497,7.202-23.83,17.17 c-0.606-0.045-1.214-0.067-1.824-0.067c-13.851,0-25.119,11.268-25.119,25.119s11.268,25.119,25.119,25.119h51.307 c13.851,0,25.119-11.268,25.119-25.119S252.748,68.409,238.898,68.409z M238.898,102.614h-51.307c-5.01,0-9.086-4.076-9.086-9.086 s4.076-9.086,9.086-9.086c1.641,0,3.199,0.434,4.634,1.29c2.65,1.583,5.979,1.501,8.548-0.208 c2.572-1.711,3.932-4.745,3.497-7.804c-0.076-0.533-0.111-0.946-0.111-1.294c0-5.01,4.076-9.086,9.086-9.086 s9.086,4.076,9.086,9.086c0,0.348-0.035,0.761-0.111,1.294c-0.434,3.058,0.926,6.093,3.497,7.804 c2.572,1.71,5.898,1.79,8.548,0.208c1.434-0.856,2.993-1.29,4.634-1.29c5.01,0,9.086,4.076,9.086,9.086 S243.908,102.614,238.898,102.614z"></path> </g> </g> <g> <g> <path d="M84.977,111.165c-0.609,0-1.217,0.022-1.824,0.067c-3.333-9.967-12.756-17.17-23.83-17.17s-20.497,7.202-23.83,17.17 c-0.606-0.045-1.214-0.067-1.823-0.067c-13.851,0-25.119,11.268-25.119,25.119s11.268,25.119,25.119,25.119h51.307 c13.851,0,25.119-11.268,25.119-25.119C110.096,122.433,98.828,111.165,84.977,111.165z M84.977,145.37H33.67 c-5.01,0-9.086-4.076-9.086-9.086s4.076-9.086,9.086-9.086c1.641,0,3.199,0.434,4.634,1.29c2.651,1.583,5.978,1.501,8.548-0.208 c2.572-1.711,3.932-4.745,3.497-7.804c-0.076-0.533-0.111-0.946-0.111-1.294c0-5.01,4.076-9.086,9.086-9.086 c5.01,0,9.086,4.076,9.086,9.086c0,0.348-0.035,0.761-0.111,1.294c-0.434,3.058,0.926,6.093,3.497,7.804 c2.572,1.71,5.897,1.79,8.548,0.208c1.434-0.856,2.993-1.29,4.634-1.29c5.01,0,9.086,4.076,9.086,9.086 S89.987,145.37,84.977,145.37z"></path> </g> </g> </g></svg>
                                    <div class="font-bold text-lg mt-4">PT</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <label class="block text-md font-semibold text-gray-900">Model Usaha</label>
                    <p class="text-sm text-gray-600 mb-6">Tentukan bagaimana usaha Anda beroperasi. Apakah memproduksi barang sendiri, menjadi distributor, atau memberikan layanan/jasa.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <label class="group">
                            <input type="radio" name="model_usaha" value="Produksi Sendiri" class="peer hidden" />
                            <div class="flex items-start gap-2 cursor-pointer border border-gray-300 rounded-lg p-4 hover:bg-[#1b5a4f] hover:text-gray-100 peer-checked:bg-[#1b5a4f] peer-checked:text-gray-100 transition-colors duration-200">
                                <div class="text-2xl mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-inherit">Produksi Sendiri</div>
                                    <p class="text-xs group-hover:text-gray-100 text-inherit">Usaha menjual produk pihak lain.</p>
                                </div>
                            </div>
                        </label>
                        <label class="group">
                            <input type="radio" name="model_usaha" value="Distributor" class="peer hidden" />
                            <div class="flex items-start gap-2 cursor-pointer border border-gray-300 rounded-lg p-4 hover:bg-[#1b5a4f] hover:text-gray-100 peer-checked:bg-[#1b5a4f] peer-checked:text-gray-100 transition-colors duration-200">
                                <div class="text-2xl mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-inherit">Distributor</div>
                                    <p class="text-xs group-hover:text-gray-100 text-inherit">Usaha menjual produk pihak lain.</p>
                                </div>
                            </div>
                        </label>
                        <label class="group">
                            <input type="radio" name="model_usaha" value="Jasa" class="peer hidden" />
                            <div class="flex items-start gap-2 cursor-pointer border border-gray-300 rounded-lg p-4 hover:bg-[#1b5a4f] hover:text-gray-100 peer-checked:bg-[#1b5a4f] peer-checked:text-gray-100 transition-colors duration-200">
                                <div class="text-2xl mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-inherit">Jasa</div>
                                    <p class="text-xs group-hover:text-gray-100 text-inherit">Usaha menjual produk pihak lain.</p>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mb-8">
                    <label for="bidang_usaha" class="block text-md font-semibold text-gray-900">Bidang Usaha</label>
                    <p class="text-sm text-gray-600 mb-6">Pilih kategori utama dari usaha Anda, seperti kuliner, fashion, teknologi, pertanian, dan lainnya. Ini akan membantu kami memahami fokus bisnis Anda.</p>
                    <select id="bidang_usaha" name="bidang_usaha" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#1b5a4f]">
                        <option value="">-- Pilih Bidang Usaha --</option>
                        <option value="pertanian">Pertanian</option>
                        <option value="peternakan">Peternakan</option>
                        <option value="perikanan">Perikanan</option>
                        <option value="manufaktur">Industri Manufaktur</option>
                        <option value="keuangan">Jasa Keuangan</option>
                        <option value="ti">Teknologi Informasi dan Komunikasi</option>
                        <option value="logistik">Jasa Logistik</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="fesyen">Fashion dan Tekstil</option>
                        <option value="jasa">Jasa</option>
                        <option value="makanan">Makanan</option>
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-[#1b5a4f] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#13473f] transition">Lanjut</button>
                </div>
            </div>
        </form>
    </main>
</div>
</x-app>
