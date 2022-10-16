<?= $this->extend('templates/header'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html>
<style>
    .borderlogin {
        margin-top: 80px;
        margin-bottom: 80px;
        height: 397px;
        width: 400px;
        background: white;
        border-radius: 10px;
        border: 2px solid #800000;
    }

    .borderlogin h3 {
        margin-top: 20px;
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
    }

    .col-auto label {
        margin-left: 20px;
        margin-top: 20px;
    }

    .col-auto input {
        margin-left: 20px;
        width: 90%;
    }

    .borderlogin button {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: 20px;
    }

    .col-auto span {
        margin-left: 20px;
        margin-right: 20px;
    }

    .fototoko {
        margin-top: 150px;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="row">
        <div class="col-lg-7">
            <img class="fs-2 fototoko" src="/Assets/AdminLTE-3.2.0/img/Siber-ket-toko.png" alt="Foto hilang" width="500px">
        </div>
        <div class="col-lg-5">
            <form class="borderlogin">
                <h3>Login</h3>
                <div class="col-auto">
                    <label class="label">NIK</label>
                    <input type="text" class="form-control " id="Text">
                </div>
                <div class="col-auto">
                    <label class="label ">PIN</label>
                    <input type="password" class="form-control" id="Password" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        <i>*NIK and PIN must be numeric characters.</i>
                    </span>
                </div>
                <button type="submit" class="btn btn-warning">Login</button>
            </form>
        </div>
    </div>
</body>

</html>

<?= $this->endSection('content'); ?>