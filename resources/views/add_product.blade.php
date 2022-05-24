<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="public/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <title>Add product</title>
</head>

<body>
    @inject('getTitleCategory', 'App\\Http\\Controllers\\Api\\V1\\AddProductController');

    <div class="container">


        {{-- tab --}}
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home">Add Product</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile">Show
                    Product</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact">Show
                    Categories</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-catchildren-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-catchildren" type="button" role="tab" aria-controls="pills-catchildren">Show
                    Categories Children</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-user-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-user" type="button" role="tab" aria-controls="pills-user">Show
                    Users</button>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="{{ route('welcome') }} "> Welcome </a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link " href="{{ route('dashboard') }} "> Dashboard </a>
            </li>
        </ul>


        {{-- tab --}}
        <div class="tab-content red" id="pills-tabContent">

            {{-- tab 1 --}}
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="d-flex justify-content-center mt-2">
                    <h2>Add product</h2>
                </div>

                <div class="d-flex justify-content-center mt-1">
                    <div class="col-6">

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Product title</label>
                                <input type="text" class="form-control" id="product_title"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product image
                                    (nullable)</label>
                                <input type="hidden" class="form-control" id="product_image" value=""><br>

                                <img src="../../public/img/empty-img.png" alt="" id="choose_image_file"
                                    class="choose_image_file" data-src="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product price
                                    (nullable)</label>
                                <input type="text" class="form-control" id="product_price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product categories id
                                    (nullable)</label>
                                <select class="form-select form-select-lg" aria-label=".form-select-sm example"
                                    id="product_categories">
                                    <option selected>Select Categories</option>
                                    <option value="1">Taroz</option>
                                    <option value="2">PowerBank</option>
                                    <option value="3">Soch uchun</option>
                                    <option value="4">Televizor</option>
                                    <option value="5">Elektronika</option>
                                    <option value="6">Smartfon</option>
                                    <option value="7">Smartfon</option>
                                    <option value="7">Memory Card</option>
                                    <option value="8">Kompyuter</option>
                                    <option value="8">Noutbook</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product categories children id
                                    (nullable)</label>
                                <select class="form-select form-select-lg" aria-label=".form-select-sm example"
                                    id="product_categories_children" disabled>
                                    <option selected>Select Categories childrens</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <button type="submit" id="creat_product" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                {{-- end form --}}

                {{-- Show image --}}
                {{-- choose_image --}}
                <div class="modal fade " id="choose_image" tabindex="-1" aria-labelledby="choose_image_"
                    aria-hidden="true">
                    <div class="modal-dialog  modal-xl">
                        <div class="modal-content choose_image">

                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body d-flex justify-content-between  flex-wrap">

                                @foreach ($public as $img)
                                    <img src="{{ asset('../../public/img/' . $img) }}" width="200"
                                        alt="{{ $img }}" class="target_img target_img_js"
                                        data-bs-placement="bottom" data-bs-toggle="tooltip" title="{{ $img }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Show image end --}}

                {{-- Success add product --}}
                <div class="modal fade" id="success_add_product" tabindex="-1" aria-labelledby="success_add_product"
                    aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content success_add_product">

                            <div class="modal-header">
                                <h4 class="modal-title">Info </h4>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="modal-body  d-flex justify-content-between  flex-wrap">
                                <div class="alert alert-success">
                                    Product has been saved
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Success add product end --}}
            </div>

            {{-- tab 2 --}}

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <div class="col-12">
                    <div class="ml-5 p-3 ">
                        <table class="table  table-hover ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Img</th>
                                    <th>Title</th>
                                    <th>Categories</th>
                                    <th>Categories children</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($product_all as $item)
                                    <tr class="">
                                        <th scope="row">{{ $item->id }} </th>
                                        <th>
                                            <img src="{{ asset('../../public/img/' . $item->img) }} " alt=""
                                                width="100">
                                        </th>

                                        <th>{{ $item->title }} </th>
                                        <th>{{ $item->categories_id }}
{{ $getTitleCategory->getCategories($item->categories_id) }} </th>
                                        <th>{{ $item->categories_children_id }}
{{ $getTitleCategory->getCategories_children($item->categories_children_id) }}
                                        </th>
                                        <th>{{ $item->price }} </th>
                                        <th>
                                            <button class="btn btn-danger delete_categories"
                                                data-id="{{ $item->id }} ">Delete</button>
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end mt-3">
                            {{-- {{ $product_all->links('pagination::bootstrap-4') }} --}}

                            {{ $product_all->appends(['s' => request()->s])->links('pagination::bootstrap-4') }}
                            {{-- {{ $product_all->onEachSide(5)->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- tab 3 --}}
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <div class="col-8">
                    <div class="p-3">
                        <table class="table  table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cat as $item)
                                    <tr class="">
                                        <th scope="row">{{ $item->id }} </th>
                                        <th>{{ $item->title }} </th>

                                        <th>
                                            <button class="btn btn-danger delete_product"
                                                data-id="{{ $item->id }} ">Delete</button>
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- tab 3 end --}}

            {{-- tab 4 --}}
            <div class="tab-pane fade" id="pills-catchildren" role="tabpanel" aria-labelledby="pills-contact-tab">

                <div class="col-8">
                    <div class="p-3">
                        <table class="table  table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Categories id</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cat_children as $item)
                                    <tr class="">
                                        <th scope="row">{{ $item->id }} </th>
                                        <th>{{ $item->title }} </th>
                                        <th>
                                          {{ $item->categories_id }} 
                                        {{ $getTitleCategory->getCategories($item->categories_id) }} 
                                      </th>

                                        <th>
                                            <button class="btn btn-danger delete_product"
                                                data-id="{{ $item->id }} ">Delete</button>
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- tab 4 end --}}

            {{-- tab 5 --}}
            <div class="tab-pane fade" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">

                <div class="col-12">
                    <div class="p-3">
                      <table class="table  table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>role_id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>email_verify</th>
                                    <th>created_at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                          @foreach ($users as $item)
                              <tr class="">
                                  <th scope="row">{{ $item->id }} </th>
                                  <th>{{ $item->role_id }} </th>
                                  <th>{{ $item->name }} </th>
                                  <th>{{ $item->email }} </th>
                                  <th>{{ $item->email_verify }} </th>
                                  <th>{{ $item->created_at }} </th>

                                  <th>
                                      <button class="btn btn-success update_user"
                                          data-user-id="{{ $item->id }} ">Edit</button>
                                  </th>
                                  <th>
                                      <button class="btn btn-danger delete_user"
                                          data-user-id="{{ $item->id }} ">Delete</button>
                                  </th>
                              </tr>
                          @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- tab 5 end --}}

        </div> {{-- tab end --}}
    </div>

    <script src="public/script/jquery-3.2.1.min.js"></script>

    <script>
        // Initialize tooltips
        let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        let tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // boostrap last Tab
        $(function() {
            $('.nav-link').on('click', function(e) {
                window.localStorage.setItem('activeTab', $(e.target).attr('id'));
            });
            let activeTab = window.localStorage.getItem('activeTab');
            if (activeTab) {
                let someTabTriggerEl = document.querySelector('#' + activeTab);
                let tab = new bootstrap.Tab(someTabTriggerEl);

                tab.show();
            }
        });

        $(document).ready(function() {

            // choose image modal, open and close
            $('.target_img_js').on('click', function(e) {

                var src = $(this).attr('alt');
                console.log('bosildi ', src);

                $('.btn-close').trigger("click");

                $('#choose_image_file').attr("src", "../../public/img/" + src);
                $('#choose_image_file').attr("data-src", src);
                $('#product_image').val(src);
            });

            // open and set choose image 
            $('#choose_image_file').on('click', function() {
                $('#choose_image').modal('toggle');
            });

            // set categories childrens
            $('#product_categories').on('change', function() {

                let catId = $(this).val();
                console.log(' ', catId);

                $.ajax({
                    type: 'GET',
                    url: 'api/getcategorieschildren/' + catId,
                    data: {},
                    success: function(data) {
                        console.log(data);
                        let output = '';
                        for (const key in data) {
                            if (Object.hasOwnProperty.call(data, key)) {
                                const element = data[key];
                                output +=
                                    `<option value="${element['id']}">${element['title']}</option>`;
                            }
                        }
                        console.log(output);
                        $('#product_categories_children').html(output)
                        $('#product_categories_children').prop('disabled', false);
                    },
                    error: function(data) {},
                });
            });

            // save bd
            $('#creat_product').on('click', function(e) {
                e.preventDefault();
                let title = $('#product_title').val();
                let img = $('#product_image').val();
                let price = $('#product_price').val();
                let cat = $('#product_categories').val();
                let catChildren = $('#product_categories_children').val();

                if (title == '' || img == '' || price == '' || cat == '' || catChildren == '') {
                    alert('Fill in all the fields');
                } else {

                    $.ajax({
                        type: 'POST',
                        url: 'api/addproduct',
                        data: {
                            title: title,
                            img: img,
                            price: price,
                            cat: cat,
                            catChildren: catChildren,
                        },
                        success: function(data) {
                            console.log(data, ' kkkkk');
                            if (data == 1) {
                                $('#success_add_product').modal('toggle');
                            }
                        },
                        error: function(data) {
                            alert('Product not saved');
                        },
                    });
                    console.log(title, ' ', img, ' ', price, ' ', cat, ' ', catChildren);
                }
            });

            // delete product
            $('.delete_product').on('click', function(e) {

                let id = $(this).attr('data-id');
                console.log(id);

                if (confirm('Delete product')) {
                    $.ajax({
                        type: 'GET',
                        url: 'api/delete_product/' + id,
                        data: {},
                        success: function(data) {
                            if (data == 1) {
                                alert(`Product id: ${id} deleted `, data);
                                location.reload(true);
                            }
                        },
                        error: function(data) {},
                    });
                }
            });

            // update user
            $('.update_user').on('click', function(e) {

                let id = $(this).attr('data-user-id');
                console.log(id);

                if (confirm('Update user')) {
                    $.ajax({
                        type: 'GET',
                        url: 'set_admin/' + id,
                        data: {},
                        success: function(data) {
                            if (data == 1) {
                                alert(`User  id: ${id} Admin `, data);
                                location.reload(true);
                            }
                        },
                        error: function(data) {},
                    });
                }
            });

            // delete user
            $('.delete_user').on('click', function(e) {

                let id = $(this).attr('data-user-id');
                console.log(id);

                if (confirm('Delete user')) {
                    $.ajax({
                        type: 'GET',
                        url: 'delete_user/' + id,
                        data: {},
                        success: function(data) {
                            if (data == 1) {
                                alert(`User  id: ${id} Deleted `, data);
                                location.reload(true);
                            }
                        },
                        error: function(data) {},
                    });
                }
            });
        });
    </script>
</body>

</html>
