    <x-app-layout>
        @section('title', 'จัดการผู้ใช้')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="text-2xl p-6 m-6">การจัดการผู้ใช้</div>
                    <div class="p-6 m-6">
                            <table class="min-w-full divide-y divide-gray-200 text-center">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ลำดับ
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ชื่อ
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            อีเมล
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            วันที่ตรวจสอบอีเมล
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            วันที่สร้าง
                                        </th>

                                        <th scope="col" 
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <span class="sr-only">Delete</span>
                                        </th>


                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($Users as $User)
                                        <tr>
                                            <td class="px-2 py-4 whitespace-nowrap text-xs font-medium text-gray-500">
                                                {{ $User->id }}
                                            </td>
                                            <td class="px-2 py-4 whitespace-nowrap text-xs font-medium text-gray-500">
                                                {{ $User->name }}
                                            </td>
                                            <td class="px-2 py-4 whitespace-nowrap text-xs font-medium text-gray-500">
                                                {{ $User->email }}
                                            </td>
                                            <td class="px-2 py-4 whitespace-nowrap text-xs font-medium text-gray-500">
                                                {{ $User->email_verified_at ? $User->email_verified_at->timezone('Asia/Bangkok')->format('Y-m-d H:i:s') : 'ยังไม่ได้ตรวจสอบ' }}
                                            </td>                                            
                                            <td class="px-2 py-4 whitespace-nowrap text-xs font-medium text-gray-500">
                                                {{ $User->created_at->timezone('Asia/Bangkok')->format('Y-m-d H:i:s') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
