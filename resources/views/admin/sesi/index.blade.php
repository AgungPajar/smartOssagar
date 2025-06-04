<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">    <style>
        body {
            background: linear-gradient(45deg, #6a11cb, #2575fc, #4e54c8, #8f94fb);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            color: #fff;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37) !important;
        }

        .btn-primary {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            border: none;
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #8f94fb, #4e54c8);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        .form-control-user {
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }

        .form-control-user:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: #8f94fb;
            box-shadow: 0 0 15px rgba(78, 84, 200, 0.3);
            color: #fff;
        }

        .form-control-user::placeholder {
            color: rgba(255, 255, 255, 0.7);
            font-weight: 300;
        }

        .text-gray-900 {
            color: #fff !important;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .text-center h1 {
            animation: fadeIn 1s ease-in-out;
            font-weight: 700;
            letter-spacing: 2px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .p-5 {
            backdrop-filter: blur(10px);
        }

        .col-lg-6 {
            margin: 0 auto;
        }
    </style>
    
    <div class="text-center">
        <script>
            const hour = new Date().getHours();
            const greeting = hour < 12 ? "Selamat Pagi" : hour < 18 ? "Selamat Siang" : "Selamat Malam";
            document.write(`<h1 class="h4 text-gray-900 mb-4">${greeting}</h1>`);
        </script>
    </div>
    
    <script>
        document.querySelector('.btn-primary').addEventListener('click', function () {
            this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
            this.setAttribute('disabled', 'true');
        });
    </script>
    

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halo</h1>
                                    </div>
                                    <form class="user" action="/sesi/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" value="{{Session::get('email')}}"
                                                placeholder="Masukan Alamat Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Masukan Password Anda" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">JOIN</button>
                                        
                                        
                                    </form>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    
</body>

</html>