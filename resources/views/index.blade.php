<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5 pt-5">
            <table class="table border border-primary">
                <thead >
                    <tr">
                        <th class="border border-primary">ID</th>
                        <th class="border border-primary text-center">Post</th>
                        <th class="border border-primary text-center">Post Id from comment</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id}}</td>
                            <td>{{ $post->post}}</td>
                            <td>{{ $post->comments->count() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No posts found.</td>
                        </tr>
                    @endforelse
                </tbody>

                </div>
            </table>
            <div class="div">
                {{ $posts->links() }}
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
