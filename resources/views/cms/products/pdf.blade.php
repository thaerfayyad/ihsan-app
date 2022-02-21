<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF from html view file and download using dompdf in Laravel</title>
</head>
<style type="text/css">
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table td, table th{
        border:1px solid black;
    }
    table tr, table td{
        padding: 5px;
    }
</style>
<body>
    <div class="container">
    <br/>

    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        @foreach ($items as $key => $item)

            <tr>

                </td>
                <td>{{ ++$key }}</td>


                <td >{{ $item->name }}</td>
                <td>{{ $item->size }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
