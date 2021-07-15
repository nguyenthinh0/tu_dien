<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ BASE_URL . 'frontend/assets/css/style.css' }}">
    <script src="{{ BASE_URL . 'backend/assets/js/jquery.js' }}"></script>
    <script src="{{ BASE_URL . 'backend/assets/js/ckfinder.js' }}"> </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

</head>

<body>
    <header>
        <img src="{{BASE_URL .'frontend/assets/images/panner.png'   }}" class="img-fluid" alt="" srcset="">
        <div class="header-top"></div>
        <div style="background: #35363A" class="menu">
            <div class="home">
                <a href="/"> Trang chủ</a>
            </div>
            <div class="button">

                <button>abc</button>
            </div>
            <ul class="list-menu">

                <li class="menu-item">
                    <a href="/benh-danh">Bệnh Danh </a>
                </li>
                <li class="menu-item">
                    <a href="/vi-thuoc">Vị Thuốc</a>
                </li>
                <li class="menu-item">
                    <a href="/phuong-thang">Phương Thang</a>
                </li>
                <li class="menu-item">
                    <a href="/thuat-ngu-khac">Thuật Ngữ Khác</a>
                </li>
                <li class="menu-item">
                    <a href="/tim-kiem-nc">Tìm Kiếm Nâng Cao</a>
                </li>
                <li class="menu-item">
                    <a href="/rate">Đánh Giá Chất Lượng</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="container mb-4">
        <nav class="breadcrumb bg-white">
            <a class="breadcrumb-item" href="/">Trang chủ</a>
            <a class="breadcrumb-item" href="">
                @yield('title')
            </a>

        </nav>
        @yield('content')
    </div>

    <button type="button" class="btn btn-primary search" data-toggle="modal" data-target="#search">
        Tìm kiếm
    </button>
    @if($_SERVER['REQUEST_URI'] != "" && $_SERVER['REQUEST_URI'] != "/" && $_SERVER['REQUEST_URI'] != "/tim-kiem-nc" && $_SERVER['REQUEST_URI'] != "/rate")
    <button type="button" class="contact btn btn-primary gopy" data-toggle="modal" data-target="#exampleModal">
        Góp ý
    </button>
    @endif
    <div onclick="window.location='/rate'" class="evaluate">
        <p>ĐGCL</p>
    </div>
    <!-- ===================================== modal ========================== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div id="exampleModalLabelTerms">
                        <h5 class="modal-title">Tên thuật ngữ </h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/feedback" method="post" id='formGopy'>
                        <div class="form-group">
                            <label for="">Người góp ý</label>
                            <input type="text" name="DoiTuongGY" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">ND góp ý</label>
                            <textarea class="form-control" name="NoiDungGY" id="#editor" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" form="formGopy" class="btn btn-primary">Gửi</button>
                </div>
            </div>
        </div>
    </div>
    {{-- ======================================== search ================================ --}}
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header text-right">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="/search" method="post">
                        <div class="form-group">
                            <label for="">Tìm kiếm</label>
                            <input type="text" name="search" id="" class="form-control" placeholder="Tìm kiếm" aria-describedby="helpId">
                            <input type="hidden" name="LoaiTN" value="{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}">
                        </div>
                        <button type="submit" class="btn btn-success">tìm kiếm</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', '|',
                        'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', '|',
                        'insertTable', '|',
                        'uploadImage', 'blockQuote', '|',
                        'undo', 'redo', 'ckfinder'
                    ],
                    shouldNotGroupWhenFull: true

                },
                ckfinder: {
                    // Upload the images to the server using the CKFinder QuickUpload command.
                    uploadUrl: 'http:localhost/upload-event?command=QuickUpload&type=Images&responseType=json',
                    options: {
                        resourceType: 'Images'
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        }
                    ]
                }
            });
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ BASE_URL . 'frontend/assets/js/script.js' }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ BASE_URL . 'backend/assets/js/jquery-3.6.0.slim.min.js' }}"> </script>
    <script src="{{ BASE_URL . 'backend/assets/js/jquery-3.6.0.min.js' }}"> </script>
    <script src="{{ BASE_URL . 'backend/assets/js/gopy.js' }}"></script>
</body>

</html>