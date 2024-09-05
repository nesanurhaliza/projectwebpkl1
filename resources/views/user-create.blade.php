<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="user">
        @if ($errors -> any())
        <ul>
            @foreach (@errors -> all() as $item)
                <li>$item</li>
        </ul>
        @endif
        <form action="/user/create" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>
                        <input type="text" name="name" placeholder="Nama" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" placeholder="Email" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Password" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="foto" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="tambah" id="">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>