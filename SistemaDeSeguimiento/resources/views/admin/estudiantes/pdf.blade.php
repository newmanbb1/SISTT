<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lero lero</title>
</head>

<style>
    table {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;
        margin-left: 10%;
        width: 80%;
        text-align: center;
        border-collapse: collapse;
    }

    th {
        font-size: 15px;
        font-weight: bold;
        padding: 8px;
        background: #b9c9fe;
        border-top: 4px solid #aabcfe;
        border-bottom: 1px solid #fff;
        color: #039;
    }

    td {
        padding: 8px;
        background: #e8edff;
        border-bottom: 1px solid #fff;
        color: #669;
        border-top: 1px solid transparent;
    }
    h2{
        text-align: center;
    }
</style>

<body>


    <br>


    <h2>Estudiantes Registrados</h2></br>
    <table>

        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Correo Usuario</th>

        </tr>
        <tr>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellido }}</td>
                <td>{{ $estudiante->celular }}</td>
                <td>{{ $estudiante->user->email }}</td>
            </tr>
            @endforeach
        </tr>


    </table>

</body>

</html>
