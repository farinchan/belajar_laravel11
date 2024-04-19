
<x-app-layout title='Posts'>
    <div class="container">
        <h1>Blog Posts</h1>

        @foreach ($posts as $post)
            <div class="card mt-3">
                <div class="card-header">
                    <h2>
                        {{ $post['title'] }}
                    </h2>
                </div>
                <div class="card-body">
                    <h5> by : {{ $post['author'] }}</h5>
                    <p>
                        {{ $post['content'] }}
                    </p>
                    <p>
                        <a href="">Read more</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
