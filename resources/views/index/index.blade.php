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
                <a href="/"> Trang Chủ</a>
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

    <div class="container  mr-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                @include('layouts.sidebarlight')
            </div>
            <div class="col-md-8">
                <h5 class="mb-4">Lời mở đầu</h5>
                &nbsp; &nbsp; Nền Y học cổ truyền của Việt Nam có một truyền thống và có lịch sử lâu đời phong phú. Từ xưa ông cha ta đã biết sử dụng nguồn dược liệu quý giá của đất nước với các phương pháp chế biến khác nhau và các dạng bào chế thích hợp dùng để phòng và chữa bệnh cho nhân dân. Trải qua hàng ngàn năm lịch sử, từ thế hệ trước truyền lại cho thế hệ sau, đúc kết được các kinh nghiệm từ thực tiễn lâm sàng, xây dựng nên những lý luận về các phương pháp phòng và chữa bệnh, đồng thời còn dựa vào hệ thống triết học cổ phương Đông, vận dụng vào Y học cổ truyền như thuyết âm dương ngũ hành, tạng tượng kinh lạc... tạo ra một hệ thống y lý phong phú, có sáng tạo phù hợp với điều kiện, hoàn cảnh Việt Nam. <br><br>

                Trong quá trình đó đã xuất hiện nhiều danh y nổi tiếng với kinh nghiệm phong phú như Phạm Công Bân, Tuệ Tĩnh thế kỷ 14, Nguyễn Đại Năng thế kỷ 15, Hải Thượng Lãn Ông thế kỷ 18. Đó là những ngôi sao sáng, xuất chúng trong Ngành Y học cổ truyền của nước ta. Nối tiếp ông cha trong lĩnh vực Y học cổ truyền của nước ta; dưới ánh sáng của các chỉ thị, nghị quyết của Đảng và chính sách của Nhà nước như Chỉ thị 210, Nghị quyết 200CP, Nghị quyết 226CP; dưới sự lãnh đạo trực tiếp của Bộ y tế, nền Y học cổ truyền của nước ta không ngừng mở rộng và phát triển. <br><br>

                Trong việc kết hợp Y học cổ truyền dân tộc và Y học hiện đại, công tác khảo cứu, kiểm tra tài liệu y thư có vai trò quan trọng. Bên cạnh đó, với phương châm xã hội hóa Y học cổ truyền và đặc biệt nhiệm vụ sắp tới rất mới mẻ và khó khăn, đó là công cuộc hiện đại hóa và công nghiệp hóa Y học cổ truyền của nước ta. Vì vậy nhưng chuẩn bị về kiến thức, tài liệu tra cứu hiện đại phục vụ cho mục đích học tập, phát triển và ứng dụng Y học cổ truyền là điều không thể thiếu được. <br><br>

                Hệ thống từ điển Y học cổ truyền cung cấp nhưng kiến thức từ cơ bản tới chuyên sâu về lý luận Y học cổ truyền có thể vận dụng vào việc học tập và hướng dẫn điều trị bệnh bằng Y học cổ truyền. <br><br> Hệ thống bao gồm các nội dung về Y lý, bệnh danh, phương thang, và các vị dược liệu sử dụng trong khám chữa bệnh bằng y học cổ truyền.

                Hệ thống được biên soạn với nhiều tư liệu quý, thông qua việc sử dụng và nghiên cứu của các tác giả trong và ngoài nước, đặc biệt là trong những năm gần đây. Chúng tôi hy vọng giáo trình này sẽ đáp ứng được yêu cầu học tập và ứng dụng của các y bác sĩ, độc giả quan tâm, yêu thích lĩnh vực Y học cổ truyền. Mặc dù vậy, những thiếu sót là không thể tránh khỏi. Mong được sự đóng góp của các độc giả để hệ thống ngày càng hoàn thiện hơn.
                <h5 class="text-right mb-4 mt-4">Ban biên tập</h5>
            </div>
        </div>


    </div>

    <div onclick="window.location='/rate'" class="evaluate">
        <p>ĐGCL</p>
    </div>
    <!-- ===================================== modal ========================== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tên thuật ngữ (PT2)</h5>
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

    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header text-right">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Tìm kiếm</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Tìm kiếm" aria-describedby="helpId">

                        </div>
                        <button type="submit" class="btn btn-success">tìm kiếm</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

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