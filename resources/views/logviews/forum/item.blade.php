<x-app-layout>
    <div class="">
       <h1>foro: {{$forum->title}}</h1>
       @foreach ($replies as $item)
           <h2>{{$item->description}}</h2>
       @endforeach
    </div>
</x-app-layout>