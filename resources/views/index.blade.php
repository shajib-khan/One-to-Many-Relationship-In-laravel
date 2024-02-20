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
                @forelse ($Post as $posts)
                    <tr>
                        <td>{{ $posts->id}}</td>
                        <td>{{ $posts->post}}</td>





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
            {{ $Post->links() }}
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
