<x-layout>
    <x-slot name="header">
        {{ __('Posts Create') }}
    </x-slot>

    <x-panel>
        <x-splade-form action="/posts" class="flex flex-col gap-4" enctype='multipart/form-data'>
            <div class="flex gap-4">
                {{-- form input --}}
                <div class="w-1/2 flex flex-col gap-4">
                    <div class="border-b p-2">
                        <h1 class="text-lg text-gray-700 font-semibold">CREATE NEW POST</h1>
                    </div>
                    <x-splade-file name="image" :show-filename="true" label="Image" />
                    <x-splade-input name="title" type="text" label="Title" placeholder="Input your title post" />
                    <x-splade-textarea name="content" autosize label="Content" />
                    <div class="flex gap-2 items-center">
                        <button type="submit"
                            >

                            Save
                        </button>
                        
                        <Link href="/posts"
                            >

                        Back
                        </Link>
                    </div>
                </div>
                {{-- preview image --}}
                <div class="w-1/2">
                    <div class="flex flex-col gap-4" v-if="form.image">
                        <div class="border-b p-2">
                            <h1 class="text-lg text-gray-700 font-semibold">PREVIEW IMAGE</h1>
                        </div>
                        <img v-if="form.image" :src="form.$fileAsUrl('image')" class="rounded-md" />
                    </div>
                </div>
            </div>
        </x-splade-form>
    </x-panel>
</x-layout>