<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>infintyScroll Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container mt-5">
        <h2>Activity</h2>
        <div id="activity-container">
            @include('activity.load')
        </div>

    </div>

</body>
<script>
    $(document).ready(function() {
        let nextPageUrl = '{{ $activity->nextPageUrl() }}';
        $(window).scroll(function() {
            alert(nextPageUrl);
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                if (nextPageUrl) {
                    loadMoreActivity();
                }
            }
        });

        function loadMoreActivity() {
            $.ajax({
                url: nextPageUrl,
                type: 'get',
                beforeSend: function() {
                    nextPageUrl = '';
                },
                success: function(data) {
                    nextPageUrl = data.nextPageUrl;
                    $('activity-container').append(data.view);
                },
                error: function(xhr, status, error) {
                    console.error('Error loading more Activity');
                }
            });
        }
    });
</script>

</html>
