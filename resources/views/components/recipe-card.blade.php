<a href="{{$link}}" class="bg-green-500 p-4 rounded relative overflow-hidden max-h-32 ">
    <h2 class="z-10 relative font-semibold text-white text-3xl">{{$title}}</h2>
    @if ($image !== "")
        <img src="/{{$image}}" alt="" class="absolute object-cover top-0 left-0 z-0 h-full w-full"/>
    @endif
</a>
