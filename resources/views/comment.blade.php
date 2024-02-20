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
                    <th class="border border-primary text-center">Comment</th>
                    <th class="border border-primary text-center">Create</th>
                    <th class="text-center">Update</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($comments as $comment)
                <tr>
                    <td class="border border-primary">{{ $comment->id}}</td>
                    <td class="border border-primary">{{ $comment->comment }}</td>
                    <td class="border border-primary">{{ $comment->created_at }}</td>
                    <td class="border border-primary">{{ $comment->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No posts found.</td>
                </tr>
            @endforelse

            </tbody>
        </table>
       <div class="paginator">
        {{ $comments->links() }}
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
