<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

    <table style="width:70%;margin:auto">
        <tr>
            <td colspan="2" style="text-align:center">
                <img style="width:200px;margin-top:35px;margin-bottom:25px" src="<?= asset('img/logo-cosmeticsurgery.png') ?>">
            </td>
        </tr>
        <tr style="background:#1877F2">
            <td colspan="2" style="font-size:20px;text-align:center;font-weight:bolder;color:#fff;">
                Patient appointment details
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right">
                <b>Date: </b>
                <?= date('d-m-Y') ?>
            </td>
        </tr>
        <tr>
            <th>Name: </th>
            <td><?= $data->name ?></td>
        </tr>
        <tr>
            <th>Phone: </th>
            <td><?= $data->phone ?></td>
        </tr>
        <tr>
            <th>Email: </th>
            <td><?= $data->email ?></td>
        </tr>
        <tr>
            <th>Age: </th>
            <td><?= $data->age ?></td>
        </tr>
        <tr>
            <th>Location: </th>
            <td><?= $data->location ?></td>
        </tr>
        <tr>
            <th>Gender: </th>
            <td><?= $data->gender ?></td>
        </tr>
        <tr>
            <th>Appointment For: </th>
            <td><?= $data->appointment_for ?></td>
        </tr>
        <tr>
            <th>Message: </th>
            <td><?= $data->message ?></td>
        </tr>
        <tr>
            <th>retrievedUrl: </th>
            <td><?= $data->url ?></td>
        </tr>

    </table>
</body>

</html>