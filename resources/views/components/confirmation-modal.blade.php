@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-[#2A2928] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-center justify-center">
            <div class="text-center  sm:text-center">
                <h3 class="text-lg font-medium text-white ">
                    {{ $title }}
                </h3>

                <div class="mt-4 text-sm ">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center px-6 py-4 bg-[#2A2928] text-end">
        {{ $footer }}
    </div>
</x-modal>
