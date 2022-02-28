<!DOCTYPE html>
<html>
<head>
    <title>Ihsan App | Products</title>
</head>
<style type="text/css">
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table td, table th{
        border:1px solid rgb(206, 73, 56);
    }
    table tr, table td{
        padding: 5px;
    }
    table th {
        background-color: rgb(214, 110, 110);


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
        @foreach ($items->products as $key => $item)

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
