<div class="mt-8">
    <a href="{{route('movies.show', $movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show', $movie['id'])}}">
            {{$movie['title']}}
        </a>
        <span class="ml-1">{{$movie['vote_average'] * 10 .'%'}}</span>
        <span class="mx-2">|</span>
        <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
    </div>
    <div class="text-gray-400 text-sm">
        @foreach($movie['genre_ids'] as $genre)
            {{$genres->get($genre)}}
        @endforeach
    </div>
</div>
