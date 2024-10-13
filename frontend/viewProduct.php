<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VSnacks - Chi tiết sản phẩm</title>
        <link rel="icon" href="./admin/assets/img/logo.png" type="image/x-icon">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">VSnacks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html" id="direc">Đăng nhập</a></li>
                        <li class="nav-item d-none" id="pageAdmin"><a class="nav-link" href="admin/index.html">Quản trị website</a></li>
                        <script>
                            if(localStorage.getItem('user')){
                                let nav = document.getElementById('direc');
                                nav.innerText = "Đăng xuất";
                                nav.href = "#";
                                nav.addEventListener("click", (e) => {
                                    if(nav.innerText === "Đăng xuất") e.preventDefault();
                                    nav.innerText = "Đăng nhập";
                                    localStorage.removeItem('user');
                                    nav.href = "login.html";
                                });
                            }
                            if(localStorage.getItem('user')){
                                let checkAdmin = JSON.parse(localStorage.getItem('user'));
                                if(checkAdmin.role === "admin"){
                                    document.getElementById("pageAdmin").classList.remove("d-none");
                                }else{
                                    document.getElementById("pageAdmin").classList.add("d-none");
                                }
                            }
                        </script>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cửa hàng</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.html">Tất cả sản phẩm</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Bánh kẹo</a></li>
                                <li><a class="dropdown-item" href="#">Đồ uống</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Giỏ hàng
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Đồ ăn vặt giá rẻ</h1>
                    <p class="lead fw-normal text-white-50 mb-0">
                    <ol class="breadcrumb justify-content-center" style="--bs-breadcrumb-divider: '>';">
                        <li class="breadcrumb-item"><a href="./index.html" class="text-decoration-none">Trang chủ</a></li>
                        <?php
                            $idProducts = $_GET['id'];
                            $stream = stream_context_create([
                                'http' => [
                                        'header' => 'Content-Type',
                                        'method' => 'GET'
                                ]
                            ]);
                            $nameProduct = json_decode(file_get_contents("http://localhost:3000/products/$idProducts"), true)['name'];
                        ?>
                        <li class="breadcrumb-item">Sản phẩm</li>
                        <li class="breadcrumb-item active"><?= $nameProduct ?></li>
                    </ol>
                    </p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container-md px-4 px-lg-5 mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 img-details">
                    </div>
                    <div class="mt-3 mt-md-0 col-12 col-md-6 info-details">

                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark text-light">
            <div class="container"><p class="m-0 text-center text-white"> &copy; Bản quyền thuộc về <strong><span>VSnacks</span></strong>. Tất cả đều được bảo lưu</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            const queryString = new URLSearchParams("<?= $_SERVER['QUERY_STRING'] ?>");
            const idURL = queryString.get('id');
            getProduct(idURL);
            total();
            // const data = await getProduct(idURL);
        </script>
    </body>
</html>
