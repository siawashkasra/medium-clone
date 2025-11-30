<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900">


                    <ul class="flex flex-wrap text-sm font-medium text-center text-body justify-center">
                       @foreach ($categories as $category )
                            <li>
                            <a class="inline-block px-4 py-3 text-fg-disabled cursor-not-allowed">{{ $category['name'] }}</a>
                        </li>
                       @endforeach

                    </ul>

                </div>
            </div>
                <div class="p-6 text-gray-900">


                       @forelse ($posts as $post )


                            <div class="flex bg-white bg-neutral-primary-soft block max-w-3x1 p-6 border border-default rounded-base shadow-xs">

                                <div class="flex-col">
                                     <div>
                                 <a href="#" class="block">
                                    <img class="rounded-base" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="" />
                                </a>
                              </div>
                                    <a href="#" class="block">
                                    <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $post->title}}</h5>
                                </a>
                                <div class="mb-6 text-body">{{ Str::words($post->content, 15)}}</div>

                                  <a href="#" class="block flex-none items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                    Read more
                                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                                </a>
                                </div>

                            </div>
                          @empty
                            <div>No posts found.</div>

                       @endforelse


                </div>
                {{ $posts->links() }}
        </div>

    </div>
</x-app-layout>
