@include("components/header");

 <!-- Table Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Basic Table</h6>
                <table class="table text-center table-bordered">
                    <thead >
                        <tr class="fw-medium fst-italic">
                            <th scope="col">CAETGORY ID</th>
                            <th scope="col">CAETGORY Name</th>
                            <th scope="col">CAETGORY IMAGE</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCate as $categories)
                            <tr>
                                <td>{{$categories["category_Id"]}}</td>
                                <td>{{$categories["categoryName"]}}</td>
                                <td><img src="assets/img/category/{{$categories['categoryImage']}}" width="90px" alt=""></td>
                                <td><a href="#updateCate{{$categories['category_Id']}}" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a href="catedelete.{{$categories['category_Id']}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            </tr>

                                
                            <!-- Modal -->
                            <div class="modal fade" id="updateCate{{$categories['category_Id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="{{url('update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="cateId" value="{{$categories['category_Id']}}">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="cateName" class="form-control"
                                            aria-describedby="emailHelp" value="{{$categories['categoryName']}}">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="cateImg" type="file" id="formFile">
                                        <img class="mt-2" src="{{asset('img/category/'.$categories['categoryImage'])}}" width="90px" alt="">
                                    </div>
                                    <div class="col-lg-12 justify-content-end d-flex me-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                </div>
                                </div>
                            </div>
                            </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            <!-- Table End -->

@if(session('update'))
<script>
    alert('Category Updated Sucessfully!')
</script>
@elseif(session('deleted'))
<script>
    alert('Category deleted Sucessfully!')
</script>
@endif

@include("components.footer");


<!-- asset() -> just public sy koi refference dyna ho tb he use krna 'asset()' ka method.  -->