@include('components/header');

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Add Categories</h3>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="cateName" class="form-control"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" name="cateImg" type="file" id="formFile">
                    </div>
                    <div class="col-lg-12 justify-content-end d-flex me-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if(session("categories"))
<script>alert('category added Sucessfully.');</script>
@endif
@include('components/footer');

<!-- Cross-Site Request Forgery (CSRF) -->
 