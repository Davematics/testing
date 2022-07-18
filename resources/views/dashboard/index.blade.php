<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Legend Workplace</title>
</head>
<body>
    <section class="flex items-start">
        <aside class="w-[220px] bg-[#333333] h-screen py-12 text-sm">
            <img src="/assets/images/legend_rev 1.svg" alt="legend workplace">
            <p class="text-[#9C9C9C] my-10 pl-8 tracking-widest">Management</p>
            <ul class="text-white w-full">
                <li class="py-3 pl-6 bg-white bg-opacity-[.2]">Dashboard</li>
                <li class="py-3 pl-8">Operations</li>
                <li class="py-3 pl-8">Customer Experience</li>
                <li class="py-3 pl-8">Marketing</li>
                <li class="py-3 pl-8">Legal</li>
                <li class="py-3 pl-8">Products/ Services</li>
            </ul>
        </aside>
        <main style="width: calc(100% - 220px)" class="h-screen bg-[#F3F3F3]">
            <header class="flex items-center justify-between w-full bg-white pt-6 px-10">
                <div>
                    <h1 class="font-bold text-2xl leading-loose">Hello Admin</h1>
                    <p class="text-gray-500 text-sm">Welcome back! Last login was 23 hours ago. </p>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <img src="/assets/images/notifications.svg" alt="notifications">
                        <div class="text-[9px] min-w-[16px] min-h-[16px] text-white bg-[#FD4F00] flex items-center justify-center rounded-full p-[2px] absolute -top-2 -right-1.5">14</div>
                    </div>
                    <div class="w-[48px] h-[48px] rounded-full border border-[#FD4F00] ml-8 mr-2">
                        <img src="/assets/images/Profile@2x.svg" class="w-full h-full rounded-full">
                    </div>
                    <img src="/assets/images/Vector (Stroke).svg" alt="view profile" class="cursor-pointer w-4">
                </div>
            </header>
            <nav class="bg-white px-10 pt-10 shadow-md">
                <ul class="uppercase flex items-center text-xs font-medium text-gray-500">
                    <li class="py-3 px-10 text-[#FD4F00] border-b-2 border-[#FD4F00]">finance</li>
                    <li class="py-3 px-10">Operations</li>
                    <li class="py-3 px-10">Customer Experience</li>
                    <li class="py-3 px-10">Marketing</li>
                    <li class="py-3 px-10">Legal</li>
                </ul>
            </nav>
            <section class="w-full flex items-center justify-between px-10 mt-10">
                <h1 class="font-semibold text-3xl">Finance Dashboard Overview</h1>
                <div class="flex items-center text-sm text-[#FD4F00]">
                    <button class="border border-[#FD4F00] rounded py-1 px-3">Create AIE</button>
                    <button class="flex items-center mx-3 border border-[#FD4F00] rounded py-1 px-3">
                        <span>Reports</span>
                        <img src="/assets/images/Vector.png" class="ml-2">
                    </button>
                    <button class="flex items-center border border-[#FD4F00] rounded py-1 px-3">
                        <span>Filter</span>
                        <img src="/assets/images/Vector.png" class="ml-2">
                    </button>
                </div>
            </section>
        </main>
    </section>
</body>
</html>
