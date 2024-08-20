<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/2.1.2/dataTables.bootstrap5.min.js"
        integrity="sha512-Cwi0jz7fz7mrX990DlJ1+rmiH/D9/rjfOoEex8C9qrPRDDqwMPdWV7pJFKzhM10gAAPlufZcWhfMuPN699Ej0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>show</title>
</head>
{{-- <style>
    .question-detail {
        padding: 20px;
        max-width: 800px;
        margin: auto;
    }

    .question-title {
        font-size: 2em;
        margin-bottom: 0.5em;
    }

    .question-description {
        font-size: 1.2em;
        margin-bottom: 1em;
    }

    .question-category {
        display: inline-block;
        background-color: #f0f0f0;
        padding: 5px 10px;
        border-radius: 5px;
        margin-bottom: 1em;
    }

    .media-section {
        margin-top: 2em;
    }

    .photo-gallery {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .photo-gallery img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .video-container {
        margin-top: 1em;
    }

    video,
    iframe {
        width: 100%;
        height: auto;
    }
</style>  --}}

<body>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title text-center ">
                <h3> <i class="bi bi-question-diamond me-2"></i>Question Details</h3>
            </div>
            <a href="{{ url('/question') }}" class="btn btn-warning" title="add a user">

                <i class="bi bi-arrow-return-left"></i> Return
            </a>
        </div>
        <div class="card-body">

            <div class=" ms-4">
                <h4 class="questionName">Question </h4>
                <h4 class="question-description">description of the question </h4>
                <h4 class="question-category">Category </h4>
                <h4 class="question-answer">Answer</h4>
                <div class="media-section">
                    <h4>Photos</h4>
                    <div class="photo-gallery">
                        <img src="photo1.jpg" alt="Description of photo 1">
                        <img src="photo2.jpg" alt="Description of photo 2">
                        <!-- More photos can be added here -->
                    </div>

                    <h4>Videos</h4>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/videoid" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>
