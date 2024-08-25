{{-- <div class="row">
    <div class="col-md-6">
        <div class="form-group">

            <label for="firstname" class="form-label mt-2">
                First Name
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="text" name="firstname" class="form-control form-control-sm"
                id="firstname">

        </div>
        <div class="form-group">
            <label for="email" class="form-label mt-2">
                Email
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="email" name="email" class="form-control form-control-sm "
                id="email">
        </div>
        <div class="form-group">

            <label for="password" class="form-label mt-2">
                Password
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="password" name="password" class="form-control form-control-sm"
                id="password">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <label for="lastname" class="form-label mt-2">
                Last Name
            </label>
            <input type="text" name="lastname" class="form-control form-control-sm"
                id="lastname">
        </div>
        <div class="form-group">

            <label for="PhoneNumber" class="form-label mt-2">
                Phone Number
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="number" name="PhoneNumber"
                class="form-control form-control-sm" id="PhoneNumber">
        </div>
        <div class="form-group">

            <label for="Confirmation" class="form-label mt-2">
                Password Confirmation
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="password" name="Confirmation"
                class="form-control  form-control-sm" id="Confirmation">
        </div>
    </div>
    <div class="form-group">
        <label for="gender" class="form-label mt-2">
            Gender
        </label>
        <select class="form-select form-select-sm" name="gender" id="gender">
            <option selected disabled>Select your gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
    </div>
    <div class="btn mt-3 d-flex justify-content-between">
        <button type="reset" class="btn btn-danger btn-sm " id="btn">
            <i class="bi bi-backspace-fill me-2"></i>Cancel
        </button>
        <button type="submit" class="btn btn-primary btn-sm" id="btn">
            <i class="bi bi-save me-2"></i>Submit
        </button>
    </div>
</div> --}}
<div class="col-md-6">
    <div class="question-detail">
        <h4 class="question-title"> Question Title</h4>
        <p class="question-description">This is an example of a detailed description that
            explains
            the
            context and
            content of the question in full.</p>
        <p class="question-category"><strong>Category:</strong> server problem
        </p>
        <div class="question-answer">
            <h5>Answer</h5>
            <p>This area provides a comprehensive answer to the question posed, detailing all
                relevant
                information.
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="media-gallery">
            <h5>Photo</h5>


            <h5>Video</h5>
            <div class="videos">
                <iframe src="{{ asset('video/video1.mp4') }}" frameborder="0"
                    allowfullscreen></iframe>
            </div>

        </div>
    </div>

