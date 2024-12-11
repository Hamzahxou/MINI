<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>view cart page</title>
    <!-- gunakan ini jika pakai laravel breeze -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- font poopins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-neutral-100">

    <header class="flex w-full justify-between mb-5 sticky top-0 z-10 bg-white py-3 px-10 md:pe-5">
        <form action="" class="hidden gap-2 flex-1 md:flex">
            <input type="text"
                class="py-1 px-3 outline-none border border-gray-300 rounded-lg text-sm text-slate-700 w-full md:w-96"
                placeholder="Search" />
            <button type="submit">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>
        </form>

        <!-- Hamburger Menu (untuk tampilan mobile) -->
        <div class="xl:hidden flex items-center gap-4">
            <button id="hamburger" class="text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div class="hidden gap-1 items-center xl:flex">
            <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" class="w-4 h-4">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -2159.000000)" fill="#000000">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path
                                    d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673"
                                    id="profile-[#1335]"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            <a href="#" class="text-sm text-slate-700">Sign in</a>
            <span>/</span>
            <a href="#" class="text-sm text-slate-700">Sign up</a>
        </div>
    </header>

    <!-- start menu-->
    <div id="list-menu"
        class="hidden w-full h-screen overflow-hidden fixed top-0 right-0 left-0 bottom-0 z-20 backdrop-brightness-50 flex justify-center p-5">
        <div id="menu-content" class="relative bg-white shadow-xl h-full w-full rounded-md md:w-2/5">
            <div class="absolute top-0 right-0 cursor-pointer m-3" id="close-menu">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z"
                            fill="#1C274C"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z"
                            fill="#1C274C"></path>
                    </g>
                </svg>
            </div>
            <div class="p-5">
                <ul>
                    <li>
                        <div class="pt-10 pb-5 border-b-2">
                            <form action="" class="flex gap-2 flex-1 w-full">
                                <input type="text"
                                    class="py-1 px-3 outline-none border border-gray-300 rounded-lg text-sm w-full text-slate-700"
                                    placeholder="Search" />
                                <button type="submit">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-md text-slate-700 py-2 block">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-md text-slate-700 py-2 block">Product</a>
                    </li>
                    <li>
                        <a href="#" class="text-md text-slate-700 py-2 block">Category</a>
                    </li>
                    <li>
                        <a href="#" class="text-md text-slate-700 py-2 block">About</a>
                    </li>

                    <li>
                        <a href="#"
                            class="text-sm block py-2 w-full rounded-lg bg-blue-500 text-white text-center mb-3">Sign
                            in</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm block py-2 w-full rounded-lg text-blue-500 text-center">Sign
                            up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end menu-->
    <div class="mt-10 px-5">
        <div class="bg-white py-2 px-3 rounded-md">
            <table class="table-auto w-full">
                <thead class="border-b-2">
                    <tr>
                        <th class="text-slate-700 text-sm text-medium text-left py-2">
                            Product
                        </th>
                        <th class="text-slate-700 text-sm text-medium text-left py-2">
                            Price
                        </th>
                        <th class="text-slate-700 text-sm text-medium text-left py-2">
                            Quantity
                        </th>
                        <th class="text-slate-700 text-sm text-medium text-left py-2">
                            Total
                        </th>
                        <th class="text-slate-700 text-sm text-medium text-left py-2">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @forelse ($carts as $cart)
                        @php
                            $total += $cart->product->price_product * $cart->quantity;
                        @endphp
                        <tr class="border-b-2">
                            <input type="hidden" name="total_input_{{ $cart->id }}"
                                id="total_input_{{ $cart->id }}"
                                value="{{ $cart->product->price_product * $cart->quantity }}" />
                            <td class="text-slate-700 text-sm text-medium py-2">
                                <div class="flex gap-1 flex-wrap items-center">
                                    <div
                                        class="w-28 h-28 bg-cover bg-center overflow-hidden flex justify-center items-center p-5">
                                        <img src="{{ asset('storage/' . $cart->product->image_product) }}"
                                            alt="Hp" class="object-contain" />
                                    </div>
                                    <span> {{ $cart->product->name_product }}</span>
                                </div>
                            </td>
                            <td class="text-slate-700 text-sm text-medium py-2">
                                Rp. {{ number_format($cart->product->price_product, 0, ',', '.') }}
                            </td>
                            <td class="text-slate-700 text-sm text-medium py-2">
                                <div
                                    class="flex border-2 border-blue-200 justify-between items-center w-24 rounded-md mb-4">
                                    <button type="button" class="p-2"
                                        onclick="minus('quantity_{{ $cart->id }}', '{{ $cart->product->price_product }}', this)">
                                        -
                                    </button>
                                    <input type="text" class="w-full text-center outline-none p-2"
                                        value="{{ $cart->quantity }}" id="quantity_{{ $cart->id }}" readonly />
                                    <button type="button" class="p-2"
                                        onclick="plus('quantity_{{ $cart->id }}', {{ $cart->product->stock_product }}, '{{ $cart->product->price_product }}', this)">
                                        +
                                    </button>
                                </div>
                            </td>
                            <td class="text-slate-700 text-sm text-medium py-2">
                                <span id="total_{{ $cart->id }}">Rp.
                                    {{ number_format($cart->product->price_product * $cart->quantity, 0, ',', '.') }}
                                </span>
                            </td>
                            <td class="text-slate-700 text-sm text-medium py-2 align-bottom text-right">
                                <form action="{{ route('user.carts.destroy', $cart->id) }}" method="post"
                                    class="pe-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 text-xs"
                                        onclick="confirmDelete(event)">
                                        Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center text-slate-700 text-sm py-10">Cart Not Found.
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="bg-gray-100 border-b-2 border-slate-200 pb-4 mt-2 p-5">
                <div class="flex justify-between items-center mb-10">
                    <div class="w-1/2">
                        <h4 class="text-md text-slate-600">Subtotal</h4>
                        <p class="text-xs text-slate-500">
                            Tax included and Shipping and taxes calculated at checkout.
                        </p>
                    </div>

                    <input type="hidden" name="total_input" id="total_input" value="{{ $total }}" />
                    <div class="text-md text-slate-800 text-nowrap ">
                        <span id="total">Rp. {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                </div>

                <div class="flex justify-end">
                    @if (count($carts) > 0)
                        <a href="{{ route('user.checkout.index') }}"
                            class="bg-blue-500 text-white text-sm px-5 py-2 rounded-md">
                            Checkout
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        const hamburger = document.getElementById("hamburger");
        hamburger.addEventListener("click", () => {
            const closeMenu = document.getElementById("close-menu");
            const listMenu = document.getElementById("list-menu");
            listMenu.classList.remove("hidden");

            closeMenu.addEventListener("click", () => {
                listMenu.classList.add("hidden");
            });

            listMenu.addEventListener("click", (e) => {
                if (!e.target.closest("#menu-content")) {
                    listMenu.classList.add("hidden");
                }
            });
        });

        const formatRupiah = (number) => {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                maximumFractionDigits: 0
            }).format(number);
        }


        const total_input = document.getElementById("total_input"); // Mengambil input total
        const total = document.getElementById("total"); // Mengambil total

        async function minus(id, price, el) {
            el.disabled = true;
            const input = document.getElementById(id);
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;


                const response = await fetch('/carts/' + id.split("_")[1], {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        quantity: input.value
                    })
                });


                // Cek jika respons JSON
                if (response.ok) {
                    const data = await response.json();
                    input.value = data.quantity;


                    total_input.value = parseInt(total_input.value) - parseInt(price);
                    const total_input_id = parseInt(document.getElementById("total_input_" + id.split("_")[1]).value) -
                        parseInt(price);
                    document.getElementById("total_input_" + id.split("_")[1]).value = total_input_id
                    document.getElementById("total_" + id.split("_")[1]).innerHTML = formatRupiah(total_input_id);
                    total.innerHTML = formatRupiah(total_input.value);

                } else {
                    console.error('Server error or invalid response:', response.status);
                    const text = await response.text();
                    console.error('Response text:', text);
                }




                el.disabled = false;


            }
        }

        async function plus(id, max, price, el) {
            el.disabled = true;
            const input = document.getElementById(id);
            if (input.value < max) {
                input.value = parseInt(input.value) + 1;

                const response = await fetch('/carts/' + id.split("_")[1], {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        quantity: input.value
                    })
                });


                // Cek jika respons JSON
                if (response.ok) {
                    const data = await response.json();
                    input.value = data.quantity;

                    total_input.value = parseInt(total_input.value) + parseInt(price);
                    const total_input_id = parseInt(document.getElementById("total_input_" + id.split("_")[1]).value) +
                        parseInt(price);
                    document.getElementById("total_input_" + id.split("_")[1]).value = total_input_id
                    document.getElementById("total_" + id.split("_")[1]).innerHTML = formatRupiah(total_input_id);
                    total.innerHTML = formatRupiah(total_input.value);

                } else {
                    console.error('Server error or invalid response:', response.status);
                    const text = await response.text();
                    console.error('Response text:', text);
                }
                el.disabled = false;

            }
        }

        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target.closest('form');

            Swal.fire({
                title: "Kamu Yakin?",
                text: "Item ini akan dihapus dari keranjang!",
                icon: "warning",
                iconColor: "#334155",
                width: 400,
                background: "#fff",
                showCancelButton: true,
                confirmButtonColor: "#334155",
                cancelButtonColor: "#b91c1c",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Item berhasil dihapus dari keranjang!",
                        icon: "success",
                        width: 400,
                        showConfirmButton: false,
                    });
                    setTimeout(() => {
                        form.submit();
                    }, 200);
                }
            });

        }
    </script>
</body>

</html>
