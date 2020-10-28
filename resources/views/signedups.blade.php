<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .cover {
        position: fixed;
        height: 100vh;
        width: 100vw;
        background: rgb(20, 20, 20);
        display: flex;
        align-content: center;
        align-items: center;
    }

    body {
        overflow: hidden;
    }
</style>

<body>


    <div class="cover">

        <div class="form-group mx-auto">
            <label class="text-white text-right d-block"> رمز عبور</label>
            <input type="password" class="form-control js-sigendups-input"  placeholder="******">
            <button class="btn-light btn text-right float-right d-block mt-2 js-sigendups-btn">ورود</button>
        </div>
    </div>

    <table class="table">
        <thead>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>مبلغ</th>
            <th>کد دانشجویی/پزشکی</th>
            <th>ایمیل</th>
            <th>تماس</th>
            <th>رمز</th>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr>
                <td>{{$payment->name}}</td>
                <td>{{$payment->lastname}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->code}}</td>
                <td>{{$payment->email}}</td>
                <td>{{$payment->phone}}</td>
                <td>{{$payment->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        $('.js-sigendups-btn').click(function(){
      
        if($('.js-sigendups-input').val() == "112211aa00"){
            $('.cover').hide();
            $(document.body).css("overflow","scroll")
        }else{
            alert('اشتباه')
        }
    })
    </script>
</body>

</html>