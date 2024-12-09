<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>landing page</title>
    <link href="{{  asset('landing/dist/output.css')}}" rel="stylesheet" />

    <!-- font poopins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body>
    <div
      class="flex justify-between items-center px-5 py-3 text-sm absolute w-full absolute top-0 left-0 z-10"
    >
      <p class="tracking-tight text-slate-700">
        Welcome to ZenTech online eCommerce store
      </p>
      <div class="flex gap-2">
        <form method="get">
          <select
            name="lang"
            onchange="this.form.submit()"
            class="bg-transparent outline-none text-slate-700"
          >
            <option value="id">ID</option>
          </select>
        </form>
      </div>
    </div>

    <!-- start header -->
    <header
      id="header"
      class="w-full py-4 px-10 flex justify-between items-center sticky top-0 z-10 mt-10"
    >
      <h5 class="font-semibold text-2xl text-slate-700">Zentech</h5>

      <div
        class="md:flex py-2 px-5 xl:ps-10 bg-white rounded-[20px] hidden gap-4 items-center md:w-auto"
      >
        <div class="hidden md:flex gap-4">
          <a href="#" class="text-sm text-slate-700">Home</a>
          <a href="list-product.html" class="text-sm text-slate-700">Product</a>
          <a href="#" class="text-sm text-slate-700">About</a>
          <a href="#" class="text-sm text-slate-700">Contact</a>
        </div>

        <form action="" class="flex gap-2 flex-1 md:flex-none">
          <input
            type="text"
            class="py-1 px-3 outline-none border border-gray-300 rounded-lg text-sm w-full text-slate-700 md:w-80"
            placeholder="Search"
          />
          <button type="submit">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-4 h-4"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                  stroke="#000000"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
            </svg>
          </button>
        </form>
      </div>

      <div class="flex gap-1 items-center cursor-pointer" id="carts">
        <svg
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="w-6 h-6"
        >
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
              stroke="#1C274C"
              stroke-width="1.5"
              stroke-linecap="round"
            ></path>
            <path
              d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
              stroke="#1C274C"
              stroke-width="1.5"
            ></path>
            <path
              d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
              stroke="#1C274C"
              stroke-width="1.5"
            ></path>
            <path
              d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
              stroke="#1C274C"
              stroke-width="1.5"
            ></path>
          </g>
        </svg>
        <span class="text-sm text-slate-700">Carts</span>

        <span class="relative flex h-4 w-4 -translate-y-2 -translate-x-1">
          <span
            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"
          ></span>
          <span
            class="relative inline-flex rounded-full h-4 w-4 bg-red-500 text-white text-[10px] flex items-center justify-center"
            >1</span
          >
        </span>
      </div>

      <!-- Hamburger Menu (untuk tampilan mobile) -->
      <div class="xl:hidden flex items-center gap-4">
        <button id="hamburger" class="text-xl">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </button>
      </div>

      <div class="hidden gap-1 items-center xl:flex">
        <svg
          viewBox="0 0 20 20"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          fill="#000000"
          class="w-4 h-4"
        >
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <defs></defs>
            <g
              id="Page-1"
              stroke="none"
              stroke-width="1"
              fill="none"
              fill-rule="evenodd"
            >
              <g
                id="Dribbble-Light-Preview"
                transform="translate(-420.000000, -2159.000000)"
                fill="#000000"
              >
                <g id="icons" transform="translate(56.000000, 160.000000)">
                  <path
                    d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673"
                    id="profile-[#1335]"
                  ></path>
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
    <!-- end header -->

    <!-- start menu-->
    <div
      id="list-menu"
      class="hidden w-full h-screen overflow-hidden fixed top-0 right-0 left-0 bottom-0 z-20 backdrop-brightness-50 flex justify-center p-5"
    >
      <div
        id="menu-content"
        class="relative bg-white shadow-xl h-full w-full rounded-md md:w-2/5"
      >
        <div class="absolute top-0 right-0 cursor-pointer m-3" id="close-menu">
          <svg
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="w-7 h-7"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z"
                fill="#1C274C"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z"
                fill="#1C274C"
              ></path>
            </g>
          </svg>
        </div>
        <div class="p-5">
          <ul>
            <li>
              <div class="pt-10 pb-5 border-b-2">
                <form action="" class="flex gap-2 flex-1 w-full">
                  <input
                    type="text"
                    class="py-1 px-3 outline-none border border-gray-300 rounded-lg text-sm w-full text-slate-700"
                    placeholder="Search"
                  />
                  <button type="submit">
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-4 h-4"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                          stroke="#000000"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
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
              <a
                href="list-product.html"
                class="text-md text-slate-700 py-2 block"
                >Product</a
              >
            </li>
            <li>
              <a href="#" class="text-md text-slate-700 py-2 block">Category</a>
            </li>
            <li>
              <a href="#" class="text-md text-slate-700 py-2 block">About</a>
            </li>

            <li>
              <a
                href="#"
                class="text-sm block py-2 w-full rounded-lg bg-blue-500 text-white text-center mb-3"
                >Sign in</a
              >
            </li>
            <li>
              <a
                href="#"
                class="text-sm block py-2 w-full rounded-lg text-blue-500 text-center"
                >Sign up</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end menu-->

    <!-- start list cart -->
    <div
      id="list-cart"
      class="hidden w-full h-screen overflow-hidden fixed top-0 right-0 left-0 bottom-0 z-20 backdrop-brightness-50 flex justify-end p-5"
    >
      <div
        id="cart-content"
        class="relative bg-white shadow-xl overflow-y-auto min-h-full w-full rounded-md md:w-2/5"
      >
        <div class="p-5">
          <div
            class="flex justify-between items-center sticky top-0 z-10 bg-white py-3"
          >
            <h1 class="text-3xl font-semibold text-slate-800">
              Cart
              <span class="text-sm text-slate-700 font-medium">2 items</span>
            </h1>
            <div class="cursor-pointer" id="close-cart">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-7 h-7"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z"
                    fill="#1C274C"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z"
                    fill="#1C274C"
                  ></path>
                </g>
              </svg>
            </div>
          </div>
          <form action="checkout.html">
            <table class="table-auto w-full">
              <tr class="border-b-2 border-slate-200 pb-4">
                <th>
                  <div
                    class="w-28 h-28 bg-cover bg-center overflow-hidden flex justify-center items-center p-5"
                  >
                    <img src="{{  asset('landing/image/hp.png')}}" alt="Hp" class="" />
                  </div>
                </th>
                <td class="w-full">
                  <p class="text-sm text-slate-700 mb-5">
                    Samsung Galaxy A55 5G 8/128 8/256 | 5000mAh
                  </p>
                  <p class="text-sm text-slate-500">Rp. 10.000.000</p>
                </td>
                <td>
                  <div class="flex border-2 border-blue-200 rounded-md mb-4">
                    <button
                      type="button"
                      class="p-2"
                      onclick="minus('quantity_1')"
                    >
                      -
                    </button>
                    <input
                      type="text"
                      class="w-10 outline-none p-2"
                      value="1"
                      id="quantity_1"
                    />
                    <button
                      type="button"
                      class="p-2"
                      onclick="plus('quantity_1', 20)"
                    >
                      +
                    </button>
                  </div>
                  <button
                    type="button"
                    class="text-red-500 text-xs block text-end w-full"
                  >
                    Remove
                  </button>
                </td>
              </tr>
            </table>
            <div
              class="bg-gray-100 border-b-2 border-slate-200 pb-4 flex justify-between items-center mt-2 p-5"
            >
              <div class="w-1/2">
                <h4 class="text-md text-slate-600">Subtotal</h4>
                <p class="text-xs text-slate-500">
                  Tax included and Shipping and taxes calculated at checkout.
                </p>
              </div>
              <p class="text-md text-slate-800 text-nowrap">Rp. 10.000.000</p>
            </div>

            <div class="flex justify-center items-center flex-col gap-3 mt-10">
              <button
                type="submit"
                class="bg-blue-500 text-white text-sm px-5 py-2 rounded-md w-full"
              >
                Checkout
              </button>

              <a
                href="#"
                class="text-sm text-slate-500 text-center mt-5 border-b-2 font-medium"
                >View cart</a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end list cart -->

    <section
      class="-translate-y-[7.5rem] bg-gradient-to-r from-[#EAF6FE] to-[#FCDEDE] px-10 min-h-screen flex gap-2 flex-col md:flex-row md:justify-between justify-center items-center"
    >
      <div class="xl:w-1/2 md:order-0 order-1 md:py-0 py-10">
        <h1 class="text-3xl font-bold mb-5 text-slate-700">
          Welcome to ZenTech
        </h1>
        <p class="text-justify mb-10 text-slate-600">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti
          sint aliquid aperiam. Architecto earum eius omnis, inventore nostrum
          hic repudiandae consectetur
        </p>
        <button class="bg-white rounded-lg px-5 py-3 text-sm text-slate-700">
          Shop now
        </button>
      </div>
      <div class="md:order-1 order-0">
        <img src="{{  asset('landing/image/produc')}}t.png" alt="banner" width="900" />
      </div>
    </section>

    <section class="-translate-y-[7.5rem] md:px-28 px-5 py-10 bg-white">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div
          class="rounded-md flex justify-between items-center px-5 py-5 overflow-hidden"
          style="
            background: linear-gradient(
              209.21deg,
              #fcdede 19.28%,
              rgba(171, 219, 250, 0.68) 64.63%,
              #d3ecf8 82.03%
            );
          "
        >
          <div class="w-6/12">
            <h5 class="text-xl font-semibold mb-2">Handphone</h5>
            <p class="text-sm text-slate-700 text-justify mb-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptatem, voluptatum!
            </p>
            <a
              href="view-product.html"
              class="bg-white rounded-lg px-5 py-2 text-sm text-slate-700"
            >
              Shop now
            </a>
          </div>
          <div
            class="w-6/12 h-24 flex justify-center items-center bg-center bg-cover"
          >
            <img src="{{  asset('landing/image/hp.png')}}" alt="Hp" class="" />
          </div>
        </div>
        <div
          class="rounded-md flex justify-between items-center px-5 py-5 overflow-hidden"
          style="
            background: linear-gradient(
              180.02deg,
              rgba(45, 165, 243, 0.2) 34.6%,
              #2da5f3 99.99%
            );
          "
        >
          <div class="w-6/12">
            <h5 class="text-xl font-semibold mb-2">Handphone</h5>
            <p class="text-sm text-slate-700 text-justify mb-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptatem, voluptatum!
            </p>
            <a
              href="view-product.html"
              class="bg-white rounded-lg px-5 py-2 text-sm text-slate-700"
            >
              Shop now
            </a>
          </div>
          <div
            class="w-6/12 h-24 flex justify-center items-center bg-center bg-cover"
          >
            <img src="{{  asset('landing/image/hp-2.p')}}ng" alt="Hp" class="" />
          </div>
        </div>
      </div>
    </section>

    <section class="-translate-y-[7.5rem] md:px-28 px-5 py-5 mb-10">
      <h1 class="text-2xl font-semibold text-slate-700 mb-10">
        Today <span class="text-blue-500">Best Deals</span>
      </h1>

      <div class="grid md:grid-cols-[2fr_1fr_1fr] grid-cols-1 gap-4">
        <div class="border-2 py-3 px-5 relative">
          <div
            class="absolute top-0 left-0 bg-red-600 py-1 px-3 rounded-sm text-white text-sm ms-5 mt-3"
          >
            Hot
          </div>
          <div class="flex gap-5 justify-center mt-8">
            <img src="{{  asset('landing/image/headse')}}t.png" alt="Headset" width="160" />

            <div class="flex flex-col justify-between">
              <span class="text-red-500 font-semibold">Flas sale</span>
              <a
                href="view-product.html"
                class="text-md text-slate-700 font-semibold"
              >
                M6 Wireless Gaming Headset Gaming Headphones with Mic for Mobile
                Device
              </a>
              <div>
                <div class="flex items-center space-x-1 mb-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="w-4 h-4 text-yellow-400"
                    viewBox="0 0 24 24"
                    stroke="none"
                  >
                    <path
                      d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="w-4 h-4 text-yellow-400"
                    viewBox="0 0 24 24"
                    stroke="none"
                  >
                    <path
                      d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="w-4 h-4 text-yellow-400"
                    viewBox="0 0 24 24"
                    stroke="none"
                  >
                    <path
                      d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="w-4 h-4 text-yellow-400"
                    viewBox="0 0 24 24"
                    stroke="none"
                  >
                    <path
                      d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
                    ></path>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="w-4 h-4 text-gray-300"
                    viewBox="0 0 24 24"
                    stroke="none"
                  >
                    <path
                      d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
                    ></path>
                  </svg>
                  <span class="text-sm text-slate-600 text-sm">(460)</span>
                </div>
                <div class="flex justify-between">
                  <p class="text-xl text-blue-500 font-medium tracking-tight">
                    Rp.200.000
                  </p>
                  <button
                    class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                          stroke="#ffffff"
                          stroke-width="1.5"
                          stroke-linecap="round"
                        ></path>
                        <path
                          d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                          stroke="#ffffff"
                          stroke-width="1.5"
                        ></path>
                        <path
                          d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                          stroke="#ffffff"
                          stroke-width="1.5"
                        ></path>
                        <path
                          d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                          stroke="#ffffff"
                          stroke-width="1.5"
                        ></path>
                      </g>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-2 py-3 px-5 relative">
          <div
            class="w-32 h-32 flex justify-center items-center bg-center bg-cover overflow-hidden mx-auto"
          >
            <img src="{{  asset('landing/image/hp-3.p')}}ng" alt="Hp" />
          </div>
          <a href="view-product.html" class="text-sm text-slate-700 mb-4">
            Samsung Galaxy A55 5G 8/128 8/256 | 5000mAh
          </a>
          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.3.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <div class="border-2 py-3 px-5 relative">
          <div
            class="w-32 h-32 flex justify-center items-center bg-center bg-cover overflow-hidden mx-auto"
          >
            <img src="{{  asset('landing/image/laptop')}}.png" alt="Hp" />
          </div>
          <a href="view-product.html" class="text-sm text-slate-700 mb-4">
            MacBook Air M3 2024 | 13 Inch 128GB | 256GB | 512GB
          </a>
          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="-translate-y-[7.5rem] md:px-28 px-5 py-5 mb-10">
      <h1 class="text-2xl font-semibold text-slate-700 mb-10">
        Top <span class="text-blue-500">Categories</span>
      </h1>
      <div class="grid md:grid-cols-6 grid-cols-3 gap-4">
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/hp-4.p')}}ng" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >SmartPhone</a
          >
        </div>
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/laptop')}}-2.png" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >Laptop & Computer</a
          >
        </div>
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/headse')}}t-2.png" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >HeadPhone</a
          >
        </div>
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/mouse.')}}png" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >Mouse</a
          >
        </div>
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/mouse.')}}png" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >Mouse</a
          >
        </div>
        <div class="border-2 py-3 px-1 flex flex-col justify-between">
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/mouse.')}}png" alt="Hp" width="100" />
          </div>

          <a
            href="#"
            class="font-medium text-slate-700 text-md text-center block"
            >Mouse</a
          >
        </div>
      </div>
    </section>

    <section class="-translate-y-[7.5rem] md:px-28 px-5 py-5 mb-10">
      <h1 class="text-2xl font-semibold text-slate-700 mb-10">
        Top Rated <span class="text-blue-500">Products</span>
      </h1>
      <div class="grid md:grid-cols-4 grid-cols-2 gap-4">
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >Samsung Galaxy A55 5G 8/128 8/256 | 5000mAh</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/hp-3.p')}}ng" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >MacBook Air M3 2024 | 13 Inch 128GB | 256GB | 512GB</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/laptop')}}.png" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >M6 Wireless Gaming Headset Gaming with Mic for Mobile Device</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/headse')}}t-2.png" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >Mouse Gaming | PRO Wireless PRO X SUPERLIGHT TWO</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/mouse.')}}png" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="-translate-y-[7.5rem] md:px-28 px-5 py-5 mb-10">
      <h1 class="text-2xl font-semibold text-slate-700 mb-10">
        Flash <span class="text-blue-500">Sale</span>
      </h1>

      <div class="grid md:grid-cols-[2fr_1fr_1fr] grid-cols-1 gap-4">
        <div
          class="rounded-lg flex justify-between items-center px-5 py-10 overflow-hidden"
          style="
            background: linear-gradient(
              303.63deg,
              #2da5f3 3.87%,
              rgba(211, 236, 248, 0.54) 72.91%
            );
          "
        >
          <div>
            <h5 class="text-2xl font-bold mb-2 text-blue-600">
              Spesial Product Sale
            </h5>
            <div class="grid grid-cols-2">
              <div>
                <p class="text-sm text-slate-700 mb-2">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Voluptatem, voluptatum!
                </p>
                <button
                  class="bg-white rounded-lg px-5 py-2 text-sm text-slate-700"
                >
                  Buy now
                </button>
              </div>
              <img src="{{  asset('landing/image/hp-2.p')}}ng" alt="Hp" class="block w-[90rem]" />
            </div>
          </div>
        </div>
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >MacBook Air M3 2024 | 13 Inch 128GB | 256GB | 512GB</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/laptop')}}.png" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <div class="border-2 py-3 px-2 flex flex-col justify-between">
          <a
            href="view-product.html"
            class="font-medium text-slate-800 text-sm tracking-tighter"
            >Mouse Gaming | PRO Wireless PRO X SUPERLIGHT TWO</a
          >
          <div
            class="flex justify-center items-center bg-center bg-contain overflow-hidden mx-auto mb-4"
          >
            <img src="{{  asset('landing/image/mouse.')}}png" alt="Hp" width="100" />
          </div>

          <div class="flex items-center space-x-1 mb-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-yellow-400"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-4 h-4 text-gray-300"
              viewBox="0 0 24 24"
              stroke="none"
            >
              <path
                d="M12 17.75l-6.16 3.24a1 1 0 0 1-1.45-1.05l1.17-7.23L1.31 8.7a1 1 0 0 1 .56-1.72l7.29-.61L12 .25l3.03 6.12 7.29.61a1 1 0 0 1 .56 1.72l-4.74 4.24 1.17 7.23a1 1 0 0 1-1.45 1.05L12 17.75z"
              ></path>
            </svg>
            <span class="text-sm text-slate-600 text-sm">(460)</span>
          </div>
          <div class="flex justify-between">
            <p class="text-xl text-blue-500 font-medium tracking-tight">
              Rp.10.000.000
            </p>
            <button
              class="w-10 h-10 bg-blue-500 flex justify-center items-center rounded-md"
            >
              <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#ffffff"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#ffffff"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="md:px-28 px-5 py-5 bg-[#EAF6FE] min-h-96">
      <div class="grid md:grid-cols-5 grid-cols-1 pt-10 gap-5">
        <div>
          <h6 class="text-sm text-slate-800 mb-10">Customer Supports:</h6>
          <h4 class="text-lg text-semibold mb-5">(629) 555-0129</h4>
          <p class="text-sm text-slate-600 mb-10">
            4517 Washington Ave. Manchester, Kentucky 39495
          </p>
          <p class="text-slate-700 text-md">info@zentech.com</p>
        </div>
        <div>
          <h6 class="text-sm text-slate-800 mb-10">Top Category</h6>
          <ul>
            <li><a href="#" class="text-sm text-slate-500">Smartphone</a></li>
            <li>
              <a href="#" class="text-sm text-slate-500">Laptop & Computer</a>
            </li>
            <li><a href="#" class="text-sm text-slate-500">HeadPhone</a></li>
            <li><a href="#" class="text-sm text-slate-500">Mouse</a></li>
          </ul>
        </div>
        <div>
          <h6 class="text-sm text-slate-800 mb-10">Quick links</h6>
          <ul>
            <li><a href="#" class="text-sm text-slate-500">Product</a></li>
            <li><a href="#" class="text-sm text-slate-500">Shoping</a></li>
            <li><a href="#" class="text-sm text-slate-500">About</a></li>
          </ul>
        </div>
        <div></div>
        <div></div>
      </div>
    </section>

    <script>
      window.addEventListener("scroll", () => {
        const header = document.getElementById("header");
        if (window.scrollY >= 40) {
          header.classList.add("backdrop-blur-xl");
        } else {
          header.classList.remove("backdrop-blur-xl");
        }
      });

      const carts = document.getElementById("carts");
      carts.addEventListener("click", () => {
        const closeCart = document.getElementById("close-cart");
        const listCart = document.getElementById("list-cart");
        listCart.classList.remove("hidden");

        closeCart.addEventListener("click", () => {
          listCart.classList.add("hidden");
        });

        listCart.addEventListener("click", (e) => {
          // Periksa apakah target bukan bagian dari 'cart-content' atau tombol 'close-cart'
          if (!e.target.closest("#cart-content")) {
            listCart.classList.add("hidden");
          }
        });
      });

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

      function minus(id) {
        const input = document.getElementById(id);
        if (input.value > 1) {
          input.value = parseInt(input.value) - 1;
        }
      }

      function plus(id, max) {
        const input = document.getElementById(id);
        if (input.value < max) {
          input.value = parseInt(input.value) + 1;
        }
      }
    </script>
  </body>
</html>
