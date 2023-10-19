<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #007bff;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center">Report Pendapatan</h2>
    <table>
        <thead style="background-color: #007bff; color: white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Tanggal Booking</th>
                <th>Tanggal Cekout</th>
                <th>Harga Sewa</th>
                <th>Jenis Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->no_identitas }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->tanggal_booking }}</td>
                    <td>{{ $item->tanggal_cekout }}</td>
                    <td>{{ $item->harga_sewa }}</td>
                    <td>{{ $item->jenis_pembayaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
