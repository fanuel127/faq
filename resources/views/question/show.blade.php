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
    <title>details</title>
</head>

<body>
    <div class="container mt-1">
        <div class="card">
            <div class="card-header d-flex justify-content-between  bg-secondary">
                <div class="card-title text-center ">
                    <h3> <i class="bi bi-question-diamond me-2"></i>Question Details</h3>
                </div>
                <a href="{{ url('/question') }}" class="btn btn-info" title="add a question">

                    <i class="bi bi-arrow-return-left"></i> Return
                </a>
            </div>
            <div class="card-body">
                <div class="question-detail">
                    <h1 class="question-title"> Question Title</h1>
                    <p class="question-description">This is an example of a detailed description that explains the
                        context and
                        content of the question in full.</p>
                    <p class="question-category"><strong>Category:</strong> server problem
                    </p>
                    <div class="media-gallery">
                        <h4>Photo</h4>
                        <div class="photos">
                            <img src="{{ asset('image/img4.png') }}" alt="Sample Photo 1" class="photo">
                        </div>

                        <h4>Video</h4>
                        <div class="videos">
                            <iframe src="{{ asset('video/video1.mp4') }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="question-answer">
                            <h4>Answer</h4>
                            <p>This area provides a comprehensive answer to the question posed, detailing all relevant
                                information.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-body {
            background: #ddd7d7;
            padding: 20px;
            border-radius: 0px;
            /* box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); */
        }

        .question-title {
            font-size: 2em;
            color: #333;
            margin-bottom: 15px;
        }

        .question-description,
        .question-answer p {
            font-size: 1em;
            color: #555;
            margin-bottom: 20px;
        }

        .question-category {
            font-size: 1em;
            margin-bottom: 20px;
        }

        /* .media-gallery h4 {
            margin-top: 25px;
            font-size: 1.5em;
            color: #333;
        } */



        .photo {
            height: auto;
            border-radius: 0px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: calc(80% - 10px);
            height: 200px;
            border-radius: 0px;
            /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
        }

        @media (max-width: 800px) {
            .photo {
                max-width: calc(70% - 10px);
            }

            iframe {
                width: 100%;
            }
        }

        @media (max-width: 500px) {
            .question-title {
                font-size: 2em;
            }

            .question-description,
            .question-answer p {
                font-size: 0.9em;
            }
        }
    </style>
</body>

</html>
