<x-layout>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Vuelos</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>

                        <th class="px-6 py-2 text-xs text-gray-500">
                            <a href="">
                                Codigo del vuelo
                            </a>
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            <a href="">
                                Origen
                            </a>
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Destino
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Compañia
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Salida
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Llegada
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Asientos
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Precio
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($vuelos as $vuelo)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->codigo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->origen }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->destino }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->compania }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->salida }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->llegada }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->asientos }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $vuelo->precio }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</x-layout>
