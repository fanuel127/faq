<!-- resources/views/questions/show.blade.php -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> title </h1>
            <p>description </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2>Photos</h2>
            <div class="row">
                {{-- @foreach (photos as photo) --}}
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="" alt=" description " class="img-fluid">
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <h2>Vidéo</h2>
            <video controls class="img-fluid">
                <source src="" type="">
                Votre navigateur ne prend en charge cette vidéo.
            </video>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Réponses</h2>
                {{-- @foreach (answers as answer) --}}
                <div class="card mb-3">
                    <div class="card-body">
                        <p> content </p>
                        <p class="text-muted">Posté par user->name le
                            created_at->format('d/m/Y') </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
