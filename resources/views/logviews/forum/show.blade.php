<x-app-layout>
    <div class="">
        @foreach ($forums as $item)
            <h1><a href="{{route('forumlog.item',[$item->category,$item->id])}}">{{$item->title}}</a></h1>
            <h2>{{$item->id}}</h2>
            <h3>{{$item->description}}</h3>
        @endforeach
    </div>
</x-app-layout>