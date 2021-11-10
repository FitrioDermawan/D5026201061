<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Javascript Form Validation</title>

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        #borderatas {
            border: 1px solid lightgray;
            border-bottom: 0px;

            border-radius: 10px 10px 0px 0px;
            background-color: #FFFFED;
        }

        #borderbawah {
            border: 1px solid lightgray;
            border-top: 0px;

            border-radius: 0px 0px 10px 10px;
            background-color: white;
        }

        #fname,
        #uname,
        #email,
        #state,
        #addr,
        #zcode {
            border-radius: 0;
        }

    </style>
    <script>
        (function validate() {
            ;
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function () {
            $("#fname").on('input', function () {
                var expression = /[^a-zA-z ]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#zcode").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

    </script>
</head>

<body>
    <div class="container p-sm-0">
        <div class="container-sm p-4 " style="text-align: center;" id="borderatas">

            <h5 style="font-weight: 600;">JavaScript Form Validation</h5>

        </div>

        <div class="container-sm pl-4 pr-4 pb-4 pt-3" id="borderbawah">

            <p style="color: red; font-size: small;">*All fields are mandatory*</p>

            <form action="https://id.pinterest.com/" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" id="fname" placeholder="" required>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Please provide your full name.</div>
                </div>
                <div class="form-group">
                    <label for="username">Username(6-8 characters):</label>
                    <input type="text" class="form-control" name="username" id="uname" placeholder=""
                        maxlength="8" minlength="6" required>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback" style="text-align: justify;">Username must be min. 6 characters and
                        max. 8 characters.</div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Please provide your email address.</div>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <select class="custom-select" name="state" id="state" required>
                        <option selected disabled value="">Please Choose</option>
                        <option>Miami</option>
                        <option>California</option>
                        <option>Milwaukee</option>
                    </select>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Please choose your state.</div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" id="addr" placeholder="" required>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Please provide your address.</div>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zip Code:</label>
                    <input type="text" class="form-control" name="zipcode" id="zcode" minlength="6" maxlength="6"
                        placeholder="" required>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Zip code must be min. 6 numbers</div>
                </div>
                <button class="btn btn-warning btn-l btn-block" style="color: white;">Check Form</button>
                <br>

            </form>
        </div>
    </div>

</body>

</html>
