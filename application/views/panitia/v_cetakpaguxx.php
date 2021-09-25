<html><head>
<title>Contoh pemakaian attribut rules dalam Tabel HTML</title></head><body>
<h2>Belajar atribut rules dalam Tabel HTML</h2>
<h4>rules = "rows"</h4>
<style>
table {
  border-collapse: collapse;
}

table tr {
  border-bottom: 1px solid black;
}

table tr:last-child {
  border: 0;
}
</style>



		
<table rules="rows">
    <tr>
        <th>Judul 1</th>
        <th>Judul 2</th>
        <th>Judul 3</th>
    </tr>
    <tr>
        <td>Baris 1, Kolom 1</td>
        <td>Baris 1, Kolom 2</td>
        <td>Baris 1, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 2, Kolom 1</td>
        <td>Baris 2, Kolom 2</td>
        <td>Baris 2, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 3, Kolom 1</td>
        <td>Baris 3, Kolom 2</td>
        <td>Baris 3, Kolom 3</td>
    </tr>
</table>
<h4>rules = "cols"</h4>
<table rules="cols">
    <tr>
        <th>Judul 1</th>
        <th>Judul 2</th>
        <th>Judul 3</th>
    </tr>
    <tr>
        <td>Baris 1, Kolom 1</td>
        <td>Baris 1, Kolom 2</td>
        <td>Baris 1, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 2, Kolom 1</td>
        <td>Baris 2, Kolom 2</td>
        <td>Baris 2, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 3, Kolom 1</td>
        <td>Baris 3, Kolom 2</td>
        <td>Baris 3, Kolom 3</td>
    </tr>
</table>
<h4>rules = "all"</h4>
<table rules="all" border="1"> 
    <tr>
        <th>Judul 1</th>
        <th>Judul 2</th>
        <th>Judul 3</th>
    </tr>
    <tr>
        <td>Baris 1, Kolom 1</td>
        <td>Baris 1, Kolom 2</td>
        <td>Baris 1, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 2, Kolom 1</td>
        <td>Baris 2, Kolom 2</td>
        <td>Baris 2, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 3, Kolom 1</td>
        <td>Baris 3, Kolom 2</td>
        <td>Baris 3, Kolom 3</td>
    </tr>
</table>
<h4>rules="none", border="1"</h4>
<table rules="none" border="1" >
    <tr>
        <th>Judul 1</th>
        <th>Judul 2</th>
        <th>Judul 3</th>
    </tr>
    <tr>
        <td>Baris 1, Kolom 1</td>
        <td>Baris 1, Kolom 2</td>
        <td>Baris 1, Kolom 3</td>
    </tr>
    <tr>
        <td>Baris 2, Kolom 1</td>
        <td>Baris 2, Kolom 2</td>
        <td>Baris 2, Kolom 3</td>
    </tr>
                <tr>
        <td>Baris 3, Kolom 1</td>
        <td>Baris 3, Kolom 2</td>
        <td>Baris 3, Kolom 3</td>
    </tr>
</table>
</body></html>