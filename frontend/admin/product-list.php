<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VSnacks - Danh sách sản phẩm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">VSnacks</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Tìm kiếm" title="Bấm enter để tìm kiếm">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2" id="nameAdmin"></span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6 id="nameAdmin2"></h6>
                            <span>Nhà phát triển website</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Hồ sơ của tôi</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Cài đặt tài khoản</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Trợ giúp?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" id="logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <script>
        if(localStorage.getItem('user')){
            document.getElementById("nameAdmin").innerText = JSON.parse(localStorage.getItem('user')).name;
            document.getElementById("nameAdmin2").innerText = JSON.parse(localStorage.getItem('user')).name;
        }
        document.getElementById("logout").addEventListener("click", () => {
            localStorage.removeItem('user');
            window.location = "../login.html";
        });
    </script>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Bảng điều khiển</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="product-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="addproduct.html">
                            <i class="bi bi-circle"></i><span>Thêm mới sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="product-list.php">
                            <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Danh sách sản phẩm</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Bảng điều khiển</a></li>
          <li class="breadcrumb-item active"><a href="product-list.php" style="font-weight: 700">Danh sách sản phẩm</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <h1>Danh sách sản phẩm</h1>
      <table class="table table-hover table-striped text-center table-bordered">
        <thead class="table-primary">
          <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-info">
            <?php $getProduct = json_decode(file_get_contents("http://localhost:3000/products"));
                foreach ($getProduct as $i => $value){
            ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><img src="<?= $value->image ?>" alt="Ảnh sản phẩm" class="img-rounded" width="200"></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->price ?></td>
                    <td><button onclick="handleDel('<?= $value->id ?>')" class="btn btn-outline-danger">Xóa</button><button class="btn btn-warning mt-2 mt-sm-0 ms-sm-2"><a class="text-black" href="editproduct.html?id=<?= $value->id ?>">Sửa</a></button></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </section> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
        &copy; Bản quyền thuộc về <strong><span>VSnacks</span></strong>. Tất cả đều được bảo lưu
    </div>
  </footer><!-- End Footer -->
  <script>
    /* const response = fetch("http://localhost:3000/products");
    const tbody = document.querySelector('tbody');
    response.then(value => {
      const product = value.json();
      product.then(value => {
        value.forEach((value, i) => {
          const eleNew = document.createElement('tr');
          eleNew.innerHTML = `
            <td>${i + 1}</td>
            <td><img src="${value.image}" alt="Ảnh sản phẩm" class="img-rounded col-3"></td>
            <td>${value.name}</td>
            <td>${value.price}</td>
            <td><button class="btn btn-danger">Xóa</button><button class="btn btn-warning mt-2 mt-sm-0 ms-sm-2">Sửa</button></td>
          `;
          tbody.append(eleNew);
        })
      })
    }); */
    /*(async () => {
      const response = await fetch("http://localhost:3000/products");
      const tbody = document.querySelector('tbody');
      const value = await response.json();
      value.forEach((value, i) => {
          const eleNew = document.createElement('tr');
          eleNew.innerHTML = `
            <td>${i + 1}</td>
            <td><img src="${value.image}" alt="Ảnh sản phẩm" class="img-rounded col-3"></td>
            <td>${value.name}</td>
            <td>${value.price}</td>
            <td><button onclick="handleDel('${value.id}')" class="btn btn-danger">Xóa</button><button class="btn btn-warning mt-2 mt-sm-0 ms-sm-2">Sửa</button></td>
          `;
          tbody.append(eleNew);
        })
    })();*/
    const handleDel = async (productId) => {
        if(confirm("Bạn có chắc chắn muốn xóa! ")){
            try{
                await fetch(`http://localhost:3000/products/${productId}`, {
                    method: "DELETE"
                });
                alert("Xóa thành công!");
                window.reload();
            }catch(error){
                alert('Xóa thất bại', error);
            }
        }
    }
    /*(async () => {
        try{
            await fetch('http://localhost:3000/products', {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify({
                    name: "Bánh Hải Sản",
                    image: "haisan.jpg",
                    price: 200000,
                    description: "Bánh rất ngon"
                })
            });
        }catch(err){
            console.error(err);
        }
    })();*/
    /*const updateItem = (id) => {
        const update = document.getElementById('update');
        update.classList.add('show');
        update.style.display = "block";
    }*/
  </script>
  <?php
  /*echo "<pre>";
  $array = [
          "name" => "Lê Chí Vinh",
          "image" => "vinhchi.jpg",
          "price" => "149.000",
          "description" => "Không có",
          "id" => 6
];
  $stream = stream_context_create([
          'http' => [
                  'header' => 'Content-type: application/json',
              'method' => 'GET',
          ],
      'ssl' => [
              'verify_peer' => false,
          'verify_peer_name' => false
      ]
  ]);
  file_get_contents("http://localhost:3000/products", false, $stream);*/
  ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>